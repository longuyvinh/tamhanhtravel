@extends('layouts.backend.app')
@section('container')

<form class="form-horizontal" role="form" name="frmEditProfile" id="frmEditProfile" method="POST" enctype="multipart/form-data" action="{{ url('/admin/profile') }}">
  
        {{ csrf_field() }}
<div class="container">

    <h1><i class="fa fa-angle-right"></i> Edit Profile</h1>
    <hr>
    <div class="row">
    <div id="notification" class="col-xs-12 col-sm-12 col-md-12"></div>
      <!-- left column -->
      <div class="col-sm-3">
        <div class="text-center">
          <img src="{{  asset('/images/avatar/') }}/{{ $user->avatar}}" width="120" height="120" class="avatar img-circle" alt="avatar">
          <h6>Upload avatar...</h6>
          <input type="file" class="form-control avatar" name="avatar" id="avatard">
          <input type="hidden" class="form-control avatar" name="username" id="username" value="{{$user->name}}">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-sm-5  ">
        
          @if (Session::has('message') and Session::get('message') !='')
            <div class="col-md-12 alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a> 
                <i class="fa fa-coffee"></i>
              <div class="alert alert-info"><center>{{ Session::get('message') }}</center></div>                
            </div>
            {{Session::set('message', '')}}
          @endif
        <h3>Thông tin cá nhân</h3>
        
        
          <div class="form-group">
            <label class=" col-sm-2  control-label">Name:</label>
            <div class=" col-sm-10 ">
              <input class="form-control" type="text" readonly="readonly" value="{{$user->name}}">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2  control-label">Phone:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="number" maxlength="11"  pattern=".{10,11}" class="form-control" name="phone" value="{{$user->phone}}">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2 control-label">Skype:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="text" maxlength="25" name="skype" value="{{$user->skype}}">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2 control-label">Facebook:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="text" id="facebook" name="facebook" value="{{$user->facebook}}">
              
            </div>
          </div>
          <div class="form-group">
            <label class="  col-sm-2 control-label">Address:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="text" name="address" value="{{$user->address}}">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2 control-label">Country:</label>
            <div class=" col-sm-10  ">
              <div class="ui-select">
                <select id="user_time_zone" name="country" class="form-control">
                  @foreach  ($country as $countr )
                    <option value="{{$countr->id}}" @if($countr->id == $user->country ) selected='selected' @endif >{{$countr->name}}</option>  
                  @endforeach               
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email:</label>
            <div class="col-sm-10 ">
              <input class="form-control" name="email" type="email" readonly="readonly" value="{{$user->email}}">
            </div>
          </div>
          
          
          <div class="form-group">
            <label class="  col-sm-2 control-label">Password:</label>
            <div class="col-sm-10  ">
              <input class="form-control" name="password" type="password" value="" placeholder="Password">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10 ">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>          
      </div>    
  </div>  
</div>    
 </form>

@endsection
