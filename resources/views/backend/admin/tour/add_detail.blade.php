@extends('layouts.backend.lightbox')
@section('container')
<!--
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">X</button>
  <h1>Chi tiết tour ngày {{$id}}</h1>
</div>

<div class="modal-body">
	<form action="" method="POST" id="frmTourDetail">
	<p>enligh</p>
	<textarea class="tinymce" name="content_en"></textarea>

	<p>tiếng việt</p>
	<textarea class="tinymce" name="content_vn"></textarea>
	
	<div class="paddingtop10px">
		<button type="button" class="btn btn-success" id="submitFormDetail">Thêm nội dung</button>
	</div>
	</form>

	<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
-->
<div id="theModal" class="modal fade text-center in" style="display:block;">
    <div class="modal-dialog">
      	<div class="modal-content">    
      		<div class="modal-header">
      		<button type="button" class="close" data-dismiss="modal">X</button>
      		<h1>Lab 6</h1>
    		</div>
		    <div class="modal-body">
		      	<div class="panel panel-default">
		        	<div class="panel-heading text-center">
		          	Employee Information
		        	</div>
			        <div class="panel-body">
			          <div class="row">
			            <div class="text-right col-xs-2">Title:</div>
			            <div class="text-left col-xs-3" id="title"></div>
			            <div class="text-right col-xs-2">First:</div>
			            <div class="text-left col-xs-3" id="firstname"></div>
			          </div>
			          <div class="row">
			            <div class="text-right col-xs-2">Phone#</div>
			            <div class="text-left col-xs-3" id="phone"></div>
			            <div class="text-right col-xs-2">Email</div>
			            <div class="text-left col-xs-3" id="email"></div>
			          </div>
			          <div class="row">
			            <div class="text-right col-xs-2">Dept:</div>
			            <div class="text-left col-xs-3" id="departmentname"></div>
			            <div class="text-left col-xs-2">Surname:</div>
			            <div class="text-left col-xs-4">
			              <input placeholder="enter last name" id="TextBoxLastName" class="form-control" type="text">
			            </div>
			          </div>
			        </div>
		      	</div>
		      	<div class="modal-footer">
			        <div class="panel-footer">
			          <input value="Find Employee" id="empbutton" type="button">
			          <div class="col-xs-10" id="lblstatus"></div>
			        </div>
		      	</div>
		    </div>
		</div>
    </div>
</div>
	
@endsection