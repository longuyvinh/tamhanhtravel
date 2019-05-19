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
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/material-icon.css">

</head>
<div>
  <div id="phone-contact-icon" style="position: fixed; right: 0; top: 50%; z-index: 9999;">
    <div style="background: #FF4D4D; font-weight: bold; color: #fff; border-radius: 5px 0px 0px 5px; padding: 5px 10px; margin-bottom: 5px;">
      <i class="material-icons">&#xE61C;</i>
    </div>
  </div>
  <div id="phone-contact-expand" style="position: fixed; right: 0; top: 45%; z-index: 9999;">
    <div style="background: #FF4D4D; font-weight: bold; color: #fff; border-radius: 5px 0px 0px 5px; padding: 5px 10px; margin-bottom: 5px;">
      Văn phòng Hồ Chí Minh
      <br>(028) 3920 5653 - (028) 3920 9665
    </div>
    <div style="background: #FF4D4D; font-weight: bold; color: #fff; border-radius: 5px 0px 0px 5px; padding: 5px 10px; margin-bottom: 5px;">
      Văn phòng Phan Thiết
      <br>(0252) 3833 277 - (0252) 3835 644
    </div>
    <div style="background: #FF4D4D; font-weight: bold; color: #fff; border-radius: 5px 0px 0px 5px; padding: 5px 10px; margin-bottom: 5px;">
      Văn phòng Mũi Né
      <br>(0252) 3741 852 - (0252) 3741 853
      <br>(0252) 3748 338
      <br>(0252) 3748 211
      <br>(0252) 3847 560 - (0252) 3847 561 - (0252) 3743 737
    </div>
    <div style="background: #FF4D4D; font-weight: bold; color: #fff; border-radius: 5px 0px 0px 5px; padding: 5px 10px; margin-bottom: 5px;">
      Văn phòng Nha Trang
      <br>(0258) 3527 525 - (0258) 3525 288
    </div>
  </div>
</div>

