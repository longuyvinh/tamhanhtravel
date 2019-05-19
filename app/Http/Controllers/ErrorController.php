<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ErrorController extends Controller
{
	public function index(){
		echo "trang bao loi";
	}
    public function permission(){
    	return view('auth.permission');
    }

    public function error404(){
        \Debugbar::disable();
        //return view('frontend.404',['page' => 'error404']);
        echo 'trang bi loi';
    }
}
