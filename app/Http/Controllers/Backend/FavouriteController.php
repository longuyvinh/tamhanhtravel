<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FavouriteController extends Controller
{
    public function __construct()
    {
    }

    public function index(){
      $user = \Auth::user();
      return view('backend.favourite.listing')->with('user',$user);
    }

    public function getCreate(){
      try {

      } catch (Exception $exception) {
        return Respond::back()->with('error', $exception->getMessage());
      }
      return view('backend.favourite.create');
    }

    public function postCreate(Request $request){
      try {
        echo $request->input('titleEn');
        echo $request->input('titleVn');
        echo '<br>';
        echo $request->input('slugEn');
        echo $request->input('slugVn');
        echo '<br>';
        die();
        /*
        $this->validate($request, [
          'titleEn' => 'required',
          'titleVn' => 'required',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        */
        //echo "submit"; die();

        /*
        $width = 300; $height= 300;

        $image = $request->file('image');

        $input['imagename'] = $width.'x'.$height.'-'.md5(time()).'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/images/news');
        //$img = Image::make($image->getRealPath());
        $img = Image::make($image->getRealPath(),array(
            'width' => $width,
            'height' => $height,
            'grayscale' => false
        ))->save($destinationPath.'/'.$input['imagename']);
        ///$img->resize(100, 100, function ($constraint) {$constraint->aspectRatio();})->save($destinationPath.'/'.$input['imagename']);
        // $destinationPath = public_path('/images/news');
        // $image->move($destinationPath, $input['imagename']);
        // $this->postImage->add($input);*/
        //die('post hnh thanh cong');
      } catch (Exception $exception) {
        return redirect()->back()->with('error', $exception->getMessage())->with('user','vinh');
      }
    }

    public function getList(){
      try {

      } catch (Exception $exception) {
        return Respond::back()->with('error', $exception->getMessage());
      }
      return view('backend.favourite.list');
    }
}
