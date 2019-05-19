<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <meta name="author" content="Development web codecuibap.com" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lora:700" rel="stylesheet"> 

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/component.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/demo.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body id="app-layout">
    <div id="container" class="container intro-effect-push">
            <!-- Top Navigation -->
            <!--
            <div class="codrops-top clearfix">
                <ul class="right">
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
            </div>-->

            <header class="header">
                <div class="bg-img"><img src="/images/hinhnen.gif" alt="Background Image"/></div>
                <div class="title">
                    <div class="logo-tamhanh"><img src="/images/tamhanhLogo.png" width="250"></div>
                    <ul class="menu-content">
                        <li id="service-bus">
                            [ Dich vu lu hanh ]<br><img src="/images/logo01.png" />
                        </li>
                        <li id="service-goods">
                            [ Vận chuyển hàng hóa ]
                            <br><img src="/images/logo02.png" />
                        </li>
                        <li id="service-travel">[ Dich vu du lịch ]<br><img src="/images/logo03.png" /></li>
                    </ul>
                    
                    <ul class="contact-content">
                        <li>
                            <h3>Văn phòng Hồ Chí Minh</h3>
                            <p><img src="images/location-pointer.png" width="15"> 199 Phạm Ngũ Lão, Quận 1, TP.HCM</p>
                            <p><img src="images/old-phone.png" width="15"> 08.39205653</p>
                            <p><img src="images/telephone-handle.png" width="15"> 0909.150.784</p>
                        </li>
                        <li>
                            <h3>Văn phòng Mũi Né</h3>
                            <p><img src="images/location-pointer.png" width="15"> 199 Phạm Ngũ Lão, Quận 1, TP.HCM</p>
                            <p><img src="images/old-phone.png" width="15"> 08.39205653</p>
                            <p><img src="images/telephone-handle.png" width="15"> 0909.150.784</p>
                        </li>
                        <li>
                            <h3>Văn phòng Nha Trang</h3>
                            <p><img src="images/location-pointer.png" width="15"> 199 Phạm Ngũ Lão, Quận 1, TP.HCM</p>
                            <p><img src="images/old-phone.png" width="15"> 08.39205653</p>
                            <p><img src="images/telephone-handle.png" width="15"> 0909.150.784</p>
                        </li>
                    </ul>
                    
                </div>
            </header>
            <button class="trigger" data-info="Click here to start"><span>Trigger</span></button>
            
            <div class="main-logo">
                <div><img src="/images/tamhanhLogo.png" width="150"></div> 
                <div>
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
                </div>
            </div>

            <div class="block-main-menu" id="menu" >
                <div class="main-menu">
                    <ul class="" style="margin: 0; padding: 0;">
                        <li><a href="{{ url('#') }}">@lang('common.homepage')</a></li>
                        <li><a href="{{ url('#') }}">@lang('common.bus_transport')</a></li>
                        <li><a href="{{ url('#') }}">@lang('common.goods_transport')</a></li>
                        <li><a href="{{ url('#') }}">@lang('common.package_tours')</a></li>
                        <!--
                        <li><a href="{{ url('#') }}">@lang('common.about_us')</a></li>-->
                        <li><a href="{{ url('#') }}">@lang('common.contact')</a></li>
                        <li style="float:right;">
                            <div class="right">
                                @if (Auth::guest())
                                    <a href="{{ url('/login') }}">@lang('common.login')</a> | <a href="{{ url('/register') }}">@lang('common.register')</a>
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
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


    <!--
    <div id="container" class="container intro-effect-push">
        
        
    
        <button class="trigger" data-info=""><img src="/images/icon-trigger.png"></button>
        
        <div class="title">
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
            
        </div> 
    </div>
    -->
    

    @yield('content')
    </div>

    <script src="/js/classie.js"></script>
    <script>
        $(document).ready(function(){                    
            $(window).scroll(function(){ 
                var alto_total = $(this).scrollTop();
                var loader_business = $('#introdution').offset();
                console.log(alto_total + " == " + loader_business.top);
                if (alto_total >= loader_business.top) {
                    //alert('tomalo');
                    //$(document).off("scroll");
                    $('#menu').fadeIn(500);
                }  
                /*                       
                if ($(this).scrollTop() > 200) {
                    $('#menu').fadeIn(500);
                } else {
                    $('#menu').fadeOut(500);
                }*/
            });
        });
        var widthScreen = ($( window ).width());
        var heightScreen = ($( window ).height());
        /*
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("service-bus");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        // not work -> can tim hieu lai
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        
        // $(window).scroll(function () {
           
        //     alert('scroll');
        //     var imagePos = $(this).offset().top;
        //     var imageHeight = $(this).height();
        //     var topOfWindow = $(window).scrollTop();

        //     if (imagePos < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow) {
        //         $(this).addClass("slideRight");
        //     } else {
        //         $(this).removeClass("slideRight");
        //     }
        // });*/
        (function() {

                // detect if IE : from http://stackoverflow.com/a/16657946      
                var ie = (function(){
                    var undef,rv = -1; // Return value assumes failure.
                    var ua = window.navigator.userAgent;
                    var msie = ua.indexOf('MSIE ');
                    var trident = ua.indexOf('Trident/');

                    if (msie > 0) {
                        // IE 10 or older => return version number
                        rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
                    } else if (trident > 0) {
                        // IE 11 (or newer) => return version number
                        var rvNum = ua.indexOf('rv:');
                        rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
                    }

                    return ((rv > -1) ? rv : undef);
                }());


                // disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179                  
                // left: 37, up: 38, right: 39, down: 40,
                // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
                var keys = [32, 37, 38, 39, 40], wheelIter = 0;

                function preventDefault(e) {
                    e = e || window.event;
                    if (e.preventDefault)
                    e.preventDefault();
                    e.returnValue = false;  
                }

                function keydown(e) {
                    for (var i = keys.length; i--;) {
                        if (e.keyCode === keys[i]) {
                            preventDefault(e);
                            return;
                        }
                    }
                }

                function touchmove(e) {
                    preventDefault(e);
                }

                function wheel(e) {
                    // for IE 
                    //if( ie ) {
                        //preventDefault(e);
                    //}
                }

                function disable_scroll() {
                    window.onmousewheel = document.onmousewheel = wheel;
                    document.onkeydown = keydown;
                    document.body.ontouchmove = touchmove;
                }

                function enable_scroll() {
                    window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
                }

                var docElem = window.document.documentElement,
                    scrollVal,
                    isRevealed, 
                    noscroll, 
                    isAnimating,
                    container = document.getElementById( 'container' ),
                    trigger = container.querySelector( 'button.trigger' );

                function scrollY() {
                    return window.pageYOffset || docElem.scrollTop;
                }
                
                function scrollPage() {
                    scrollVal = scrollY();
                    
                    if( noscroll && !ie ) {
                        if( scrollVal < 0 ) return false;
                        // keep it that way
                        window.scrollTo( 0, 0 );
                    }

                    if( classie.has( container, 'notrans' ) ) {
                        classie.remove( container, 'notrans' );
                        return false;
                    }

                    if( isAnimating ) {
                        return false;
                    }
                    
                    if( scrollVal <= 0 && isRevealed ) {
                        toggle(0);
                    }
                    else if( scrollVal > 0 && !isRevealed ){
                        toggle(1);
                    }
                }

                function toggle( reveal ) {
                    isAnimating = true;
                    
                    if( reveal ) {
                        classie.add( container, 'modify' );
                    }
                    else {
                        noscroll = true;
                        disable_scroll();
                        classie.remove( container, 'modify' );
                    }

                    // simulating the end of the transition:
                    setTimeout( function() {
                        isRevealed = !isRevealed;
                        isAnimating = false;
                        if( reveal ) {
                            noscroll = false;
                            enable_scroll();
                        }
                    }, 1200 );
                }

                // refreshing the page...
                var pageScroll = scrollY();
                noscroll = pageScroll === 0;
                
                disable_scroll();
                
                if( pageScroll ) {
                    isRevealed = true;
                    classie.add( container, 'notrans' );
                    classie.add( container, 'modify' );
                }
                
                window.addEventListener( 'scroll', scrollPage );
                trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
            })();
            /*
        (function() {

            // detect if IE : from http://stackoverflow.com/a/16657946      
            var ie = (function(){
                var undef,rv = -1; // Return value assumes failure.
                var ua = window.navigator.userAgent;
                var msie = ua.indexOf('MSIE ');
                var trident = ua.indexOf('Trident/');

                if (msie > 0) {
                    // IE 10 or older => return version number
                    rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
                } else if (trident > 0) {
                    // IE 11 (or newer) => return version number
                    var rvNum = ua.indexOf('rv:');
                    rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
                }

                return ((rv > -1) ? rv : undef);
            }());


            // disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179                  
            // left: 37, up: 38, right: 39, down: 40,
            // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
            var keys = [32, 37, 38, 39, 40], wheelIter = 0;

            function preventDefault(e) {
                e = e || window.event;
                if (e.preventDefault)
                e.preventDefault();
                e.returnValue = false;  
            }

            function keydown(e) {
                for (var i = keys.length; i--;) {
                    if (e.keyCode === keys[i]) {
                        preventDefault(e);
                        return;
                    }
                }
            }

            function touchmove(e) {
                preventDefault(e);
            }

            function wheel(e) {
                // for IE 
                //if( ie ) {
                    //preventDefault(e);
                //}
            }

            function disable_scroll() {
                $('#menutop').removeAttr("style");
                window.onmousewheel = document.onmousewheel = wheel;
                document.onkeydown = keydown;
                document.body.ontouchmove = touchmove;
            }

            function enable_scroll() {
                window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
            }

            var docElem = window.document.documentElement,
                scrollVal,
                isRevealed, 
                noscroll, 
                isAnimating,
                container = document.getElementById( 'container' ),
                trigger = container.querySelector( 'button.trigger' );

            function scrollY() {
                return window.pageYOffset || docElem.scrollTop;
            }
            
            function scrollPage() {
                scrollVal = scrollY();
                
                if( noscroll && !ie ) {
                    if( scrollVal < 0 ) return false;
                    // keep it that way
                    window.scrollTo( 0, 0 );
                }

                if( classie.has( container, 'notrans' ) ) {
                    classie.remove( container, 'notrans' );
                    return false;
                }

                if( isAnimating ) {
                    return false;
                }
                
                if( scrollVal <= 0 && isRevealed ) {
                    toggle(0);
                }
                else if( scrollVal > 0 && !isRevealed ){
                    toggle(1);
                }
            }

            function toggle( reveal ) {

                isAnimating = true;
                
                if( reveal ) {
                    classie.add( container, 'modify' );
                }
                else {
                    noscroll = true;
                    disable_scroll();
                    classie.remove( container, 'modify' );
                }

                // simulating the end of the transition:
                setTimeout( function() {
                    isRevealed = !isRevealed;
                    isAnimating = false;
                    if( reveal ) {
                        noscroll = false;
                        enable_scroll();
                        $('#menutop').css("background-color", "#999");
                        $('.trigger').display = "hidden";
                    }
                }, 1200 );
            }

            // refreshing the page...
            var pageScroll = scrollY();
            noscroll = pageScroll === 0;
            
            disable_scroll();
            
            if( pageScroll ) {
                isRevealed = true;
                classie.add( container, 'notrans' );
                classie.add( container, 'modify' );
            }else{
                //nothing
            }
            
            window.addEventListener( 'scroll', scrollPage );
            trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
        })();*/
    </script>
    <!--
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
    -->
</body>
</html>
