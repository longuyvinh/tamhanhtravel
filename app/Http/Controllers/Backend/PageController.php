<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageLang;
use App\Models\Language;

class PageController extends Controller
{
    /**
     * GroupTypeController constructor.
     */
    public function __construct()
    {
        // $this->middleware('auth');

        \View::share('group', 'Page');
        \View::share('header', 'Pages');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Hung <hung@magiclabs.vn>
     */
    public function index()
    {
        $pages = Page::withTrashed()
                        ->with('pageLangs')
                        ->orderBy('id', 'asc')
                        ->get()
                        ->toArray();

        $languages = Language::orderBy('name', 'asc')->get()->toArray();

        return view('backend.pages.index', [
            'datas' => $pages,
            'languages' => $languages
        ]);
    }

    /**
     * @Desc add new Page
     * @param Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function store(Request $request)
    {
        $languages = Language::orderBy('name', 'asc')->get();
        
        //Validate all fields
        $arrFieldsValidation = [];
        foreach ($languages as $language) 
        {
            $arrFieldsValidation['title_'.$language['short_name']] = 'required';
            $arrFieldsValidation['content_'.$language['short_name']] = 'required';
        }
        $arrFieldsValidation['slug'] = 'required|unique:page,slug';
        $this->validate($request, $arrFieldsValidation);

        //Insert to table Page
        $page = new Page;
        $page->slug = $request->slug;
        
        if($page->save())
        {
            $id = $page->id;
            
            foreach ($languages as $language) 
            {
                $fieldTitle = 'title_'.$language['short_name'];
                $fieldSubtitle = 'sub_title_'.$language['short_name'];
                $fieldContent = 'content_'.$language['short_name'];
                $pageLang = new PageLang;
                $pageLang->page_id = $id;
                $pageLang->language_id = $language['id'];
                $pageLang->short_name_lang = $language['short_name'];
                $pageLang->title = $request->$fieldTitle;
                $pageLang->sub_title = $request->$fieldSubtitle;
                $pageLang->content = htmlentities($request->$fieldContent);
                $pageLang->save();
            }

            $request->session()->flash("success_message", "Page inserted successfully!");
        }
        else
        {
            $request->session()->flash("fail_message", "Can't insert Page!");
        }

        return redirect('/pages');
    }

    /**
     * @Desc update a Page
     * @param Integer id, Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function update($id, Request $request)
    {
        $languages = Language::orderBy('name', 'asc')->get();
        
        //Validate all fields
        $arrFieldsValidation = [];
        foreach ($languages as $language) 
        {
            $arrFieldsValidation['title_'.$language['short_name']] = 'required';
            $arrFieldsValidation['content_'.$language['short_name']] = 'required';
        }
        $arrFieldsValidation['slug'] = 'required';
        $this->validate($request, $arrFieldsValidation);

        //Find the selected Page
        $page = Page::where(array('id' => $id))->first();

        if(!$page)
        {
            $request->session()->flash("fail_message", "Can't update Page!");
        }
        else
        {
            if($page->slug !== $request->slug)
            {
                $page->slug = $request->slug;
                $page->save();
            }

            $pageLangs = $page->pageLangs;
            
            //Update all pageLangs belongs to this page
            $arrUpdated = [];
            foreach ($pageLangs as $pageLang) 
            {
                array_push($arrUpdated, $pageLang->language_id);
                $fieldTitle = 'title_'.$pageLang['short_name_lang'];
                $fieldSubtitle = 'sub_title_'.$pageLang['short_name_lang'];
                $fieldContent = 'content_'.$pageLang['short_name_lang'];                

                $pageLang->title = $request->$fieldTitle;
                $pageLang->sub_title = $request->$fieldSubtitle;
                $pageLang->content = htmlentities($request->$fieldContent);
                $pageLang->save();
            }

            //In case there are new languages, they won't exists in PageLang
            //we need to insert them
            foreach ($languages as $language) 
            {
                if(!in_array($language->id, $arrUpdated))
                {
                    $fieldTitle = 'title_'.$language['short_name'];
                    $fieldSubtitle = 'sub_title_'.$language['short_name'];
                    $fieldContent = 'content_'.$language['short_name'];     

                    $pageLang = new PageLang;
                    $pageLang->page_id = $id;
                    $pageLang->language_id = $language->id;
                    $pageLang->short_name_lang = $language->short_name;
                    $pageLang->title = $request->$fieldTitle;
                    $pageLang->sub_title = $request->$fieldSubtitle;
                    $pageLang->content = htmlentities($request->$fieldContent);               
                    $pageLang->save();
                }
            }

            $request->session()->flash("success_message", "Page updated successfully!");
        }

        return redirect('/pages');
    }

    /**
     * @Desc render view Edit Page
     * @param Integer id, Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function edit($id, Request $request)
    {
        $languages = Language::orderBy('name', 'asc')->get()->toArray();

        $page = Page::where(array('id' => $id))
                        ->with('pageLangs')
                        ->first();

        if(!$page)
        {
            abort(404);
        }
        else
        {
            return view('backend.pages.edit', [
                'data' => $page->toArray(),
                'languages' => $languages
            ]);
        }
    }

    /**
     * @Desc delete a Language
     * @param Integer id, Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function destroy($id, Request $request)
    {
        $page = Page::findOrFail($id);
        
        if($page->delete())
        {
            $request->session()->flash("success_message", "Page deleted successfully!");
        }
        else
        {
            $request->session()->flash("fail_message", "Can't delete Page!");
        }

        return redirect('/pages');
    }

    public function write(Request $request) {
        $languages = Language::get();
        
        // get file content
        $file_content = "<?php return array(\n\n";
        foreach ($languages as $language)
        {
            $file_content .= "'" . $language['short_name'] . "' => '" . $language['name'] . "', ";
            $file_content .= "// " . $language['description'] . "\n";
        }
        $file_content .= "\n);";
        
        $contents = File::put(base_path() . '/config/magic_config/languages.php', $file_content);
        if($contents){
            $request->session()->flash("success_message", "File written successfully!");
        }
        return redirect('/languages');
    }

    /**
     * @Desc restore a Page
     * @param Integer id, Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function restore($id, Request $request)
    {
        $page = Page::where('id', $id)->withTrashed()->first();

        if($page->restore())
        {
            $request->session()->flash("success_message", "Page restored successfully!");
        }
        else
        {
            $request->session()->flash("fail_message", "Can't restore Page!");
        }

        return redirect('/pages');
    }
}
