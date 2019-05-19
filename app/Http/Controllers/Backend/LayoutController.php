<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layout;
use App\Models\LayoutLang;
use App\Models\Language;
use File;

class LayoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        //$this->middleware('web');

        \View::share('group', 'Language');
        \View::share('header', 'Layouts');
    }

    /**
     * @Desc render view index
     * @param Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function index()
    {
        return view('backend.layouts.index');
    }

    /**
     * @Desc update value for a key
     * @param Integer id, Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function updateValue($id, Request $request)
    {
        $languages = Language::orderBy('name', 'asc')->get();
        
        //Validate all fields
        $arrFieldsValidation = [];
        foreach ($languages as $language) 
        {
            $arrFieldsValidation['value_'.$language['short_name']] = 'required';
        }
        $this->validate($request, $arrFieldsValidation);

        //Find the selected Layout
        $layout = Layout::where(array('id' => $id))->first();

        if(!$layout)
        {
            $request->session()->flash("fail_message", "Can't update Layout Language!");
        }
        else
        {
            $layoutLangs = $layout->layoutLangs;
            
            //Update all facilityLangs belongs to this facility
            $arrUpdated = [];
            foreach ($layoutLangs as $layoutLang) 
            {
                array_push($arrUpdated, $layoutLang->language_id);
                $fieldName = 'value_'.$layoutLang['short_name_lang'];
                $layoutLang->value = $request->$fieldName;
                $layoutLang->save();
            }

            //In case there are new languages, they won't exists in LayoutLang
            //we need to insert them
            foreach ($languages as $language) 
            {
                if(!in_array($language->id, $arrUpdated))
                {
                    $fieldName = 'value_'.$language['short_name'];
                    $layoutLang = new LayoutLang;
                    $layoutLang->layout_id = $id;
                    $layoutLang->language_id = $language->id;
                    $layoutLang->short_name_lang = $language->short_name;
                    $layoutLang->value = $request->$fieldName;                
                    $layoutLang->save();
                }
            }

            $request->session()->flash("success_message", "Layout Language updated successfully!");
        }

        return redirect('/layouts/'.$layout->file_name.'/edit');
    }

    /**
     * @Desc render view edit file
     * @param String file name, Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function edit($fileName, Request $request)
    {
        $languages = Language::orderBy('name', 'asc')->get()->toArray();

        $layouts = Layout::where(array('file_name' => $fileName))
                        ->with('layoutLangs', 'parentLayout')
                        ->get();

        if(!$layouts)
        {
            abort(404);
        }
        else
        {
            return view('backend.layouts.edit', [
                'datas' => $layouts->toArray(),
                'languages' => $languages
            ]);
        }
    }

    /**
     * @Desc render view edit a single LayoutLang
     * @param Integer id, Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function editValue($id, Request $request)
    {
        $languages = Language::orderBy('name', 'asc')->get()->toArray();

        $layout = Layout::where(array('id' => $id))
                        ->with('layoutLangs')
                        ->first();

        if(!$layout)
        {
            abort(404);
        }
        else
        {
            return view('backend.layouts.edit-value', [
                'data' => $layout->toArray(),
                'languages' => $languages
            ]);
        }
    }

    /**
     * @Desc write a language file
     * @param String fileName, Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function writeFile($fileName, Request $request) 
    {
        $layouts = Layout::where(array('file_name' => $fileName, 'parent_id' => 0))
                        ->with('layoutLangs')
                        ->get();

        $languages = Language::orderBy('name', 'asc')->get();

        $result = $this->writeLanguageToFile($fileName, $layouts, $languages);
        if(!$result)
        {
            $request->session()->flash("fail_message", "Can't write file!");
        }
        else
        {
            $request->session()->flash("success_message", "File written successfully!");
        }
        
        return redirect('/layouts/'.$fileName.'/edit');
    }

    /**
     * @Desc write all language file
     * @param Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function writeAllFile(Request $request) 
    {
        $languages = Language::orderBy('name', 'asc')->get();

        $languageFiles = ['common','dashboard','message','newlisting','properties','propertylisting','user', 'validator', 'validation','billing','auth','passwords','pdf','profile'];

        foreach ($languageFiles as $languageFile) 
        {
            $layouts = Layout::where(array('file_name' => $languageFile, 'parent_id' => 0))
                        ->with('layoutLangs')
                        ->get();

            $result = $this->writeLanguageToFile($languageFile, $layouts, $languages);
            if(!$result)
            {
                $request->session()->flash("fail_message", "Can't write file!");
                return redirect('/layouts');
            }
        }
        
        $request->session()->flash("success_message", "File written successfully!");
        return redirect('/layouts');
    }

    /**
     * @Desc write language files to resources/lang
     * @param Array layouts, Array languages
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    protected function writeLanguageToFile($fileName, $layouts, $languages)
    {
        foreach ($languages as $language)
        {
            $file_content = "<?php return array(\n\n";

            if($fileName === 'validation')
            {
                foreach ($layouts as $layout) 
                {
                    $childLayouts = Layout::where(array('parent_id' => $layout->id))
                                ->with('layoutLangs')
                                ->get();

                    if(count($childLayouts) > 0) //This key is an array
                    {
                        $file_content .= "\t'" . $layout->key . "' => [\n";

                        foreach ($childLayouts as $childLayout) 
                        {
                            $file_content .= "\t" . $this->generateLanguageContent($childLayout, $language);
                        }

                        $file_content .= "\t],\n";                        
                    }
                    else //Normal string
                    {
                        $file_content .= $this->generateLanguageContent($layout, $language);
                    }
                }

                $file_content .= "\t'custom' => [\n";
                    $file_content .= "\t\t'attribute-name' => [\n";
                        $file_content .= "\t\t\t'rule-name' => 'custom-message',\n";
                    $file_content .= "\t\t],\n";
                $file_content .= "\t],\n";
            }
            else
            {
                foreach ($layouts as $layout) 
                {
                   $file_content .= $this->generateLanguageContent($layout, $language);
                } 
            }            
        
            $file_content .= "\n);";

            $directory = base_path() . '/resources/lang/'.$language->short_name;
            if(!file_exists($directory))
            {
                mkdir($directory, 0777);
            }

            $contents = File::put($directory.'/'.$fileName.'.php', $file_content);
            if(!$contents){
                return false;
            }
        }
        return true;
    }

    protected function generateLanguageContent($layout, $language)
    {
        $item = \Helper::searchInArrayObject($layout->layoutLangs, 'language_id', $language->id);

        $data = "\t'" . $layout->key . "' => '" . \Helper::escapeSingleQuote($item->value) . "',\n";
        return $data;
    }
}
