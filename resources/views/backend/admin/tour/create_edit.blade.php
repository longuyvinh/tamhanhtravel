@extends('backend.layouts.app')
@section('container')
<section class="content-header">
  <h1> > Thêm tour mới</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Editors</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
            <h3></h3>  
            <hr/> 
            <div id="notification" class="col-xs-12 col-sm-12 col-md-12">

            </div>
            
            <form role="form" method="POST" action="{{ url('/jungle/tour/create') }}" name="frmCreateTour" id="frmCreateTour" class="form-horizontal"  enctype="multipart/form-data" >
            
                {{ csrf_field() }}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4>Danh mục tour</h4>
                    <div class="showback">
                        <div class="radio">
                            @foreach($catRoot as $key=>$croot)
                                @if(intval($key) == 0)
                                <label><input id="radioCatRoot" checked="checked" name="radioCatRoot" value="{{$croot->id}}" type="radio"> {{$croot->name_vn}}</label>&nbsp;&nbsp;&nbsp;
                                @else
                                <label><input id="radioCatRoot" name="radioCatRoot" value="{{$croot->id}}" type="radio"> {{$croot->name_vn}}</label>&nbsp;&nbsp;&nbsp;
                                @endif
                            @endforeach
                        </div>
                        <br>
                        <div class="controls">      
                            <select class="form-control text-capitalize" name="idcagtegory" id="idcagtegory">
                             <option></option>
                            </select>
                        </div>
                    </div>
                </div>

                <div id="section-detail-tour">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4>Tên tour</h4>
                        <div class="showback">
                            <div class="{{ $errors->has('name_en') ? 'has-error' : '' }}">
                                <div class="controls">                                        
                                    <input  minlength="2"  maxlength="255" placeholder="Tên tour english" class="form-control" name="name_en" type="text"  id="name_en" 
                                           value="@if(isset($tour)) {{ $tour->name_en }} @endif"/>                                    
                                </div>
                                <p>Ví dụ: "North of Vietnam: Ha Noi - Yen Tu - Ha Long Bay - Sung Sot Cave - Titop Island - Bai Dinh - Trang An"</p>
                            </div>                           
                            <div  class="{{ $errors->has('name_vn') ? 'has-error' : '' }}">
                                <div class="controls">                                        
                                    <input  minlength="2" maxlength="255" class="form-control" placeholder="Tên tour tiếng việt" name="name_vn" type="text"  id="name_vn" 
                                           value="@if(isset($tour)) {{ $tour->name_vn }} @endif"/>
                                    
                                </div> 
                                <p>Ví dụ: "Hà Nội - Yên Tử - Hạ Long - Hang Sửng Sốt - Titốp - Bái Đính - Tràng An"</p>
                            </div>                    
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h4>Mô tả chung về chuyến tour</h4>
                        <div class="showback">
                            <div class="{{ $errors->has('infotour_en') ? 'has-error' : '' }}">
                                <label for="infotour_en" class="control-label">English</label>
                                <textarea class="form-control" rows="5" id="infotour_en" name="infotour"></textarea>
                            </div>
                    
                            <div class="{{ $errors->has('infotour_vn') ? 'has-error' : '' }}">
                                <label for="infotour_vn" class="control-label">Tiếng việt</label>
                                <textarea class="form-control" rows="5" id="infotour_vn" name="infotour"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h4>Phương tiện di chuyển <small id="transport-notify">(bạn hãy chọn ít nhất 1 phương tiện dưới đây)</small></h4>

                        <div id="transport">
                            @foreach(Config::get('tamhanh.transport') as $key => $val)
                                <label class="checkbox-inline">
                                <input id="inlineCheckbox" value="{{$key}}" type="checkbox" name="transport"> {{$val['vn']}}
                                </label>
                            @endforeach
                        </div> 
                    </div>

                    <div class="row" style="padding-left: 10px;">
                        <div class="col-xs-12 col-sm-6 col-md-3 {{ $errors->has('code') ? 'has-error' : '' }}">
                            <h4>Mã code của tour</h4>
                            <div class="controls">                                        
                                <input class="form-control" placeholder="ví dụ: PT242334" name="code" type="text"  id="code" 
                                       value=""/>
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 {{ $errors->has('days') ? 'has-error' : '' }}">
                            <h4>Số ngày/đêm</h4>
                            <div class="controls">                                        
                                <input min="2" max="10" type="number" class="form-control" placeholder='ví dụ: 5 ngày chỉ cần điền "5"' name="days" id="days" 
                                       value="@if(isset($tour)) {{ $tour->days }} @endif"/>
                                <span class="help-block">{{ $errors->first('days') }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Vinh comment out de lam sau -->
                    <!--
                    <div class="col-md-12" id="tourdetail">
                        <h4>Mô tả chi tiết từng ngày theo tour</h4>
                        <div class="showback" id="tourdetail-content">

                        </div>
                    </div>
                    -->
                    <div class="row" style="padding-left: 10px;">
                        <div class="col-xs-12 col-sm-6 col-md-3 {{ $errors->has('days') ? 'has-error' : '' }}">
                            <h4>Giá usd</h4>
                            <div class="controls">                                        
                                <input type="number" required class="form-control" placeholder='' name="price_en" id="price_en" 
                                       value=""/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 {{ $errors->has('code') ? 'has-error' : '' }}">
                            <h4>Giá vnđ</h4>
                            <div class="controls">                                        
                                <input type="number" required class="form-control" placeholder='' name="price_vn" id="price_vn" 
                                       value=""/>
                            </div> 
                        </div>
                        
                    </div>

                    <div class="col-md-12">
                        <h4>Hình ảnh</h4>
                        <div class="showback">              
                            <div class="controls">  
                                                                    
                                <input class="form-control images" name="images[]" type="file" id="images" value="" multiple/>
                                <input type="hidden" name="listImage" value="" id="listImage">
                            </div> 
                            <div class="controls" style="margin: 10px 0;">
                                <button type="button" class="btn btn-info" id="uploadImage">Upload Images</button>
                            </div>

                            <div class="controls" id="waitingUpload">
                                <h5>Uploading data... Please wait.</h5>
                                <div class="progress progress-striped active page-progress-bar">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                            </div>

                            <div class="controls" id="imagePreview" style="border: 1px solid #ccc; border-radius: 10px; width: 100%; padding: 10px; overflow:hidden;">
                                <p align="center" style="line-height: 100px;" id="notifyImage">Chưa có hình nào được upload</p>
                            </div>
                        </div>
                    </div>
               
                   
                    <div class="col-md-12">
                        <h4>Giá tour hỗ trợ bao gồm:</h4>
                        <div class="showback">
                            <div class="{{ $errors->has('support_en') ? 'has-error' : '' }}">
                                <label for="support_en" class="control-label">English</label>
                                <div class="controls">                                        
                                    <textarea class="tinymce" placeholder=""  name="support_en" id="support_en"></textarea>
                                    
                                </div> 
                            </div>
                   
                            <div class=" {{ $errors->has('support_vn') ? 'has-error' : '' }}">
                                <label for="support_vn" class="control-label">Tiếng việt</label>
                                <div class="controls">                                        
                                    <textarea class="tinymce" placeholder=""  name="support_vn" id="support_vn"></textarea>
                
                                </div> 
                            </div>
                    </div></div>
                    
                    <div class="col-md-12">
                        <h4>Giá tour không hỗ trợ bao gồm:</h4>
                        <div class="showback">
                            <div class=" {{ $errors->has('unsupport_en') ? 'has-error' : '' }}">
                                <label for="unsupport_en" class="control-label">English</label>
                                <div class="controls">
                                    <textarea class="tinymce" placeholder="Nội dung không hỗ trợ bằng english"  name="unsupport_en" id="unsupport_en">@if(isset($tour)) {{ $tour->unsupport_en }} @endif</textarea>
                                    <span class="help-block">{{ $errors->first('unsupport_en') }}</span>
                                </div> 
                            </div>
                            <div class=" {{ $errors->has('unsupport_vn') ? 'has-error' : '' }}">
                                <label for="unsupport_vn" class="control-label">Tiếng việt</label>
                                <div class="controls">                                        
                                    <textarea class="tinymce" placeholder="Nội dung không hỗ trợ bằng english"  name="unsupport_vn" id="unsupport_vn">@if(isset($tour)) {{ $tour->unsupport_vn }} @endif</textarea>
                                    <span class="help-block">{{ $errors->first('unsupport_vn') }}</span>
                                 </div> 
                             </div>
                        </div>
                    </div>
     
                    <div class="col-md-12">
                        <h4>Ghi chú quan trọng cho tour:</h4>
                        <div class="showback">
                            <div class="{{ $errors->has('notify_en') ? 'has-error' : '' }}">
                                <label for="notify_en" class="control-label">English</label>
                                <div class="controls">                                        
                                    <textarea class="tinymce" placeholder="Thông báo bằng english"  name="notify_en" id="notify_en">@if(isset($tour)) {{ $tour->notify_en }} @endif</textarea>
                                    <span class="help-block">{{ $errors->first('notify_en') }}</span>
                                </div> 
                            </div>
                     
                            <div class="{{ $errors->has('notify_vn') ? 'has-error' : '' }}">
                                <label for="notify_vn" class="control-label">Tiếng việt</label>
                                <div class="controls">
                                    <textarea class="tinymce" placeholder="Thông báo bằng english"  name="notify_en" id="notify_vn">@if(isset($tour)) {{ $tour->notify_vn }} @endif</textarea>
                                    <span class="help-block">{{ $errors->first('notify_vn') }}</span>
                                </div> 
                            </div>
                       </div>
                    </div>              

                    <div class="col-md-12">
                        <h4>Thông tin chi tiết dịch vụ tour trong chuyến đi</h4>
                        <div class="showback">
                            <div class="{{ $errors->has('services_en') ? 'has-error' : '' }}">
                                <label for="services_en" class="control-label">English</label>
                                <div class="controls">                                        
                                    <textarea class="tinymce" placeholder="Nội dung dịch vụ bằng english"  name="services_en" id="services_en"></textarea> 
                                </div> 
                            </div>               
                            <div class="{{ $errors->has('services_vn') ? 'has-error' : '' }}">
                                <label for="services_vn" class="control-label">Tiếng việt</label>
                                <div class="controls">                                        
                                     <textarea class="tinymce" placeholder="Nội dung dịch vụ bằng tiếng việt"  name="services_vn" id="services_vn"></textarea>
                                </div> 
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-md-12">
                        <h4>Tags</h4>
                        <div class="showback">
                            <div class="">
                                <div class="controls">                                        
                                    <input placeholder="Tags english" class="form-control" name="tags" type="text"  id="tags_en" 
                                           value=""/>
                                </div> 
                            </div>
                            <br>
                            <div class="">
                                <div class="controls">                                        
                                    <input placeholder="Tags vietnam" class="form-control" name="tags" type="text"  id="tags_vn" 
                                           value=""/>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
           
                <div class="controls">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-success btn-lg">
                        <span class="glyphicon glyphicon-ok"></span> &nbsp; Create Tour
                    </button>
                     &nbsp;&nbsp; 
                    <button type="reset" class="btn btn-warning btn-lg">
                        <span class="glyphicon glyphicon-refresh"></span> &nbsp; Reset
                    </button>
                    
                </div>

             </form>

            </form>
        
    <script>
        
        function readCategory(data, sign){
            var result = '';
            $.each(data, function(index, val){
                var data = val.data;
                var sub = val.sub;
                result += '<option value="'+data.id+'">' + sign +' ' + data.name_vn + '</option>';
                if(sub != null){
                    result += readCategory(sub, sign);
                }else{
                    //nothing
                }
            });
            return result;
        };

        function loadCategory(cat_id){
            var str_data = '';
            $.get('/ajax/getCategorySub/' + cat_id, function (data) {
                var obj_data = $.parseJSON(data);
                if(obj_data != null){
                    str_data = '<option value="0">chọn danh mục tour</option>';
                    var sign = '--';
                    str_data += readCategory(obj_data, sign);
                }else{
                    str_data = '<option value="">Chưa có danh mục để chọn</option>';
                }
                $('#idcagtegory').html(str_data);
            });
            
        }

        function showSuccess(content){
            var htmlContent = '<div class="alert alert-success fade in" onclick="$(this).hide();"><a href="#" class="close" data-dismiss="alert">×</a>'+ content +'</div>' 
            $('#notification').show().append(htmlContent);
            $("html, body").animate({ scrollTop: 100 }, "slow");
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

        function deleteAllInputError(){
            $('#frmCreateTour').find('.error').removeClass('error');
        }

        $(document).ready(function(){
            $('#tourdetail').hide();
            $('#notification').hide();
            $('#waitingUpload').hide();

            var listImages = [];
            var tourDetailArr = [];
            var id_tourtrongngay = 6

            $('#listImage').val(''); 

            var iddanhmuc = $('input[type=radio][name=radioCatRoot]').val();
            loadCategory(iddanhmuc);
            if(iddanhmuc == id_tourtrongngay){
                $('#days').val(1);
                $('#days').attr('disabled','disabled');
            }

            var numberDays = $('#days').val();
            if(numberDays > 0){
                $('#tourdetail').show();
            }else{
                $('#tourdetail').hide();
            }

            $('input[type=radio][name=radioCatRoot]').change(function() {
                $('#days').removeClass('error');
                $('#days').removeAttr('disabled');
                $('#days').val("");
                $('#tourdetail').hide();

                var cat_id = $(this).val();
                var loading = '<option value="">loading ...</option>';
                $('#idcagtegory').html(loading);
                loadCategory(cat_id);

                if(cat_id == id_tourtrongngay){
                    $('#days').val(1);
                    $('#days').attr('disabled','disabled');
                }

                var numberDays = $('#days').val();
                if(numberDays > 0){
                    $('#tourdetail').show();
                }else{
                    $('#tourdetail').hide();
                }

            });

            $('#days').keyup(function() {
                $(this).removeClass('error');
                var numberDays = $('#days').val();
                //console.log(numberDays);
                if((numberDays <= 0)||(numberDays>10)){
                    $(this).addClass('error');
                    var content = '<b>Số ngày</b> là chữ số và có giá trị trong khoảng [1,10]';
                    showError(content);
                }
                if(numberDays > 0){
                    $('#tourdetail').show();
                    var contentDetail = '';
                    for(var i=1; i<=numberDays; i++){
                    }
                }else{
                    $('#tourdetail').hide();
                }

                //$('#tourdetail-content').html(contentDetail);
            });

            $('#price_en').keyup(function(){
                var currency = {{Config::get('tamhanh.setting.currency')}};
                //console.log('currency : '+currency);
                if($('#price_en').val() <= 0){
                    $('#price_en').addClass('error');
                    var content = 'Giá tour usd không hợp lệ';
                    showError(content);
                } else {
                    //console.log('hop le');
                    $('#price_vn').val(currency * $('#price_en').val());
                }
            });

     /*       tinymce.init({
                selector: 'textarea.tinymce',
                height: 100,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code'
                ],
                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                content_css: '//www.tinymce.com/css/codepen.min.css'
            });
*/
            function handleFileUpload(files, obj) {

                var valid_ext = ["jpg", "png", "jpeg", "gif"];
                for (var i = 0; i < files.length; i++) {
                    var fd = new FormData();
                    fd.append('image', files[i]);

                    var file = files[i];
                    
                    var imagefile = file.type;
                    var match= ["image/jpeg","image/png","image/jpg"];
                    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
                    {
                        console.log("ko fai dinh dang hinh anh")
                    } else {
                        //var status = new createStatusBar(file, key); //Using this we can set progress.
                        //key ++;
                        console.log($('#listImage').val().split(',').length);
                        $('#waitingUpload').show();
                        sendFileToServer(fd);
                    }
                    
                }
                
            }

            function sendFileToServer(formData) {

                var uploadURL = "/ajax/uploadImage";
                var extraData = {};
                var jqXHR = $.ajax({
                    xhr: function () {
                        var xhrobj = $.ajaxSettings.xhr();
                        if (xhrobj.upload) {
                            xhrobj.upload.addEventListener('progress', function (event) {
                                /*
                                var percent = 0;
                                var position = event.loaded || event.position;
                                var total = event.total;
                                if (event.lengthComputable) {
                                    percent = Math.ceil(position / total * 100);
                                }
                                status.setProgress(percent, position, total);
                                */
                            }, false);
                        }
                        return xhrobj;
                    },
                    url: uploadURL,
                    type: "POST",
                    contentType: false,
                    processData: false,
                    cache: false,
                    data: formData,
                    success: function (data) {
                        listImages.push(data.filename);
                        //console.log(listImages);
                        $('#listImage').val(JSON.stringify(listImages));
                        //$('#listImage').val(listImages);
                        $('#waitingUpload').hide();
                      
                        this.thumbCol = $('<div style="padding: 10px; float: left;"></div>').appendTo('#imagePreview');

                        this.imageThumnail = $('<div id="imagePreview_'+ listImages.length +'" class="imagePreview"></div>').appendTo(this.thumbCol);
                        
                        $(this.imageThumnail).css("background-image", "url('http://tamhanh.com/images/tours/"+ data.filename +"')");
                    }

                });
            }

            $('#uploadImage').click(function(){
                //$('#imagePreview').html('');

                $('#notifyImage').hide();
                var files = document.getElementById('images').files;
                handleFileUpload(files);
            });

            $( '#frmCreateTour' ).on( 'submit', function(e) {
                e.preventDefault();
                $('#notification').html('');
                if(checkValidateForm() == true){
                    console.log('validate success');  
                    var transport_list = [];
                    $.each($('input[name="transport"]:checked'), function(){
                        transport_list.push($(this).val())
                    })
                    var paramCreate = {
                        'name_en'     : $('#name_en').val(), 
                        'name_vn'     : $('#name_vn').val(), 
                        'code'        : $('#code').val(),
                        'idcategory'  : $('input[name="radioCatRoot"]:checked').val(),
                        'days'        : $('#days').val(),
                        'transport'   : JSON.stringify(transport_list),
                        'infotour_en' : $('#infotour_en').val(),
                        'infotour_vn' : $('#infotour_vn').val(),
                        'price_en'    : $('#price_en').val(),
                        'price_vn'    : $('#price_vn').val(),
                        'image'       : $('#listImage').val(),
                        'support_en'  : $('#support_en').val(),
                        'support_vn'  : $('#support_vn').val(),
                        'unsupport_en': $('#unsupport_en').val(),
                        'unsupport_vn': $('#unsupport_vn').val(),
                        'notify_en'   : $('#notify_en').val(),
                        'notify_vn'   : $('#notify_vn').val(),
                        'services_en' : $('#services_en').val(),
                        'services_vn' : $('#services_vn').val(),
                        'tags_en'     : $('#tags_en').val(),
                        'tags_vn'     : $('#tags_vn').val(),
                    }

                    console.log(paramCreate);
                    $.ajax({
                        type: "POST",
                        url: '/admin/tour/createTour',
                        data: paramCreate,
                        success: function(data) {
                            if(data.status == 'success'){
                                var content = 'Success! Tạo tour thành công';
                                showSuccess(content);
                            }else{
                                var content = 'Error! Tạo tour đã bị lỗi, vui lòng tạo lại';
                                showError(content);
                            }
                            console.log( msg );
                        }
                    });
                    
                }else{
                   console.log('validate false');
                }
            }); 
            /*
            $("#submitFormDetail").click(function(e) {
                e.preventDefault();
                $('#notification').html('');
                //$('#transport').html('');
                console.log("submit form");
                console.log($('#name_vn').val())
                if(checkValidateForm() == true){
                    console.log('validate success');
                    var name = $('#name').val();
                    var message = $('#message').val();
                    var postid = $('#post_id').val();
                    console.log($(this).serialize());
                    $.ajax({
                        type: "POST",
                        url: '/admin/tour/createTour',
                        data: $(this).serialize(),
                        success: function( msg ) {
                            alert( msg );
                        }
                    });
                    
                }else{
                   console.log('validate false');
                }
                
                //var content_vn = tinymce.get('content_vn').getContent();
                //var content_en = tinymce.get('content_en').getContent();
                //var content = {en:content_en, vn:content_vn};
                //tourDetailArr.push(content);
                
            });*/
            /*
            $("#contact_form").on("submit", function(e) {
                var postData = $(this).serializeArray();
                var formURL = $(this).attr("action");
                $.ajax({
                    url: formURL,
                    type: "POST",
                    data: postData,
                    success: function(data, textStatus, jqXHR) {
                        $('#contact_dialog .modal-header .modal-title').html("Result");
                        $('#contact_dialog .modal-body').html(data);
                        $("#submitForm").remove();
                    },
                    error: function(jqXHR, status, error) {
                        console.log(status + ": " + error);
                    }
                });
                e.preventDefault();
            });
            */

        });

        function checkValidateForm(){
            var checked = true;

            if($('#name_en').val() == ""){
                $('#name_en').addClass('error');
                var content = 'Tên tour english không được rỗng';
                showError(content);
                checked = false;
            }

            if($('#name_vn').val() == ""){
                $('#name_vn').addClass('error');
                var content = 'Tên tour tiếng việt không được rỗng';
                showError(content);
                checked = false;
            }

            if($('#infotour_en').val() == ""){
                $('#infotour_en').addClass('error');
                var content = 'Nội dung tour english không được rỗng';
                showError(content);
                checked = false;
            }

            if($('#infotour_vn').val() == ""){
                $('#infotour_vn').addClass('error');
                var content = 'Nội dung tour tiếng việt không được rỗng';
                showError(content);
                checked = false;
            }

            if($('#code').val() == ""){
                $('#code').addClass('error');
                var content = 'Mã code của tour không được rỗng';
                showError(content);
                checked = false;
            }

            var transport_list = [];
            $.each($('input[name="transport"]:checked'), function(){
                transport_list.push($(this).val())
            })

            if(transport_list.length <= 0){
                $('small#transport-notify').addClass('error-text');
                //$('small#transport-notify').addStyle('color: red;');
                var content = "Vui lòng chọn ít nhất 1 phương tiện vận chuyển";
                showError(content);
                checked = false;
            }

            var tour_type;
            $.each($('input[name="radioCatRoot"]:checked'), function(){
                tour_type = $(this).val();
                //cat_id = 6 : tour trong ngay
                //cat_id = 7 : tour nhieu ngay trong nc
                //cat_id = 8 : tour nhieu ngay quoc te
                if(tour_type == 7 || tour_type == 8){
                    if($('#days').val() < 2 || $('#days').val() == ""){
                        $('#days').addClass('error');
                        var content = "Số ngày không được rỗng và phải lớn hơn 2";
                        showError(content);
                        checked = false
                    }
                }
            });

            if($('#price_en').val() == ''){
                $('#price_en').addClass('error');
                var content = "Giá tour usd không được rỗng";
                showError(content);
                checked = false;   
            }

            if($('#price_vn').val() == ''){
                $('#price_vn').addClass('error');
                var content = "Giá tour vnd không được rỗng";
                showError(content);
                checked = false;   
            }

            if($('#listImage').val() == ''){
                $('#images').addClass('error');
                var content = "Bạn chưa upload hình ảnh tour";
                showError(content);
                checked = false;   
            }
            return checked;
        }


        /*
        $(function(){
            var requiredCheckboxes = $('.options :checkbox[required]');
            requiredCheckboxes.change(function(){
                if(requiredCheckboxes.is(':checked')) {
                    requiredCheckboxes.removeAttr('required');
                } else {
                    requiredCheckboxes.attr('required', 'required');
                }
            });
        });*/
        //
        //kiem tra days duoc nhap
        //
        /*
        function showNights() {   
            var value = document.getElementById("idcagtegory").value;
            var split = value.split(",");
            var idcate = split[1];
            
            var day = document.getElementById('days').value;
                if(!isNaN(day) && day != '' && day != 0){
                    document.getElementById('nights').value = day - 1;      
                    addFields();          
                }
                if(idcate != 6) 
                {                     
                    if(day <= 1)                   
                    {
                        document.getElementById('days').value = 2;
                        document.getElementById('nights').value =  document.getElementById('days').value - 1; 
                        
                    }
                }        
        }*/
        /*
        * Tu dong ghi vao days khi select category
        */

        /*
        function autoInsertDays(){

            var value = document.getElementById("idcagtegory").value;
            var split = value.split(",");
            var idcate = split[1];
            //var idcate_id = split[0];
            if(idcate == 6){ // du lich trong nuoc
                document.getElementById('days').value = 1;
                document.getElementById('nights').value  = 0;
                document.getElementById("days").readOnly = true;
                document.getElementById("nights").readOnly = true;
            }
            else{
                document.getElementById('days').value = 2;
                document.getElementById('nights').value  = 1;
                document.getElementById("days").readOnly = false;
            }
        }*/
      
           
    </script>
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{env('BACK_CSS')}}/plugins/morris/morris.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{env('BACK_CSS')}}/dist/js/demo.js"></script>
</section>


@endsection


