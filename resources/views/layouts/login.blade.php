<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet"> 

    <!-- Styles -->
    <link rel="stylesheet" href="/backend/assets/bootstrap.min.css">
    <link rel="stylesheet" href="/backend/assets/css/style.css">
    {{-- <link href="{{ elixir('/backend/assets/css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            /* regular (italic), bold (italic) */
            font-family: 'Arimo', Arial, sans-serif;
        }

        .fa-btn {
            margin-right: 6px;
        }


    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="top-header" style="padding: 10px 0; background: #fff;">
                <div class="row">
                    <div class="col-sm-4">Logo here <!--<img src='/images/logo.png' />--></div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="row">
                            <ul class="nav navbar-nav navbar-right">
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">@lang('common.login')</a></li>
                                    <li><a href="{{ url('/register') }}">@lang('common.register')</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                @endif
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
                            </ul>
                            <!--
                            <a href="">Đăng Nhập</a> | <a href="">Đăng Ký</a> | Ngôn ngữ : 
                            -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="topNav">
                <ul class="menutop" id="menutop">
                    <li class="logoSmall"><a href="#"> Logo here </a></li>
                    <li><a href="{{ url('#') }}">@lang('common.homepage')</a></li>
                    <li><a href="{{ url('#') }}">@lang('common.about_us')</a></li>
                    <li><a href="{{ url('#') }}">@lang('common.vietnam_daily_tours')</a></li>
                    <li><a href="{{ url('#') }}">@lang('common.vietnam_package_tours')</a></li>
                    <li><a href="{{ url('#') }}">@lang('common.hotel')</a></li>
                    <li><a href="{{ url('#') }}">@lang('common.services')</a></li>
                    <li><a href="{{ url('#') }}">@lang('common.outbound_tours')</a></li>
                    <li><a href="{{ url('#') }}">@lang('common.contact')</a></li>
                    <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
                </ul>
            </div>
            <!--
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Tamhanh Travel</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">@lang('common.homepage')</a></li>
                    <li><a href="{{ url('/') }}">@lang('common.about_us')</a></li>
                    <li><a href="{{ url('/') }}">@lang('common.vietnam_daily_tours')</a></li>
                    <li><a href="{{ url('/') }}">@lang('common.vietnam_package_tour')</a></li>
                    <li><a href="{{ url('/') }}">@lang('common.hotel')</a></li>
                    <li><a href="{{ url('/') }}">@lang('common.services')</a></li>
                    <li><a href="{{ url('/') }}">@lang('common.outbound_tours')</a></li>
                    <li><a href="{{ url('/') }}">@lang('common.contact')</a></li>
                </ul>
            </div>
            -->
        </div>
    </nav>

    @yield('content')

    <!--Add the following script at the bottom of the web page (immediately before the </body> tag)-->
    <!--vinh comment support online -->
    <!--
    <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=43188372"></script>
    -->
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("menutop");
        if (x.className === "menutop") {
            x.className += " responsive";
        } else {
            x.className = "menutop";
        }
    }
    </script>
</body>
</html>
