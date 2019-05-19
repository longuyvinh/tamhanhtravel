<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Tamhanh Travel</title>
    <meta name="author" content="Development web codecuibap.com" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style_new.css">
    <link rel="stylesheet" type="text/css" href="/css/material-icon.css">
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
	<div class="row">
	 	<div class="col-md-12 text-right">
			<form action="/switchLang" method="post">
			    {!! csrf_field() !!}
			    @foreach (Config::get('languages') as $lang => $language)
		            @if ($lang == App::getLocale())
		            	<button type="button" class="btn btn-xs btn-default">{{$language}}</button> 
		            @else
		            	<input type="hidden" name="lang" value="{{$lang}}">
		            	<button type="submit" class="btn btn-xs btn-primary">{{$language}}</button>
		            @endif
		        @endforeach
			</form>
		</div>
	</div>
	<div class="topnav" id="myTopnav">
		<a href="#home"><img src="/images/logotamhanh.png" height="50"></a>
		<a href="{{ url('#') }}">@lang('common.homepage')</a>
        <a href="#about-us">@lang('common.about_us')</a>
        <a href="#bus">@lang('common.bus_transport')</a>
        <a href="{{ url('#') }}">@lang('common.goods_transport')</a>
        <a href="{{ route('travel') }}">@lang('common.package_tours')</a>
        <a href="#location">@lang('common.contact')</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
	</div>


    <!-- Page Content -->
    @yield('content')
    <!-- /.container -->
</div>

<!-- Footer -->
<div style="width: 100%; background: #eaeaea; color: #959595;">
  <div class="container">
    <footer>
      <div class="row" style="border-bottom: 1px solid #ccc; margin-top: 30px;">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <h4>Dịch Vụ</h4>
              <ul>
                <li><a href="#bus">@lang('common.bus_transport')</a></li>
                <li><a href="{{ url('#') }}">@lang('common.goods_transport')</a></li>
                <li><a href="{{ url('#') }}">@lang('common.package_tours')</a></li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <h4>Chăm Sóc Khách Hàng</h4>
              <ul>
                <li>Hình thức đăng ký tour</li>
                <li>Hướng dẫn đặt vé xe</li>
                <li>Câu hỏi thường gặp</li>
                <li>Hợp tác với {{Config::get('tamhanh.setting.site_name')}}</li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <h4>Về Chúng Tôi</h4>
              <ul>
                <li>Giới thiệu về {{Config::get('tamhanh.setting.site_name')}}</li>
                <li>Thông báo từ {{Config::get('tamhanh.setting.site_name')}}</li>
                <li>Liên hệ với {{Config::get('tamhanh.setting.site_name')}}</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<div style="margin: 20px 0;"><img src="/images/logotamhanh.png" height="80" style="border: 1px solid #fff;" /></div>
        </div>
      </div>

      <div class="row" style="margin: 30px 0;">
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h5>Văn phòng Hồ Chí Minh</h5>
          199 Phạm Ngũ Lão, Quận 1, TP.HCM
          <br><i class="material-icons th-dark md-12">&#xE551;</i> (028) 3920 5653 - (028) 3920 9665
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h5>Văn phòng Phan Thiết</h5>
          133 Tôn Đức Thắng, Phường Phú Thủy, TP Phan Thiết
          <br><i class="material-icons th-dark md-12">&#xE551;</i>  (0252) 3833 277 - (0252) 3835 644
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h5>Văn phòng Mũi Né</h5>
          135 Nguyễn Đình Chiểu, Phường Hàm Tiến
          <br><i class="material-icons th-dark md-12">&#xE551;</i> (0252) 3847 560 - (0252) 3743 737
          <br>354 Huỳnh Thúc Kháng (đối diện chợ Mũi Né)
          <br><i class="material-icons th-dark md-12">&#xE551;</i> (0252) 3848 080 - (0252) 3848 338 - (0252) 3748 511
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h5>Văn phòng Nha Trang</h5>
          14A Trần Hưng Đạo, TP Nha Trang
          <br><i class="material-icons th-dark md-18">&#xE551;</i>  (0258) 3527 525 - (0258) 3525 288
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h5>Văn phòng Diên Khánh</h5>
          55 Chất Đốt
          <br><i class="material-icons th-dark md-18">&#xE551;</i>  (0258) 3850 925 - (0258) 3850 042
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6">
          <h5>Văn phòng Đà Lạt</h5>
          134 Bùi Thị Xuân
          <br><i class="material-icons th-dark md-18">&#xE551;</i>  (01253) 063 063
        </div>
      </div>
    </footer>
  </div>
</div>

<div style="width: 100%; background: #ddd; color: #959595; font-weight: 100; font-size: 0.9em;">
  <div class="container">
    <div class="row" style="margin: 10px 0;">
          <div class="col-lg-6 text-left">
            © 2016 {{Config::get('tamhanh.setting.site_name')}}. All Rights Reserved
            <br>Development by <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=longuyvinh.ny@gmail.com&su=SUBJECT&body=BODY">longuyvinh</a>
          </div>
          <div class="col-lg-6 text-right">
            
          </div>
      </div>
  </div>
</div>

<!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=75026580"></script>

<script type="text/javascript">
	/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav";
	    }
	}
</script>
</body>
</html>
