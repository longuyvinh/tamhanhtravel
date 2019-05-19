<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function Introdution(){
      $user = \Auth::user();
      return view('backend.admin.setting.introdution')->with('user',$user);
    }
}
