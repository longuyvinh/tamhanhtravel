@extends('backend.layouts.app')
@section('container')
<section class="content-header">
  <h1><i class="fa fa-angle-right"></i> Danh sách Văn Phòng Tamhanh Travel</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Editors</li>
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
                                  <th>Code</th>
                                  <th>Name VN</th>
                                  <th>Name EN</th>
                                  <th>Description VN</th>
                                  <th>Description EN</th>                             
                                  <td>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($offices as $item)
                              <tr>
                                  <td style="font-weight: bold;">[ {{ $item->code }} ]</td>
                                  <td>{{ $item->name_vn }}</td>
                                  <td>{{ $item->name_en }}</td>                     
                                  <td>{{ $item->description_vn }}</td>
                                  <td>{{ $item->description_en }}</td>
                                  <td><button type="button" class="btn btn-primary btn-sm">Edit</button> <button type="button" class="btn btn-primary btn-sm">Delete</button></td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </section>
              </div><!-- /content-panel -->
           </div><!-- /col-lg-4 -->         
        </div><!-- /row -->
@endsection