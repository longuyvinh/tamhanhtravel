<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesUsers , ThrottlesLogins;

    protected $redirectTo = 'jungle';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //\View::share('group', 'Users');
    }

    public function showLoginForm()
    {
        return view('auth.backend.login');
    }

    public function getLogout(){
        \Auth::logout();
        return redirect(env('BACK_URL').'/login');
    }

    public function index(){
        return view('backend.dashboard');
    }

    public function permission(){
        echo 'error';
        //return view('auth.permission');
    }

    public function uploads(Request $request){
      // $validator = Validator::make($request->all(),
      //       [
      //           'file' => 'image',
      //       ],
      //       [
      //           'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
      //       ]);
      //   if ($validator->fails())
      //       return array(
      //           'fail' => true,
      //           'errors' => $validator->getMessageBag()->toArray()
      //       );
        // $extension = $request->file('file')->getClientOriginalExtension(); // getting image extension
        // $dir = '/images/news/';
        // $filename = uniqid() . '_' . time() . '.' . $extension;
        // $request->file('file')->move($dir, $filename);
        // return $filename;
        return 'vinh tesst ajax';
    }

}
