@extends('backend.layouts.app')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <h3><i class="fa fa-angle-right"></i> Danh sách Tour đã xóa</h3>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
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
                                  <td>Hình</td>
                                  @if($user->role_id==1 || $user->role_id==2 || $user->role_id==3) <td>Thao tác</th> @endif
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
                                  <?php $tmp = json_decode($tour->images); ?>
                                  <td><img src="{{  asset('/images/tours/') }}/<?php echo $tmp[0]; ?>" width="150" alt="images" /></td>              
                                    @if ( $user->role_id == 1 ||  $user->role_id == 2 || $user->role_id == 3)
                                      <td width="70" align="center">                                     
                                       <a href="{{ asset('jungle/tour/restore/'.$tour->id) }}"><button class="btn btn-default btn-xs" title="Restore"><i class="glyphicon glyphicon-repeat"></i></button></a>                              
                                      <a class="href-delete" href="{{ asset('/jungle/tour/delete/'.$tour->id) }}"><button class="btn btn-danger delete btn-xs" title="Xóa"><i class="fa fa-trash-o"></i></button></a>
                                      </td>
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
           
               $(document).ready(function() {
                $('#search').on('input', function(e) {  // e=event
                        e.preventDefault();
                             var keyworks = $('input[name="search"]').val();
                              url = "/admin/tour/search/" + keyworks + "?selectsearch=" + $('select[name="select-search"]').val()+'&selectpage='+$('select[name="select-page"]').val();
                              if(keyworks != '')
                                $.get( url , function(data) {
                                  $('tbody').html(data);
                        })
                    });
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
                
        </script>
@endsection