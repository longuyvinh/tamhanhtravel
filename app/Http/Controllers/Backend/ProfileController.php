<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use File;
use Session;
use Config;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $country = DB::table('country')->get();
        return view('backend.admin.profile.index')->with('user',$user)->with('country',$country);
    }
    public function listProfile()
    {
        //$user = \Auth::user();
        //$profiles = User::whereNull('deleted_at')->with('role')->orderBy('id', 'desc')->get();
        //$country = DB::table('country')->get();
        try {
          $profiles = User::select(DB::raw("user.*, role.name as role_name"))
              ->join("role", "role.id", "user.role_id")
              ->whereNull('user.deleted_at')
              ->orderBy('user.updated_at', 'desc')
              ->paginate(Config::get('tamhanh.setting.pagination'));

        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }

        return view('backend.admin.profile.list')->with('profiles',$profiles);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \Auth::user(); # Không có sẽ báo lỗi bên app.blade
        $country = DB::table('country')->get();
        $roles = DB::table('role')->get();
        return view('backend.admin.profile.create')->with('user',$user)->with('country',$country)->with('roles',$roles);

    }
    public function createProfile(Request $request)
    {

        $user = \Auth::user();
        $country = DB::table('country')->get();
        $roles = DB::table('role')->get();


        $rules = array(
            'username'        => 'required|max:55',
            'email'        => 'required|max:55',
            'address' => 'max:255'


        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            Session::set('message', 'Kiểm tra lại dữ liệu đã nhập');
            return redirect('admin/profile/create')->with('user',$user)->with('country',$country)->with('roles',$roles);
        }
        $check = DB::table('users')->where('phone',$request->input('phone'))->first();
        if(!empty($check->phone) )
        {
            Session::set('message', 'Số điện thoại '.$sodienthoai.' tồn tại !');
            return redirect('admin/profile/create')->with('user',$user)->with('country',$country)->with('roles',$roles);
        }
        $check = DB::table('users')->where('name',$request->input('username'))->first();
        if(!empty($check->name) )
        {
            Session::set('message', 'Username tồn tại !');
            return redirect('junglejungle/profile/create')->with('user',$user)->with('country',$country)->with('roles',$roles);
        }
        $check = DB::table('users')->where('email',$request->input('email'))->first();
        if(!empty($check->email) )
        {
            Session::set('message', 'Email tồn tại !');
            return redirect('junglejungle/profile/create')->with('user',$user)->with('country',$country)->with('roles',$roles);
        }

        $usr = new User;
        $usr->name            = $request->input('username');
        $usr->password        = bcrypt($request->input('password'));
        $usr->role_id         = $request->input('role');
        $usr->phone           = $request->input('phone');
        $usr->address         = $request->input('address');
        $usr->skype           = $request->input('skype');
        $usr->facebook        = $request->input('facebook');
        $usr->country         = $request->input('country');
        $usr->email           = $request->input('email');

        if($user->role_id == 1 ||  $user->role_id==2){  # Cho phép người thêm mới User chỉ có thể là root và admin
            if($request->file('avatar'))
            {
                $imageTempName = $request->file('avatar')->getPathname();
                $extension = $request->file('avatar')->getClientOriginalExtension();
                $fileName = $request->input('username').'.'.$extension;
                $path = base_path() . '/public/images/avatar/';
                $request->file('avatar')->move($path , $fileName);
                $usr->avatar = $fileName;
            }
            $usr->save();
            Session::set('message', 'Thêm thành công !');
        }
        else{
            Session::set('message', 'Bạn không đủ quyền. Liên hệ admin !');
        }

        return redirect('jungle/profile/create')->with('user',$user)->with('country',$country)->with('roles',$roles);
    }
    /**
     * Update
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \Auth::user();
        $country = DB::table('country')->get();
        $password = bcrypt($request->input('password'));
        $phone = $request->input('phone');
        $skype = $request->input('skype');
        $facebook = $request->input('facebook');
        $address = $request->input('address');
        $country_txt = $request->input('country');

        $re = DB::table('users')->where('id', $user->id);
        if($request->file('avatar')){
            $imageTempName = $request->file('avatar')->getPathname();
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $fileName = $request->input('username').'.'.$extension;
            $path = base_path() . '/public/images/avatar/';
            $request->file('avatar')->move($path , $fileName);
           # File::delete( $path.'/'.$fileName);
            $re->update([ 'avatar' => $fileName ]);
        }
        if($password != '')
            $re->update([ 'password' => $password] );
        if($phone!='')
            $re->update(['phone' => $phone]);
        if($skype!='')
            $re->update(['skype' => $skype]);
        if($facebook!='')
            $re->update(['facebook' => $facebook]);
        if($address!='')
            $re->update(['address' => $address]);
        if($country_txt!='')
            $re->update(['country' => $country_txt]);
        else{
            Session::set('message', 'Cập nhật thất bại !');
        }
        Session::set('message', 'Cập nhật thành công !');
        $user = \Auth::user();
        return redirect('jungle/profile/')->with('user',$user)->with('country',$country);
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
    public function editProfile($id){
        #$id = $request->input('id');

        $user = \Auth::user();
        $profile =User::where('id',$id)->get();
        $country = DB::table('country')->get();
        $roles = DB::table('role')->get();
        return view('backend.admin.profile.edit')->with('profile',$profile)->with('user',$user)->with('country',$country)->with('roles',$roles);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    # Admin update User
    public function update(Request $request)
    {
         $user = \Auth::user();
          $id = $request->input('txtid');
        $country = DB::table('country')->get();
        $password = bcrypt($request->input('password'));
        $phone = $request->input('phone');
        $skype = $request->input('skype');
        $facebook = $request->input('facebook');
        $address = $request->input('address');
        $country_txt = $request->input('country');
        $role = $request->input('role');
        $username = $request->input('username');
        $re = DB::table('users')->where('id',$id);
        if($request->file('avatar')){
            $imageTempName = $request->file('avatar')->getPathname();
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $fileName = $username.'.'.$extension;
            $path = base_path() . '/public/images/avatar/';
            $request->file('avatar')->move($path , $fileName);

           # File::delete( $path.'/'.$fileName);
            $re->update([ 'avatar' => $fileName ]);

        }
        if($password != '')
            $re->update([ 'password' => $password] );
        if($role != '')
            $re->update([ 'role_id' => $role] );
        if($phone!='')
            $re->update(['phone' => $phone]);
        if($skype!='')
            $re->update(['skype' => $skype]);
        if($facebook!='')
            $re->update(['facebook' => $facebook]);
        if($address!='')
            $re->update(['address' => $address]);
        if($country_txt!='')
            $re->update(['country' => $country_txt]);
        else{
            Session::set('message', 'Cập nhật thất bại !');
        }
        Session::set('message', 'Cập nhật thành công !');
        $user = \Auth::user();
        $roles = DB::table('role')->get();
        return redirect('jungle/profile/list')->with('user',$user)->with('country',$country)->with('roles',$roles);
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
        Users::destroy($id); //Xoa vao deleted_at
        $profiles = User::whereNull('deleted_at')->orderBy('id', 'desc')->get();
        $country = DB::table('country')->get();
        Session::set('message', 'Xóa user vào sọt rác !');
        return view('backend.admin.profile.list')
               ->with('user',$user)
               ->with('profiles',$profiles)->with('country',$country);
    }
    # Danh sach User da xoa
    public function listTrash()
    {
        $user = \Auth::user();
        $profiles = User::onlyTrashed()->orderBy('id', 'desc')->get();
        $country = DB::table('country')->get();
        return view('backend.admin.profile.trash')
               ->with('user',$user)
               ->with('profiles',$profiles)->with('country',$country);
    }
    /* Xử lý khi User muốn restore lại row đã xóa */
    public function restore($id){
        Session::set('message', 'Restore thành công !');
        $user = \Auth::user();
        Users::onlyTrashed()->where('id', $id)->restore();
        $profiles = Users::onlyTrashed()->orderBy('id', 'desc')->get();
        $country = DB::table('country')->get();
        return view('backend.admin.profile.trash')
               ->with('user',$user)
               ->with('profiles',$profiles)->with('country',$country);
    }
    /*
    * Xóa khỏi database
    */
    public function delete($id)
    {
        Session::set('message', 'User đã được xóa khỏi database !');
        $user = \Auth::user();
        $profiles = User::onlyTrashed()->where('id',$id)->get();
        $path = base_path() . '/public/images/avatar/';
        File::delete( $path.'/'.$profiles[0]->avatar);
        Users::onlyTrashed()->where('id',$id)->forceDelete();
        $profiles = Users::onlyTrashed()->orderBy('id', 'desc')->get();
        $country = DB::table('country')->get();
        return view('backend.admin.profile.trash')
               ->with('user',$user)
               ->with('profiles',$profiles)->with('country',$country);
    }


}
