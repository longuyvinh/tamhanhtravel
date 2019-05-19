@extends('backend.layouts.app')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h3>
   <i class="fa fa-angle-right"></i> Thêm User
  </h3>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
<form class="form-horizontal" role="form" name="frmCreateProfile" j id="frmCreateProfile" method="POST" enctype="multipart/form-data" action="{{ url('/jungle/profile/create') }}">

        {{ csrf_field() }}
<div class="container">

   
    <hr>
    <div class="row">

      <!-- left column -->
      <div class="col-sm-3">
        <div class="text-center">
         @if (isset($profile) and $profile->avatar!="" )
          <img src="{{  asset('/images/avatar/') }}/ @if( isset($profile)) {{ $profile->avatar }} @endif"  width="120" height="120" class="avatar img-circle" alt="avatar">
          @endif
          <h6>Upload avatar...</h6>

          <input type="file" class="form-control avatar" name="avatar" id="avatard">
        </div>

      </div>


      <!-- edit form column -->
      <div class="col-sm-5  ">
     <div id="notification" class="col-xs-12 col-sm-12 col-md-12"></div>
        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          @if (Session::has('message') and Session::get('message') != '')
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
            <div class=" col-sm-10 "  {{ $errors->has('username') ? 'has-error' : '' }}>
              <input class="form-control" name="username" id="username" type="text" value="@if(isset($profile)) {{ $profile->name }} @endif">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2  control-label">Role</label>
            <div class=" col-sm-10 ">
                <select id="user_time_zone" name="role" class="form-control">
                  @foreach  ($roles as $role )
                    <option value="@if(isset($role)) {{ $role->id }} @endif" >[{{$role->name}}]-- {{$role->description}}</option>
                  @endforeach
                </select>
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2  control-label">Phone:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="number" value="0" maxlength="11" class="form-control" name="phone" value="@if(isset($profile)) {{ $profile->phone }} @endif">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2 control-label">Skype:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="text" maxlength="25" name="skype" value="@if(isset($profile)) {{ $profile->skype }} @endif">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2 control-label">Facebook:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="text" id="facebook" name="facebook" value="@if(isset($profile)) {{ $profile->facebook }} @endif">

            </div>
          </div>
          <div class="form-group">
            <label class="  col-sm-2 control-label">Address:</label>
            <div class=" col-sm-10  ">
              <input class="form-control" type="text" name="address" value="@if(isset($profile)) {{ $profile->address }} @endif">
            </div>
          </div>
          <div class="form-group">
            <label class=" col-sm-2 control-label">Country:</label>
            <div class=" col-sm-10  ">
              <div class="ui-select">
                <select id="user_time_zone" name="country" class="form-control">
                  @foreach  ($country as $countr )

                        <option value="
                        @if(isset($profile) and $profile->country==$countr->name ){{$countr->country}} selected='seleted'
                        @endif"
                        @if( !isset($profile) and $countr->id==233) selected='selected' @endif> {{$countr->name}}</option>

                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email:</label>
            <div class="col-sm-10" {{ $errors->has('email') ? 'has-error' : '' }}>
              <input class="form-control" name="email" type="email" id="email" value="@if(isset($profile)) {{ $profile->email }} @endif">
            </div>
          </div>

           <div class="form-group">
            <label class=" col-sm-2  control-label">Password:</label>
            <div class="col-sm-10"  {{ $errors->has('password') ? 'has-error' : '' }}>
              <input class="form-control" name="password" id="password" type="password" value=""    >
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10 ">
              <input type="submit" class="btn btn-primary" id="submit" value="Save Changes">
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
                $('#frmCreateProfile').submit(function(){

                    if($('#username').val() == ""){
                        $('#notification').html('');
                        var content = 'Username không được rỗng';
                        showError(content);
                        return false;
                    }
                    if($('#email').val() == ""){
                        $('#notification').html('');

                        var content = 'Email không được rỗng';
                        showError(content);
                        return false;
                    }
                    if(isEmail($('#email').val())==false)
                    {
                        $('#notification').html('');

                        var content = 'Email không không đúng định dạng';
                        showError(content);
                        return false;
                    }
                    if($('#password').val() == ""){
                        $('#notification').html('');
                        var content = 'Password không được rỗng';
                        showError(content);
                        return false;
                    }
                    if($('#username').val().length <= 2 || $('#password').val().length <= 5 )
                    {
                        $('#notification').html('');
                        var content = 'Username có >=3 và Password có >=6 ký tự ';
                        showError(content);
                        return false;
                    }


                });
                // Kiem tra mail
                function isEmail(emailStr)
                  {
                          var emailPat=/^(.+)@(.+)$/
                          var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]"
                          var validChars="\[^\\s" + specialChars + "\]"
                          var quotedUser="(\"[^\"]*\")"
                          var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/
                          var atom=validChars + '+'
                          var word="(" + atom + "|" + quotedUser + ")"
                          var userPat=new RegExp("^" + word + "(\\." + word + ")*$")
                          var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$")
                          var matchArray=emailStr.match(emailPat)
                          if (matchArray==null) {
                                  return false
                          }
                          var user=matchArray[1]
                          var domain=matchArray[2]

                          // See if "user" is valid
                          if (user.match(userPat)==null) {
                              return false
                          }
                          var IPArray=domain.match(ipDomainPat)
                          if (IPArray!=null) {
                              // this is an IP address
                                    for (var i=1;i<=4;i++) {
                                      if (IPArray[i]>255) {
                                          return false
                                      }
                              }
                              return true
                          }
                          var domainArray=domain.match(domainPat)
                          if (domainArray==null) {
                              return false
                          }

                          var atomPat=new RegExp(atom,"g")
                          var domArr=domain.match(atomPat)
                          var len=domArr.length

                          if (domArr[domArr.length-1].length<2 ||
                              domArr[domArr.length-1].length>3) {
                             return false
                          }

                          if (len<2)
                          {
                             return false
                          }

                          return true;
                  }
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
</section>

@endsection
