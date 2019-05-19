<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use File;
use Session;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
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
       // echo $password;exit;
        //if($password!='') {
         //   return redirect()->back();
       // }
        $re = DB::table('users')->where('id', $user->id);
        if($request->file('avatar')){
            $imageTempName = $request->file('avatar')->getPathname();
            $imageName = $request->file('avatar')->getClientOriginalName();
            $path = base_path() . '/public/images/avatar/';
            $request->file('avatar')->move($path , $imageName);
            
            File::delete( $path.'/'.$user->avatar);   
            $re->update([ 'avatar' => $imageName ]);
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
            Session::flash('message', 'Cập nhật thất bại !');
        }
        Session::flash('message', 'Cập nhật thành công !');
        $user = \Auth::user();
        return view('backend.admin.profile.index')->with('user',$user)->with('country',$country);
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
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
