@extends('backend.layouts.app')
@section('container')
<!--
<section class="content-header">
 <h3><i class="fa fa-angle-right"></i> Danh sách User</h3>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Editors</li>
  </ol>
</section>
-->
<section class="content-header">
  <h1>Danh Sách <small>User</small></h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">User</a></li>
    <li class="active">Danh Sách</li>
  </ol>
</section>
<!-- Main content -->
<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">

        <div class="box-header with-border">
          <h3 class="box-title">Latest Orders</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Permission</th>
                <th>Created at</th>
                <th>Last Sign-in</th>
                <th>Avatar</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @if(isset($profiles))
                    @foreach($profiles as $k=>$pro)
                        <tr>
                            <td>{{$pro->name}}</td>
                            <td>{{$pro->email}} </td>
                            <td>Phone: {{$pro->phone}}<br />Skype: {{$pro->skype}}<br />Facebook: {{$pro->facebook}} </td>
                            <td>{{$pro->role_name}}</td>
                            <td>{{$pro->created_at}}</td>
                            <td>{{$pro->updated_at}}</td>
                            <td><img src="{{$pro->avatar}}" height="50" /></td>
                            <td><a href="/{{$link}}/{{$project->slug}}"><i class="fa fa-eye"></i></a></td>
                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="8">{{ $profiles->links() }}</th>
                    </tr>
                @else
                    <tr>
                        <th class="alert alert-warning" colspan="9">
                            You have not created any ticket.
                        </th>
                    </tr>
                @endif
                <!--
                @foreach ($profiles as $pro)
                <tr>
                  <td></td>
                  <td>Call of Duty IV</td>
                  <td><span class="label label-success">Shipped</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                @endforeach
              <!--
              <tr>
                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="label label-warning">Pending</span></td>
                <td>
                  <div class="sparkbar" data-color="#f39c12" data-height="20"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                </td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>iPhone 6 Plus</td>
                <td><span class="label label-danger">Delivered</span></td>
                <td>
                  <div class="sparkbar" data-color="#f56954" data-height="20"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="label label-info">Processing</span></td>
                <td>
                  <div class="sparkbar" data-color="#00c0ef" data-height="20"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="label label-warning">Pending</span></td>
                <td>
                  <div class="sparkbar" data-color="#f39c12" data-height="20"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>iPhone 6 Plus</td>
                <td><span class="label label-danger">Delivered</span></td>
                <td>
                  <div class="sparkbar" data-color="#f56954" data-height="20"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                <td>Call of Duty IV</td>
                <td><span class="label label-success">Shipped</span></td>
                <td>
                  <div class="sparkbar" data-color="#00a65a" data-height="20"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>-->
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
          <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
        </div>
        <!-- /.box-footer -->

            <!--
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
                                              <a href="{{ asset('jungle/profile/edit/'.$profile->id) }}"><button class="btn btn-warning btn-xs" title="Sửa"><i class="fa fa-pencil"></i></button></a>
                                              <a class="href-delete" href="{{ asset('jungle/profile/destroy/'.$profile->id) }}"><button class="btn btn-danger delete btn-xs" title="Xóa"><i class="fa fa-trash-o"></i></button></a>
                                              </td>

                                    @endif
                              </tr>
                            @endforeach

                            </tbody>
                        </table>
                        </section>
                  </div>
                </div>
            </div><!-- /content-panel -->
      </div>
    </div>
  </div>
</section>

@endsection
