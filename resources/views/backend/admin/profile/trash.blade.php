@extends('backend.layouts.app')
@section('container')
<section class="content-header">
  <h1>Tạo mới <small>Danh Lam Thắng Cảnh</small></h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Editors</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
        <div class="row">
            <div class="col-sm-6">
            <h3><i class="fa fa-angle-right"></i> Danh sách User</h3>
            </div>
            <div class="col-sm-6" align="right">
            <a href="#" onclick="window.history.back();"><i class="glyphicon glyphicon-arrow-left"></i>Back</a>
            </div>
        </div>
        @if (Session::has('message') and Session::get('message') !='')
            <div class="col-md-12 alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a> 
                <i class="fa fa-coffee"></i>
              <div class="alert alert-info"><center>{{ Session::get('message') }}</center></div>                
            </div>
            {{Session::set('message', '')}}
          @endif
          <div id="result-search"></div>
            <div class="row mt">
                <div class="col-lg-12">
                  <div class="content-panel">
                        <section id="unseen">
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                              <tr class="bg-primary">
                                  
                                  <th>Tên đăng nhập</th>
                                  <th>Email</th>
                                  <th>Phone</th>                             
                                  <th>Skype</th>
                                  <th>Facebook</th> 
                                  <td>Hình</td>
                                  <td>Thao tác</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($profiles as $profile)
                                <tr>
                                  <td>{{ $profile->name }}</td>
                                  <td>{{ $profile->email }}</td>
                                  <td>{{ $profile->phone }}</td>                     
                                  <td >{{ $profile->skype }}</td>
                                  <td>{{ $profile->facebook }}</td>
                                  
                                  <td><img src="{{  asset('/images/avatar/') }}/{{$profile->avatar}}" width="100" alt="images" /></td>                 
                                    @if ( $user->role_id == 1 || $user->role_id == 2 )
                                  <td width="70" align="center"> 
                                              <a href="{{ asset('jungle/profile/restore/'.$profile->id) }}"><button class="btn btn-default btn-xs" title="Restore"><i class="glyphicon glyphicon-repeat"></i></button></a>
                                              <a class="href-delete" href="{{ asset('jungle/profile/delete/'.$profile->id) }}"><button class="btn btn-danger delete btn-xs" title="Xóa"><i class="fa fa-trash-o"></i></button></a>
                                              </td>
                                  
                                    @endif
                              </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                    </section>
              </div><!-- /content-panel -->
           </div><!-- /col-lg-4 -->         
        </div><!-- /row -->
     
@endsection