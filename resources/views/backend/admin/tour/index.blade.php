@extends('backend.layouts.app')
@section('container')
<section class="content-header">
  <h1><i class="fa fa-angle-right"></i> Danh sách Tour</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Editors</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">Tìm kiếm</div>
            <div class="panel-body">
                <div class="row">
                          <div class="col-lg-2">
                            <select class=" form-control" name="select-search" id="select-search">
                                <option value="code"  @if(Session::get('code')=='code') selected="selected" @endif >Mã</option>
                                <option value="name_vn"  @if(Session::get('code')=='name_vn') selected="selected" @endif >Tên tour</option>
                                <option value="days"  @if(Session::get('code')=='days') selected="selected" @endif >Số ngày đi</option>
                                <option value="price_vn"  @if(Session::get('code')=='price_vn') selected="selected" @endif >Giá vnđ</option>
                                <option value="price_en"  @if(Session::get('code')=='price_en') selected="selected" @endif >Giá $</option>                               
                                <option value="created_at"  @if(Session::get('code')=='created_at') selected="selected" @endif >Ngày đăng</option>                      
                            </select>
                          </div>
                        <div class="col-lg-8">
                            <input class="form-control" id="search" name="search" placeholder="Tìm theo: mã , tên , ngày, giá" type="text"/>
                        </div>
                        <div class="col-lg-2">
                            <select class="form-control" name="select-page" id="select-page">            
                                <option value="10" @if(Session::get('page')==10) selected="selected" @endif >10 dòng</option>
                                <option value="15" @if(Session::get('page')==15) selected="selected" @endif >15 dòng</option>
                                <option value="20" @if(Session::get('page')==20) selected="selected" @endif >20 dòng</option>
                                <option value="50" @if(Session::get('page')==50) selected="selected" @endif >50 dòng</option>                         
                            </select>
                        </div>     
                </div>
            </div>
          </div>
                   
          <div id="result-search"></div>
            <div class="row mt">
                <div class="col-lg-12">
                  <div class="content-panel">
                        <section id="unseen">
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                              <tr class="bg-primary">
                                  <th>Mã</th>
                                  <th>Tên tour</th>
                                  <th>Ngày</th>                             
                                  <th>Giá vnđ</th>
                                  <th width="50">Giá $</th>
                                  <th>Ngày đăng</th>
                                  <th>Status</th>
                                  <td>Hình</td>
                                  <td>Thao tác</th>
                              </tr>
                            </thead>
                            <tbody>
                           @foreach ($tours as $tour)
                                <tr>
                                  <td>{{ $tour->code }}</td>
                                  <td>{{ $tour->name_vn }}</td>
                                  <td align="center">{{ $tour->days }}</td>                     
                                  <td >{{ $tour->price_vn }}</td>
                                  <td>{{ $tour->price_en }}</td>
                                  <td width="90" align="center">{{ date("d-m-Y",strtotime($tour->created_at)) }}</td>
                                  <td>
                                     
                                      <select name="select-status" id="select-status" class="select-status-{{$tour->id}}">
                                        <option value="public-{{$tour->id}}" @if ($tour->status == 'public') selected='selected' @endif >public</option>
                                        <option value="pending-{{$tour->id}}" @if ($tour->status == 'pending') selected='selected' @endif >pending</option>
                                        <option value="expried-{{$tour->id}}" @if ($tour->status == 'expried' )selected='selected' @endif>expried</option>
                                        
                                      </select>
                                  </td>
                                  <?php $tmp = json_decode($tour->images); ?>
                                  <td><img src="{{  asset('/images/tours/') }}/<?php echo $tmp[0]; ?>" width="150" alt="images" /></td>                 
                                    @if ( $user->role_id == 1 || $user->role_id == 2 || $user->role_id == 3 )
                                  <td width="70" align="center"> 
                                              <a href="{{ asset('jungle/tour/edit/'.$tour->id) }}"><button class="btn btn-warning btn-xs" title="Sửa"><i class="fa fa-pencil"></i></button></a>
                                              <a class="href-delete" href="{{ asset('jungle/tour/destroy/'.$tour->id) }}"><button class="btn btn-danger delete btn-xs" title="Xóa"><i class="fa fa-trash-o"></i></button></a>
                                              </td>
                                    @else
                                              <td width="70" align="center"> 
                                              <a href="{{ asset('jungle/tour/edit/'.$tour->id) }}"><button class="btn btn-warning btn-xs" title="Sửa"><i class="fa fa-pencil"></i></button></a></td>
                                    @endif
                              </tr>
                            @endforeach
                            <tr><td colspan="8"><center>{!! $tours->render() !!}</center></td></tr>
                            </tbody>
                        </table>
                    </section>
              </div><!-- /content-panel -->
           </div><!-- /col-lg-4 -->         
        </div><!-- /row -->
        <script type="text/javascript">
           
          $(document).ready(function(){ 
      
                  $('select').change(function() {
                       
                       var str = $(this).val();
                      var arr = str.split("-"); 
                      url = "/admin/tour/data/"+arr[1]+"?status="+arr[0];
                      $.get( url, function(data) {
                          alert('Đã cập nhật status: '+arr[0]);
                      });        
                  });

                $('#search').on('input', function(e) {  // e=event
                        timkiem();
                    });
                
               $(".delete").on('click',function (event) {
                 var x = confirm("Bạn có muốn xóa?");
                    if (x) {                
                             return true;                   
                    }
                    else {                      
                        return false;
                    }
                });

               $( "#select-search" ).change(function () {                           
                     timkiem();
                });

               $( "#select-page" ).change(function () {                           
                     timkiem();
                });

               function timkiem(){
                    var keyworks = $('input[name="search"]').val();

                url = "/admin/tour/search/" + keyworks + "?selectsearch=" + $('select[name="select-search"]').val()+'&selectpage='+$('select[name="select-page"]').val();
                              if(keyworks != '')
                                $.get( url , function(data) {
                                  $('tbody').html(data);           
                                })
                              else{
                                url = "/admin/tour/search/a" + "?selectsearch=name_vn"+'&selectpage='+$('select[name="select-page"]').val();
                                $.get( url , function(data) {
                                  $('tbody').html(data);           
                                })
                              }
                          
               }
             });
               
</script>
@endsection