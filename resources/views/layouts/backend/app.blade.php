<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="">

    <title>Management</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/bootstrap-3.3.7/css/bootstrap.min.css">
    <link href="/backend/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="/backend/assets/js/gritter/css/jquery.gritter.css" />
    <!--
    <link rel="stylesheet" type="text/css" href="/backend/assets/lineicons/style.css">
    -->

    <!-- Custom styles for this template -->
    <link href="/backend/assets/css/style.css" rel="stylesheet">
    <link href="/backend/assets/css/style-responsive.css" rel="stylesheet">
    <script src="/backend/assets/js/chart-master/Chart.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- include libraries(jQuery, bootstrap) -->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <!-- set up csrf token for ajax -->
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <script type="text/javascript">
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    </script>
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b><?php echo Config::get('tamhanh.setting.site_name');?> Management</b></a>
            <!--logo end-->

            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo env('BACK_URL');?>/logout">Logout</a></li>
                </ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion" style="list-style-type: none">

                  <p class="centered"><a href="profile.html"><img src="/images/avatar/{{$user->avatar}}" class="img-circle" width="60"></a></p>
                  <h5 class="centered">{{$user->name}}</h5>

                  <li class="mt" style="text-transform: uppercase; font-size: 25px; color: #bbb;">
                      Dashboard
                  </li>
                  @if($user->role_id == 1) @include('backend.sidebar.admin')
                  @endif
                  @if($user->role_id == 2) @include('backend.sidebar.admin')
                  @endif
                  @if($user->role_id == 3) @include('backend.sidebar.admin')
                  @endif
                  @if($user->role_id == 4) @include('backend.sidebar.employee')
                  @endif
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-9 main-chart">
                  @yield('container')
                  </div>

                  <div class="col-lg-3">
                  @include('layouts.backend.rightbox')
                  </div>
              </div><!--/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - codecuibap.com
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  -->
  <!-- js placed at the end of the document so the pages load faster -->
    <!--scroll menu --
    <script class="include" type="text/javascript" src="/backend/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/backend/assets/js/jquery.scrollTo.min.js"></script>
    <script src="/backend/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/backend/assets/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="/backend/assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="/backend/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="/backend/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="/backend/assets/js/sparkline-chart.js"></script>
    <script src="/backend/assets/js/zabuto_calendar.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
          /*
          var unique_id = $.gritter.add({
              // (string | mandatory) the heading of the notification
              title: 'Welcome to Dashgum!',
              // (string | mandatory) the text inside the notification
              text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
              // (string | optional) the image to display on the left
              image: 'assets/img/ui-sam.jpg',
              // (bool | optional) if you want it to fade out on its own or just sit there
              sticky: true,
              // (int | optional) the time you want it to be alive for before fading out
              time: '',
              // (string | optional) the class name you want to apply to that specific message
              class_name: 'my-sticky-class'
          });
          */
        return false;
        });
    </script>

    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
            /*
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });*/
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


  </body>
</html>
