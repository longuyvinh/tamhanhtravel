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
use App\Models\Tours;
use App\Models\Category;
class TicketController extends Controller
{
	public function schedule()
    {	
        $user = \Auth::user(); 
        $catRoot = Category::getCategoryTourRoot();

        $category_main = Category::where('status','1')->where('idparent','=',1)->select('id','idparent','name_vn')->get();
        $categories= Category::whereNotBetween('id',[1,8])->get(); 

        return view('backend.admin.tour.create_edit')
                ->with('categories', $categories)
                ->with('user',$user)
                ->with('catRoot',$catRoot)
                ->with('category_main',$category_main);
    }
}