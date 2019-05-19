<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use File;

class SettingsController extends Controller {

    public function __construct() {
        // $this->middleware('auth');
       // $this->middleware('web');

        \View::share('group', 'Setting');
        \View::share('header', 'Settings');
    }

    public function getIndex() {
        $settings = Setting::withTrashed()
                ->orderBy('id', 'desc')
                ->get();

        $data = array(
            'settings' => $settings
        );
        return view('backend.settings.index', $data);
    }

    public function postStore(Request $request) {
        $this->validate($request, [
            'key' => 'required|max:255',
            'value' => 'required|max:255',
            //'description' => 'required|max:255',
        ]);


        $setting = new Setting;
        $setting->key = $request->key;
        $setting->value = $request->value;
        $setting->description = $request->description;
        $setting->save();

        return redirect('/settings');
    }

    public function postUpdate($id, Request $request) {
        $this->validate($request, [
            'key' => 'required|max:255',
            'value' => 'required|max:255',
        ]);

        $setting = Setting::findOrFail($id);
        //$setting->key = $request->key;
        $setting->value = $request->value;
        $setting->description = $request->description;
        $setting->save();

        return redirect('/settings');
    }

    public function getEdit($id, Request $request) {
        $setting = Setting::findOrFail($id);

        $data = array(
            'setting' => $setting
        );
        return view('backend.settings.edit', $data);
    }

    public function deleteDestroy($id, Request $request) {
        // $this->authorize('destroy', $propertyGroupType);
        $setting= Setting::findOrFail($id);

        if($setting->delete())
        {
            $request->session()->flash("success_message", "Setting deleted successfully!");
        }
        else
        {
            $request->session()->flash("fail_message", "Can't delete Setting!");
        }

        return redirect('/settings');
    }

    /**
     * @Desc restore a Setting
     * @param Integer id, Request $request
     * @return void
     * @author Hung <hung@magiclabs.vn>
     */
    public function postRestore($id, Request $request)
    {
        $setting = Setting::where('id', $id)->withTrashed()->first();

        if($setting->restore())
        {
            $request->session()->flash("success_message", "Setting restored successfully!");
        }
        else
        {
            $request->session()->flash("fail_message", "Can't restore Setting!");
        }

        return redirect('/settings');
    }

    public function getWrite(Request $request) {



        $settings = Setting::all();

        // get file content
        $file_content = "<?php \n\n/**\n*  Magic FrameWork\n* @author datlm \n* @copyright Le Minh Dat\n* \n* File config\n* \n* @subpackage System\n* @version 1.0.0\n*/\n\n\nreturn array(\n\n";
        foreach ($settings as $setting)
        {
            $file_content .= "'" . $setting['key'] . "' => '" . html_entity_decode($setting['value']) . "', ";
            $file_content .= "// " . $setting['description'] . "\n";
        }
        $file_content .= "\n);";

        $contents = File::put(base_path() . '/config/magic_config/magic_settings.php', $file_content);
        //var_dump(base_path());die;
        if($contents){
            $request->session()->flash("success_message", "File written successfully!");
            return redirect('/settings');
        }
        return redirect('/settings');
    }

}
