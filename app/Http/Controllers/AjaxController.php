<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Models\Media;

class AjaxController extends Controller
{
    public function getCategorySub($cat_id){
    	echo json_encode(\App\Models\Category::getCategorySub($cat_id));
    }

    public function uploadImage(Request $request){

  		$file = Input::file('image');
	    $input = array('image' => $file);

	    $destinationPath = public_path().'/images/news/';
	    $filename = md5(microtime() . $file->getClientOriginalName()) . "." . $file->getClientOriginalExtension();
	    Input::file('image')->move($destinationPath, $filename);

        $media = Media::create(['name' => $filename, 'type'=>'image', 'status'=>'pending', 'user_id'=>\Auth::id()]);
        if($media)
	       return Response::json(['filename' => $filename]);
        else
            return Response::json(['filename' => '']);
    }

    public function testing(){
    	echo 'testing';
    }

    public function uploadImageAjax(Request $request){
      // $file = Input::file('image');
	    // $input = array('image' => $file);
      $validator = Validator::make($request->all(),
            [
                'file' => 'image',
            ],
            [
                'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
            ]);
        if ($validator->fails())
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        $extension = $request->file('file')->getClientOriginalExtension(); // getting image extension
        $dir = 'images/news/';
        $filename = uniqid() . '_' . time() . '.' . $extension;
        $request->file('file')->move($dir, $filename);
        return $filename;
    }
}
