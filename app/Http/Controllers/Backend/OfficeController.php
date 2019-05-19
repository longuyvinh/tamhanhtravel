<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Http\Response; //not working
use Illuminate\Support\Facades\Response;

use DB;
use Session;
use App\Models\Offices;
use App\Models\Category;
class OfficeController extends Controller
{
	public function index()
    {
        $user = \Auth::user(); 
        $catRoot = Category::getCategoryTourRoot();

        $offices = Offices::where('status', 1)->orderBy('weight', 'ASC')->get();

        return view('backend.admin.offices.listing')
                ->with('user',$user)
                ->with('catRoot',$catRoot)
                ->with('offices',$offices);
    }

    public function addnew(){
        echo 'trang add new';
    }
}