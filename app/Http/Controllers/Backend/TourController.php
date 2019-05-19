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
class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $user = \Auth::user();         
        $tours = DB::table('tours')
                ->whereNull('deleted_at')            
                ->orderBy('id', 'desc')->paginate(15);
        return view('backend.admin.tour.index')
               ->with('user',$user)
               //->with('tours1',$tours->toJson())
               ->with('tours',$tours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

    public function createTour(Request $request){
        $rules = array(
            'name_en'             => 'required', 
            'name_vn'             => 'required',
            'code'                => 'required',
            'image'              => 'required',
            'idcategory'         => 'required|Integer',
            'days'                => 'required|Integer|min:1',
            'transport'           => 'required',
            'infotour_en'         => 'required',
            'infotour_vn'         => 'required',
            'price_en'            => 'required|numeric',
            'price_en'            => 'required|numeric'
            
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {         
            return Response::json(['status'=>'fail', 'error'=>$validator]);
        }else{
            $user = \Auth::user();
            $user_role = $user->role_id;

            $tours = new Tours;
            $tours->name_en         = $request->input('name_en');
            $tours->name_vn         = $request->input('name_vn');
            $tours->code            = $request->input('code');
            $tours->idcategory      = $request->input('idcategory');
            $tours->days            = $request->input('days');
            $tours->nights          = $request->input('days');
            $tours->transport       = $request->input('transport');
            $tours->images          = $request->input('image');
            $tours->infotour_en     = $request->input('infotour_en');
            $tours->infotour_vn     = $request->input('infotour_vn');
            $tours->price_en        = $request->input('price_en');
            $tours->price_vn        = $request->input('price_vn');
            $tours->support_en      = $request->input('support_en');
            $tours->support_vn      = $request->input('support_vn');
            $tours->unsupport_en    = $request->input('unsupport_en');
            $tours->unsupport_vn    = $request->input('unsupport_vn');
            $tours->notify_en       = $request->input('notify_en');
            $tours->notify_vn       = $request->input('notify_vn');
            $tours->services_en     = $request->input('services_en');
            $tours->services_vn     = $request->input('services_vn');
            $tours->tags_en         = $request->input('tags_en');
            $tours->tags_vn         = $request->input('tags_vn');
            if($user_role == 4){
                $tours->status = 'pending';
            }else if(in_array($user_role, [1, 2, 3])){
                $tours->status = 'public';
            }
            $tours->save();
            return Response::json(['status'=>'success']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        // create the validation rules ------------------------
        $rules = array(
            'name_en'             => 'required|min:2|max:255', 
            'name_vn'             => 'required|min:2|max:255',
            'code'                => 'required|min:5|max:5',
            'idcagtegory'         => 'required|min:1',
            'days'                => 'Integer|min:1',
            'nights'              => 'Integer',
            'transport'           => 'required|min:1|max:55',
            'infotour_en'         => 'max:255',
            'infotour_vn'         => 'max:255',
            'price_en'            => 'required|min:1',
            'price_en'            => 'required|min:1',
            'support_en'          => 'max:255',
            'support_vn'          => 'max:255',
            'unsupport_en'        => 'max:255',
            'unsupport_vn'        => 'max:255',
            'notify_en'           => 'max:255',
            'notify_vn'           => 'max:255',
            'services_en'         => 'max:255',
            'services_vn'         => 'max:255',
            'tags'                => 'max:255',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {         
            $messages = $validator->messages();
            return Redirect::to('admin/tour/create')->withErrors($validator);
        }else{

            //$transport = implode(",", $request->get('transport'));
            $user = \Auth::user(); 

            $idcategory = explode(",", $request->input('idcagtegory'));

            $tours = new Tours;
            $tours->name_en = $request->input('name_en');
            $tours->name_vn = $request->input('name_vn');
            $tours->code = $request->input('code');
            $tours->idcategory = $idcategory[0];
            $tours->days = $request->input('days');
            $tours->nights = $request->input('nights');
            $tours->transport = json_encode($request->get('transport'));
            $tours->images = $request->input('images');
            $tours->infotour_en = $request->input('infotour_en');
            $tours->infotour_vn = $request->input('infotour_vn');
            $tours->price_en = $request->input('price_en');
            $tours->price_vn = $request->input('price_vn');
            $tours->support_en = $request->input('support_en');
            $tours->support_vn = $request->input('support_vn');
            $tours->unsupport_en = $request->input('unsupport_en');
            $tours->unsupport_vn = $request->input('unsupport_vn');
            $tours->notify_en = $request->input('notify_en');
            $tours->notify_vn = $request->input('notify_vn');
            $tours->services_en = $request->input('services_en');
            $tours->services_vn = $request->input('services_vn');
            $tours->tags = $request->input('tags');
            $tours->status = 'pending';
            //dd($tours);
            $tours->save();
           
            return view('backend.admin.tour.index',compact('user'));
        }
    }

    public function createDetail(){

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tour   = Tour::find($id);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /* Liệt kê row User đã xóa */
    public function listTrash(){
        $user = \Auth::user();                   
        $tours = Tours::onlyTrashed()->orderBy('id', 'desc')->paginate(15);                  
        return view('backend.admin.tour.trash')
               ->with('user',$user)
               ->with('tours',$tours);
    }

    /* Xử lý khi User muốn restore lại row đã xóa */
    public function restore($id){

        $user = \Auth::user();
        Tours::onlyTrashed()->where('id', $id)->restore();
        $tours = Tours::onlyTrashed()->orderBy('created_at', 'desc')->paginate(15);     
        return view('backend.admin.tour.trash')
               ->with('user',$user)
               ->with('tours',$tours);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $user = \Auth::user(); 
        Tours::destroy($id); //Xoa vao deleted_at 
        $tours = Tours::whereNull('deleted_at')->orderBy('id', 'desc')->paginate(15); 
        return view('backend.admin.tour.index')
               ->with('user',$user)
               ->with('tours',$tours);    
    }

    /*
    * Xóa khỏi database
    */
    public function delete($id)
    {
        $user = \Auth::user(); 
        Tours::onlyTrashed()->where('id',$id)->forceDelete();
        $tours = Tours::onlyTrashed()->orderBy('id', 'desc')->paginate(15);  
        return view('backend.admin.tour.trash')
           ->with('user',$user)
           ->with('tours',$tours); 
    }

     /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    
    public function search(Request $request)
    {  
        $user = \Auth::user(); 

        $output="";
        $keyworks = $request->keyworks;

        if($request->selectpage != '')
            Session::put('page',$request->selectpage);
        if($request->selectsearch !='')
            Session::put('code',$request->selectsearch);
        $tours=DB::table('tours')->select('days','price_vn','price_en', 'images', 'code','name_vn','id','status','deleted_at','created_at')                          
                ->whereNull('deleted_at')                       
                ->where(Session::get('code'),'like','%'.$keyworks.'%')                          
                ->orderBy('id', 'desc')->paginate(Session::get('page'))
                ->setPath ( '/admin/tour/search/'.$keyworks);
        if($request->ajax())
        {
            if($tours){
                    foreach($tours as $key => $tour)
                    {
                        $tmp = json_decode($tour->images);
                        $output.='<tr>'.
                         '<td>'.$tour->code.'</td>'.
                         '<td>'.$tour->name_vn.'</td>'.
                         '<td align="center">'.$tour->days.'</td>'.                        
                         '<td>'.$tour->price_vn.'</td>'.
                         '<td>'.$tour->price_en.'</td>'.
                         
                         '<td  width="90" align="center">'.date("d-m-Y",strtotime($tour->created_at)).'</td>'.
                         '<td><select name="select-status" id="select-status" class="select-status-'.$tour->id.'">
                              ';
                             
                                $output.='<option value="public-'.$tour->id.'" '.($tour->status=="public" ? 'selected="selected"' : '').' >public</option>';
                                $output.='<option value="pending-'.$tour->id.'" '.($tour->status=="pending" ? 'selected="selected"' : '').' >pending</option>';
                                $output.='<option value="expried-'.$tour->id.'" '.($tour->status=="expried" ? 'selected="selected"' : '').' >expried</option></select></td>
                                                              
                         <td><img src="'.asset('images/tours/').'/'.$tmp[0].'" width="150" alt="images" /></td>'
                         ;
                        if ( $user->role_id == 1 || $user->role_id == 2 || $user->role_id == 3)
                        {                           
                            $output.="<td  width='70'><a href=/admin/tour/edit/".$tour->id."><button class='btn btn-warning btn-xs' title='Sữa'><i class='fa fa-pencil'></i></button></a> <a href=/admin/tour/destroy/".$tour->id."><button class='btn btn-danger btn-xs' title='Xoa'><i class='fa fa-trash-o'></i></button></a></td></tr>";
                        }else{
                            $output.="<td  width='70'><a href=/admin/tour/edit/".$tour->id."><button class='btn btn-warning btn-xs' title='Sữa'><i class='fa fa-pencil'></i></button></a></td></tr>";
                        }                                                        
                    }
                    $output.='<tr><td colspan="7"><center>'.$tours->render().'</center></td></tr>'; 
                    if($output=='<tr><td colspan="7"><center></center></td></tr>')
                    {
                        $output.='<tr><td colspan="7" align="center"><h3>Không tìm thấy '.$keyworks.'</h3></td></tr>';
                    }        
                    return Response($output);
            }    
        }
        else
        {        
            return view('backend.admin.tour.index')
                   ->with('user',$user)
                   ->with('tours',$tours);                       
        }      
       
    }
    public function data(Request $request){
        $id = $request->id;
        $status = $request->status;
       
        DB::table('Tours')
            ->where('id', $id)
            ->update(['status' => $status]);                 
    }
    public function addDetail($id){
        return view('backend.admin.tour.add_detail', array('id'=>$id));
    }
}
