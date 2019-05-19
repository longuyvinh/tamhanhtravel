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
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="text-right" id="languages">
            <button type="button" class="btn btn-primary" id="english">English</button>
            <button type="button" class="btn btn-default" id="tiengviet">Tiếng việt</button>
          </div>
        </div>

        <div id="notification"></div>

        <form role="form" id="frmCreateFavourite" name="frmCreateFavourite" method="POST" action="{{url('/admin/favourite/create')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label>Tiêu đề</label>
              <input id="inputTitleEn" name="titleEn" class="form-control english" placeholder="tiêu đề english" type="text" value="">
              <input name="slugEn" id="slugEn" type="hidden" value=""/>
              <input id="inputTitleVn" name="titleVn" class="form-control tiengviet" placeholder="tiêu đề tiếng việt" type="text" value="">
              <input name="slugVn" id="slugVn" type="hidden" value=""/>
              <p class="help-block" id="slugUrl"></p>
            </div>

            <div class="form-group">
              <label for="createInputSummary">Tóm tắt</label>
              <textarea id="inputSummaryEn" name="sumEn" class="form-control english" rows="3" placeholder="tóm tắt english"></textarea>
              <textarea id="inputSummaryVn" name="sumVn" class="form-control tiengviet" rows="3" placeholder="tóm tắt english"></textarea>
              <!--
              <input id="inputSummaryEn" name="sumEn" class="form-control english" placeholder="tóm tắt english" type="text">
              <input id="inputSummaryVn" name="sumVn" class="form-control tiengviet" placeholder="tóm tắt tiếng việt" type="text">-->
            </div>
            <div class="form-group">
              <label for="createInputFile">Hình ảnh</label>
              <div class="input-group">

                <div class="input-group-btn">
                  <button class="btn btn-default" id="upload" type="button">Upload</button>
                </div>
                <input id="createInputFile" type="file" name="image" style="margin: 8px 0 0 10px;"/>
              </div>
              <p class="help-block">Hình ảnh đại diện cho danh lam thắng cảnh</p>
              <div id="imageshow">
              </div>
            </div>

            <div class="form-group english">
              <label for="editor1">Nội dung</label>
              <textarea id="editor1" name="editor1" rows="10" cols="80">
                Content english
              </textarea>
            </div>

            <div class="form-group tiengviet">
              <label for="editor1">Nội dung</label>
              <textarea id="editor2" name="editor1" rows="10" cols="80">
                Nội dung tiếng việt
              </textarea>
            </div>

          </div>
          <div class="box-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>

    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>

<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    //bootstrap WYSIHTML5 - text editor
    //$(".textarea").wysihtml5();
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

  function to_slug(str)
  {
      // Chuyển hết sang chữ thường
      str = str.toLowerCase();

      // xóa dấu
      str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
      str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
      str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
      str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
      str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
      str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
      str = str.replace(/(đ)/g, 'd');

      // Xóa ký tự đặc biệt
      str = str.replace(/([^0-9a-z-\s])/g, '');

      // Xóa khoảng trắng thay bằng ký tự -
      str = str.replace(/(\s+)/g, '-');

      // xóa phần dự - ở đầu
      str = str.replace(/^-+/g, '');

      // xóa phần dư - ở cuối
      str = str.replace(/-+$/g, '');

      // return
      return str;
  }
