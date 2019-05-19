@extends('backend.layouts.app')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Edit profile
   
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
<form class="form-horizontal" role="form" name="frmEditProfile" id="frmEditProfile" method="POST" enctype="multipart/form-data" action="{{ url('/jungle/profile/edit/') }}">
  
        {{ csrf_field() }}
<div class="container">

   
    <div class="row">
    
      <!-- left column -->
      <div class="col-sm-3">
        <div class="text-center">
          @if (isset($profile) and $profile[0]->avatar!="" )
          <img src="{{  asset('/images/avatar/') }}/@if( isset($profile)){{$profile[0]->avatar }} @endif"  width="120" height="120" class="avatar img-circle" alt="avatar">
          @endif
          <h6>Upload avatar...</h6>
          
          <input type="file" class="form-control avatar" name="avatar" id="avatard">
          <input type="hidden" name="txtid" value="{{$profile[0]->id}}" />
          <input type="hidden" name="username" value="{{$profile[0]->name}}" />
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-sm-5  ">
        <div id="notification" class="col-xs-12 col-sm-12 col-md-12"></div>
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
              <input class="form-control" type="text" readonly="readonly" value="{{$profile[0]->name}}">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2  control-label">Role</label>
            <div class=" col-sm-10 ">
                <select id="user_time_zone" name="role" class="form-control">
                  @foreach  ($roles as $role )
                    <option value="{{$role->id}}" @if($role->id == $profile[0]->role_id)  selected='selected'  @endif >[{{ $role->name }}]-- {{$role->description}}</option>  
                  @endforeach               
                </select>
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2  control-label">Phone:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="number" maxlength="11"  pattern=".{10,11}" class="form-control" name="phone" id="phone" value="{{$profile[0]->phone}}">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2 control-label">Skype:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="text" maxlength="25" name="skype" value="{{$profile[0]->skype}}">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2 control-label">Facebook:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="text" id="facebook" name="facebook" value="{{$profile[0]->facebook}}">
              
            </div>
          </div>
          <div class="form-group">
            <label class="  col-sm-2 control-label">Address:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="text" name="address" value="{{$profile[0]->address}}">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2 control-label">Country:</label>
            <div class=" col-sm-10  ">
              <div class="ui-select">
                <select id="user_time_zone" name="country" class="form-control">
                  @foreach  ($country as $countr )
                    <option value="{{$countr->id}}" @if($countr->id == $profile[0]->country ) selected='selected' @endif >{{$countr->name}}</option>  
                  @endforeach               
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email:</label>
            <div class="col-sm-10 ">
              <input class="form-control" name="email" type="email" readonly="readonly" value="{{$profile[0]->email}}">
            </div>
          </div>
          
          
          <div class="form-group">
            <label class="  col-sm-2 control-label">Password:</label>
            <div class="col-sm-10  ">
              <input class="form-control" name="password" id="password" type="password" value="" placeholder="Password">
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
<script>
  $(document).ready(function(){
                $('#frmEditProfile').submit(function(){
    
                    if($('#password').val().length <= 5 && $('#password').val().length >= 1){
                        $('#notification').html('');
                        var content = 'Password có ít nhất >= 6 ký tự';
                        showError(content);                      
                        return false;
                    }   
                    if($('#phone').val()==''){
                        $('#notification').html('');
                          var content = 'Phone không được rỗng ';
                          showError(content);
                          return false;
                    } 
                    if($('#phone').val().length <=5 && $('#phone').val().length >= 2){
                        $('#notification').html('');
                          var content = 'Phone có hơn >= 6 ký tự ';
                          showError(content);
                          return false;
                    }    
                });
               
                function showError(content){
                      /*
                      <span class="text-right glyphicon glyphicon-remove-circle"></span>
                      <div class="alert alert-warning fade in">
                          <a href="#" class="close" data-dismiss="alert">×</a>
                          <strong>Warning!</strong> There was a problem with your network connection.
                      </div>*/
                      var htmlContent = '<div class="alert alert-danger fade in" onclick="$(this).hide();"><a href="#" class="close" data-dismiss="alert">×</a>'+ content +'</div>' 
                      $('#notification').show().append(htmlContent);
                      $("html, body").animate({ scrollTop: 100 }, "slow");                     
                }
    });
</script>
@endsection
