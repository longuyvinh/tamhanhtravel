@extends('layouts.backend.app')
@section('container')

<form class="form-horizontal" role="form" name="frmCreateProfile" j id="frmCreateProfile" method="POST" enctype="multipart/form-data" action="{{ url('/admin/profile/create') }}">
{{ csrf_field() }}
<div class="container">
  <h1><i class="fa fa-angle-right"></i> Thêm danh lam thắng cảnh</h1>
  <hr>
  <div class="row">
    <div> <button id="english">english</button> <button id="vietnam">tieng viet</button></div>
    <div>
      Tiêu đề:<br>
      <input type="text" name="title_en" />
    </div>
    <div>
      Tóm tắt:<br>
      <input type="text" name="sum_en" />
    </div>
    <div>
      Hình ảnh:<br>
      <input type="text" name="sum_en" />
    </div>
    <div>
      Nội dung:<br>
      <textarea name="content_en"></textarea>
    </div>
  </div>
</div>
</form>
@endsection