</script>
<script>
    'use strict';
    var currentLang='En';
    $('#frmCreateFavourite').find('.tiengviet').hide();
    //$('#slugUrl').hide();
    $('.alert').hide();
    $('#imageshow').hide();

    $('#upload').click(function(event) {
      event.preventDefault();
      /* Act on the event */
      //console.log($('#createInputFile').val());\
      //console.log({{url('admin/uploads')}});
      $.ajaxSetup({
          headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')}
      });

      var file_data = $('#createInputFile').prop('files')[0];
      //var form = document.forms.namedItem("frmCreateFavourite");
      var form_data = new FormData();
      form_data.append('file', file_data);

      console.log($('meta[name=csrf-token]').attr('content'));
      $.ajax({
            type: "POST",
            url: "{{url('ajax/uploadimageajax')}}",
            data: form_data,
            contentType: false,
            processData: false,
            success: function(data) {
              if (data.fail) {
                    //$('#img1').html('<img width="100%" height="100%" src="{{asset('images/default.jpg')}}"/>');
                    alert(data.errors['file']);
                }
                else {
                    //var filename = data;
                    $('#imageshow').show();
                    $('#imageshow').html('<img height="200" style="border: 1px solid #ccc; border-radius: 2px; padding: 2px;" src="{{asset('images/news/')}}/' + data + '"/>');
                }
                //  console.log(data);
                //  var errors = data.errors;
                //  console.log(errors);
             },
             error: function (xhr, status, error) {
                 alert(xhr.responseText);
            }
           });
    });
     /*
      var file_data = $('#createInputFile').prop('files')[0];
      var form = document.forms.namedItem("frmCreateFavourite");
      var form_data = new FormData(form);
      console.log(form_data);
      form_data.append('file', file_data);
      $.ajaxSetup({
          headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
      });
      //$('#img1').html('<img src="{{asset('images/loader.gif')}}" style="padding-top: 40%"/>');
      console.log(file_data);
      console.log(form_data);
      $.ajax({
          url: "{{url('admin/uploads')}}", // point to server-side PHP script
          data: form_data,
          type: 'POST',
          contentType: false,       // The content type used when sending data to the server.
          cache: false,             // To unable request pages to be cached
          processData: false,
          success: function (data) {
              if (data.fail) {
                  $('#imageshow').html('<img width="100%" height="100%" src="{{asset('images/default.jpg')}}"/>');
                  alert(data.errors['file']);
              }
              else {
                  filename = data;
                  $('#imageshow').html('<img width="100%" height="100%" src="{{asset('uploads')}}/' + data + '"/>');
              }
          },
          error: function (xhr, status, error) {
              alert(xhr.responseText);
              $('#imageshow').html('<img width="100%" height="100%" src="{{asset('images/default.jpg')}}"/>');
          }
      });*/


    $('#english').click(function(){
      $('#languages').find('.btn-primary').removeClass('btn-primary').addClass('btn-default');
      $(this).addClass('btn-primary');
      $('#frmCreateFavourite').find('.english').show();
      $('#frmCreateFavourite').find('.tiengviet').hide();
      currentLang='En';

      var string = to_slug($('#inputTitleEn').val());
      var site = "{{env('APP_URL')}}";
      var url = '<b>Link hiển thị:</b> ' + site + '/danh-lam-thang-canh/' + string;
      $('#slugUrl').show();
      $('#slugUrl').html(url);
    });

    $('#tiengviet').click(function(){
      $('#languages').find('.btn-primary').removeClass('btn-primary').addClass('btn-default');
      $(this).addClass('btn-primary');
      $('#frmCreateFavourite').find('.tiengviet').show();
      $('#frmCreateFavourite').find('.english').hide();
      currentLang='Vn';

      var string = to_slug($('#inputTitleVn').val());
      var site = "{{env('APP_URL')}}";
      var url = '<b>Link hiển thị:</b> ' + site + '/danh-lam-thang-canh/' + string;
      $('#slugUrl').show();
      $('#slugUrl').html(url);
    });


    function showSlug(){
      var string = to_slug($(this).val());
      var site = "{{env('APP_URL')}}";
      var url = '<b>Link hiển thị:</b> ' + site + '/danh-lam-thang-canh/' + string;
      $('#slugUrl').show();
      $('#slugUrl').html(url);
      $('#slug'+currentLang).val(string);
    };

    $('#inputTitleEn').change(showSlug).keyup(showSlug);
    $('#inputTitleVn').change(showSlug).keyup(showSlug);

    $('#frmCreateFavourite').submit(function(){

        if($('#inputTitleEn').val() == ""){
            $('#notification').html('');
            var content = 'Tiêu đề english không được rỗng';
            showError(content);
            $('#inputTitleEn').addClass('input-error');
            return false;
        }

        if($('#inputTitleVn').val() == ""){
            $('#notification').html('');
            var content = 'Tiêu đề tiếng việt không được rỗng';
            showError(content);
            $('#inputTitleVn').addClass('input-error');
            return false;
        }
    });


</script>
@endsection
