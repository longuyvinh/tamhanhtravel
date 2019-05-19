@extends('layouts.backend.app')
@section('container')
<h3>Thay đổi lời giới thiệu</h3>
<hr/>
<div id="notification" class="col-xs-12 col-sm-12 col-md-12">

</div>

<form role="form" method="POST" action="{{ url('/admin/tour/create') }}" name="frmCreateTour" id="frmCreateTour" class="form-horizontal">
  {{ csrf_field() }}
  <div class="col-xs-12 col-sm-12 col-md-12">
    <h4>Tiêu đề</h4>
    <div class="showback">
      <ul class="nav nav-tabs" id="myTabs">
        <li class="active"><a href="#home" data-url="/embed/62805/view">Tiêu đề tiếng việt</a></li>
        <li><a href="#profile" data-url="/embed/62806/view">Tiêu đề english</a></li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="home">
          <div style="margin-top: 10px;">
            <input placeholder="Tiêu đề tiếng việt" class="form-control" name="name_vn" type="text"  id="name_vn" value="@if(isset($tour)) {{ $tour->name_en }} @endif"/>
          </div>

        </div>

        <div class="tab-pane" id="profile">
          <div style="margin-top: 10px;">
            <input placeholder="Tiêu đề english" class="form-control" name="name_en" type="text"  id="name_en" value="@if(isset($tour)) {{ $tour->name_en }} @endif"/>
          </div>
        </div>

      </div>
    </div>
  </div>
</form>
<script>
$('#myTabs a').click(function (e) {
	e.preventDefault();

	var url = $(this).attr("data-url");
  	var href = this.hash;
  	var pane = $(this);

	// ajax load from data-url
	$(href).load(url,function(result){
	    pane.tab('show');
	});
});

// load first tab content
$('#home').load($('.active a').attr("data-url"),function(result){
  $('.active a').tab('show');
});
</script>
@endsection