<body data-spy="scroll" data-target=".navbar" data-offset="-350">

    <!-- Navigation -->
    <div style="background: none; z-index: 2000; position: absolute; top: 20px; left: 0; right: 0;">
        <div class="container">

        <div class="row">
            <div class="pull-right top-page">

                <ul>
                    <li>
                        <form action="/switchLang" method="post">
                            {!! csrf_field() !!}

                            <select onchange="this.form.submit()" name="lang">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang == App::getLocale())
                                    <option value="{{$lang}}" selected="true">{{$language}}</option>
                                    @else
                                    <option value="{{$lang}}">{{$language}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </form>
                    </li>
                    <!--
                    <li>
                        <address>Hotline:<span class="material-icons th-red icon icon-primary">&#xE61D;</span> <span style="font-size: 25px; color:#469AE9; font-weight: 800;">0915 81 79 79</span></address>
                    </li>
                    -->
                </ul>
            </div>

        </div>

        <div class="row" id="menu-top">
            <!-- Navigation -->
            <nav class="navbar navbar-default" role="navigation" style="background: #E5E9ED; border: 1px solid #D9D9CE;">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <!--
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>-->
                        </button>
                        <a class="navbar-brand" href="#"><img src="/images/logotamhanh.png" height="50" /></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('#') }}">@lang('common.homepage')</a></li>
                            <li><a href="#about-us">@lang('common.about_us')</a></li>
                            <li><a href="#bus">@lang('common.bus_transport')</a></li>
                            <li><a href="{{ url('#') }}">@lang('common.goods_transport')</a></li>
                            <li><a href="{{ route('travel') }}">@lang('common.package_tours')</a></li>
                            <li><a href="#location">@lang('common.contact')</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>

        </div>


        <div style="position: relative; top: 0; right: 0px; z-index: 9999999; float:right;">
          <div class="box-body">
            <!-- comment out box currency -->
            <!--
            @php
              $url = "http://www.vietcombank.com.vn/ExchangeRates/ExrateXML.aspx";
              $xml = simplexml_load_file($url);
              $listing = ['AUD','CAD','EUR','GBP','JPY', 'KRW', 'USD'];
            @endphp
            <table id="example2" class="table table-currency table-bordered table-hover">
              <thead>
              <tr>
                <th align="center">Currency</th>
                <th align="center">Buy</th>
                <th align="center">Transfer</th>
                <th align="center">Sell</th>
              </tr>
              </thead>
              <tbody>
              @foreach($xml->Exrate as $item)
                @if( intval($item["Buy"]) != 0 && in_array($item["CurrencyCode"], $listing))
                <tr>
                  <td><span class="flag flag-{{ $item['CurrencyCode'] }}"></span> {{ $item["CurrencyCode"] }}</td>
                  <td align="right">{{ number_format(intval($item["Buy"])) }}</td>
                  <td align="right">{{ number_format(intval($item["Transfer"])) }}</td>
                  <td align="right">{{ number_format(intval($item["Sell"])) }}</td>
                </tr>
                @endif
              @endforeach
                <tr>
                  <td colspan="4" align="right">Resources from vietcombank</td>
                </tr>
              </tbody>
            </table>
          </div>-->
        </div>
      </div>
    </div>

    <header>

        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('/images/slide_01.jpg');"></div>

                    <div class="carousel-caption">
                        <h2>Dịch vụ lữ hành hàng đầu</h2>
                        <h5>Được thành lập từ năm 2005 và nỗ lực không ngừng</h5>

                        <div class="content">

                            <p>Vận chuyển hành khách</p>
                            <p>Vận chuyển hàng hóa</p>
                            <p>Dịch vụ tour trong và ngoài nước</p>

                        </div>

                    </div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('/images/slide_02.jpg');"></div>

                    <div class="carousel-caption">
                        <h2>Dịch vụ lữ hành chuyên nghiệp</h2>
                        <h5>Tất cả vì khách hàng</h5>
                        <div class="content">

                            <p>Hệ thống xe đời mới hiện đại tạo sự thoải mái</p>
                            <p>Giá cả cạnh tranh với nhiều chế độ hậu mãi</p>
                            <p>Độ an toàn cao, bảo quản cẩn thận</p>
                            <p>Nhân viên nhiệt tình, hỗ trợ tối ưu</p>

                        </div>
                    </div>

                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('/images/slide_04.jpg');"></div>
                </div>
            </div>

            <!-- Controls -->
            <!--
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
            -->
        </div>
    </header>

    <!-- Page Content -->
    @yield('content')
    <!-- /.container -->

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
              <br>
              161 Nguyễn Cư Trinh, Quận 1, TP.HCM
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

    <div id="promotion-ads" class="promotion-ads">
      <div><img src="/images/promotion.png" width="50%"></div>
    </div>

  <script src="/js/jquery.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.min.js"></script>

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=weather&key=AIzaSyB3bZisna5uMnHFtMIhP0IiVjRQX-HOgvs"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#phone-contact-expand').hide();
    $('#phone-contact-icon').hover(function(){
      $("#phone-contact-icon" ).animate(
          {
              left: "+=50",
              opacity: 0,
          },

          // Duration
          300,

          // Callback to invoke when the animation is finished
          function() {
              console.log( "done!" );
          }
      );
      $('#phone-contact-expand').show();
    });

    $('#phone-contact-expand').mouseout(function(){
      $('#phone-contact-expand').hide();
      $("#phone-contact-icon" ).animate(
          {
              left: "-=50",
              opacity: 1,
          },

          // Duration
          300,

          // Callback to invoke when the animation is finished
          function() {
              console.log( "done!" );
          }
      );
    })
    //$('#phone-contact-icon')
  });

  function drawMaps(location, zooomSize, middle){
    if(location.length > 0){
      var center = new google.maps.LatLng(middle[0], middle[1]);

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: zooomSize,
        center: center,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });

      var infowindow = new google.maps.InfoWindow();

      var marker, i;
      console.log(location.length);
      for (var i = 0; i < location.length; i++) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(location[i].lat, location[i].long),
          map: map
        });

        //set default
        infowindow.setContent(location[i].tenvp);
        infowindow.open(map, marker);

        //set event click
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(location[i].tenvp);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }else{
      console.log("None address not found");
    }
  }

  var locations;
  var lang = '{{Lang::locale()}}';
  if( lang == 'vi'){
    locations = [{tenvp:'<b>TAMHANH Travel Tp.HCM</b><br>199 Phạm Ngũ Lão, Quận 1, TP.HCM<br>Sdt: (028) 3920 5653 - (028) 3920 9665', lat:10.768584, long:106.693202, order: 1},
                 {tenvp:'<b>TAMHANH Travel Tp.HCM</b><br>161 Nguyễn Cư Trinh, Quận 1, TP.HCM<br>Sdt: (028) 3920 5653 - (028) 3920 9665', lat:10.763200, long:106.688407, order: 2}];
  }else{
    locations = [{tenvp:'<b>TAMHANH Travel HCM City</b><br>199 Pham Ngu Lao Str, Dist. 1, HCM City<br>Phone: (028) 3920 5653 - (028) 3920 9665', lat:10.768584, long:106.693202, order: 1},
                 {tenvp:'<b>TAMHANH Travel HCM City</b><br>199 Pham Ngu Lao Str, Dist. 1, HCM City<br>Phone: (028) 3920 5653 - (028) 3920 9665', lat:10.763200, long:106.688407, order: 2}];
  }
  var center = [10.766608,106.69413];
  var zoomSize = 16
  drawMaps(locations, zoomSize, center);
  //center map phan thiet : 10.940106, 108.164060

  $(".contact-item").click(function () {
      //$(this).siblings().find(".active").removeClass("active");
      $(this).parent().find(".content").removeClass("active");
      //$(this).find('.th-dark').removeClass('th-dark').addClass('.th-light');
      $(this).find(".content").addClass("active");
      var diadiem = $(this).attr('id');
      if(diadiem == "vpSaigon"){
        if(lang == 'vi'){
          locations = [{tenvp:'<b>TAMHANH Travel Tp.HCM</b><br>199 Phạm Ngũ Lão, Quận 1, TP.HCM<br>Sdt: (028) 3920 5653 - (028) 3920 9665', lat:10.768584, long:106.693202, order: 1},
                       {tenvp:'<b>TAMHANH Travel Tp.HCM</b><br>161 Nguyễn Cư Trinh, Quận 1, TP.HCM<br>Sdt: (028) 3920 5653 - (028) 3920 9665', lat:10.763200, long:106.688407, order: 2}];
        }else{
          locations = [{tenvp:'<b>TAMHANH Travel HCM City</b><br>199 Pham Ngu Lao Str, Dist. 1, HCM City<br>Phone: (028) 3920 5653 - (028) 3920 9665', lat:10.768584, long:106.693202, order: 1},
                       {tenvp:'<b>TAMHANH Travel HCM City</b><br>199 Pham Ngu Lao Str, Dist. 1, HCM City<br>Phone: (028) 3920 5653 - (028) 3920 9665', lat:10.763200, long:106.688407, order: 2}];
        }
        center = [10.766608, 106.69413];
        zoomSize = 16;
      }else if(diadiem == "vpPhanthiet"){
        if(lang == 'vi'){
          locations = [{tenvp:'<b>TAMHANH Travel Phan Thiết</b><br>133 Tôn Đức Thắng, Phường Phú Thủy, TP Phan Thiết<br>Sdt: (0252) 3833 277 - (0252) 3835 644', lat:10.930198, long:108.110755, order: 1}];
        }else{
          locations = [{tenvp:'<b>TAMHANH Travel Phan Thiet</b><br>133 Ton Duc Thang Str, Phan Thiet City<br>Sdt: (0252) 3833 277 - (0252) 3835 644', lat:10.930198, long:108.110755, order: 1}];

        }
        center = [10.930198, 108.110755];
        zoomSize = 18;
      }else if(diadiem == "vpMuine"){
        if(lang == 'vi'){
          locations = [{tenvp:'<b>Trạm Dừng Chân Huỳnh Tấn Phát</b><br>Sdt: (0252) 3847 560 - (0252) 3847 561 - (0252) 3743 737', lat:10.937996,long:108.286730, order: 4},
                      {tenvp:'<b>TAMHANH Travel Mũi Né</b><br>354 Huỳnh Thúc Kháng, Phường Hàm Tiến<br>Sdt: (0252) 3748 211', lat:10.935737,long:108.286339, order: 3},
                      {tenvp:'<b>TAMHANH Travel Mũi Né</b><br>138 Nguyễn Đình Chiểu, Phường Hàm Tiến<br>Sdt: (0252) 3748 338', lat:10.955197, long:108.232942, order: 2},
                      {tenvp:'<b>TAMHANH Travel Mũi Né</b><br>135 Nguyễn Đình Chiểu, Phường Hàm Tiến<br>Sdt: (0252) 3741 852 - (0252) 3741 853', lat:10.948662,long:108.203916, order: 1}];
        }else{
          locations = [{tenvp:'<b>Trạm Dừng Chân Huỳnh Tấn Phát</b><br>Sdt: (0252) 3847 560 - (0252) 3847 561 - (0252) 3743 737', lat:10.937996,long:108.286730, order: 4},
                      {tenvp:'<b>TAMHANH Travel Mũi Né</b><br>354 Huỳnh Thúc Kháng, Phường Hàm Tiến<br>Sdt: (0252) 3748 211', lat:10.935737,long:108.286339, order: 3},
                      {tenvp:'<b>TAMHANH Travel Mũi Né</b><br>138 Nguyễn Đình Chiểu, Phường Hàm Tiến<br>Sdt: (0252) 3748 338', lat:10.955197, long:108.232942, order: 2},
                      {tenvp:'<b>TAMHANH Travel Mũi Né</b><br>135 Nguyễn Đình Chiểu, Phường Hàm Tiến<br>Sdt: (0252) 3741 852 - (0252) 3741 853', lat:10.948662,long:108.203916, order: 1}];

        }
        center = [10.9548188, 108.232836];
        zoomSize = 13;
      }else if(diadiem == "vpNhatrang"){
        if(lang == 'vi'){
          locations = [{tenvp:'<b>TAMHANH Travel Nha Trang</b><br>14A Trần Hưng Đạo, TP Nha Trang<br>Sdt: 058.3527525 - 058.3525288', lat:12.245400, long:109.194696, order: 1}];
        }else{
          locations = [{tenvp:'<b>TAMHANH Travel Nha Trang</b><br>14A Tran Hung Dao Str, Nha Trang City<br>Phone: 058.3527525 - 058.3525288', lat:12.245400, long:109.194696, order: 1}];
        }
        center = [12.245400, 109.194696];
        zoomSize = 18;
      }else if(diadiem == "vpDalat"){
        if(lang == 'vi'){
          locations = [{tenvp:'<b>TAMHANH Travel Đà Lạt</b><br>134 Bùi Thị Xuân, TP Đà Lạt<br>Sdt: (01253) 063 063', lat:11.948750, long:108.439361, order: 1}];
        }else{
          locations = [{tenvp:'<b>TAMHANH Travel Da Lat</b><br>134 Bui Thi Xuan Str, Da Lat City<br>Phone: (01253) 063 063', lat:11.948750, long:108.439361, order: 1}];
        }
        zoomSize = 18;
      }
      //$('#map').html('<div class="center-map"><button class="btn btn-lg btn-primary"><i class="material-icons refresh-animate md-18">&#xE41A;</i> loading map...</button></div>');
      drawMaps(locations, zoomSize, center);
      var map_posistion = $("#map").offset().top - 300;
      $("html").animate({ scrollTop: map_posistion }, "slow");
  });

  //hide promotion ads when scroll to map
  var offsetTop = $("#map").offset().top - 200;
  var offsetBottom = $("#contact").offset().top - 200;

  $(window).scroll(function(){
   var scrollTop = $(window).scrollTop();
   if(scrollTop > offsetTop && scrollTop < offsetBottom){
     $("#promotion-ads").fadeOut(200);
   }else{
     $("#promotion-ads").fadeIn(200);
   }
  });

  </script>

  <script type="text/javascript">

      var height = $(window).height();
      //console.log(height);
      var heightServices = 274;
      var heightSlide = height - heightServices;
      //console.log(heightSlide);
      if(heightSlide >= 490){
          $('.item').css('height', heightSlide);
      }else if(heightSlide >= 280){
          $('.item').css('height', heightSlide);
          $('.carousel-caption').each(function(){
              $(this).hide();
          });
      }else{
          $('.item').css('height', height);
      }

      $('.carousel').carousel({
          interval: 5000 //changes the speed
      });
      $("#location li").find('.active').find('.th-dark').removeClass('th-dark').addClass('.th-light');

      // var lang = {{Lang::locale()}};
      // console.log(lang);


      $(window).scroll(function() {
          if ($(this).scrollTop() > 160) {
              $(".navbar").addClass('ontop').fadeIn(500);
          } else {
              //$(".navbar").fadeOut(500);
              $("#menu-top").find('.ontop').removeClass('ontop');

              //$(".navbar").show();
          }
      });
      /*
      $(function() {
          $('a.page-scroll').bind('click', function(event) {
              var $anchor = $(this);
              console.log($anchor);
              $('html, body').stop().animate({
                  scrollTop: $($anchor.attr('href')).offset().top
              }, 1500, 'easeInOutExpo');
              event.preventDefault();
          });
      });*/

  </script>
  <!--Add the following script at the bottom of the web page (before </body></html>)-->
  <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=75026580"></script>
</body>
</html>
