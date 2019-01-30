<!DOCTYPE HTML>
<html>
<head>
    <title>Evergreen 50 ::: @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Evergreen 50 Plus is a group of women who have come together to socialize
    in their older age, and to be a strong support system for one another" />

    <link href="{{asset('evergreen/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />

    <link rel="icon" type="images/png" href="{{asset('evergreen/images/favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" type="images/png" href="{{asset('evergreen/images/favicon-16x16.png')}}" sizes="16x16" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!--webfonts-->
    {{--<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">--}}
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700|Playball' rel='stylesheet' type='text/css'>
    <!--//webfonts-->

    <!-- Custom Theme files -->
    <link href="{{asset('evergreen/css/style.css')}}" rel='stylesheet' type='text/css' />

    <!-- Scripts -->
    <script src="{{asset('evergreen/js/jquery.min.js')}}"> </script>
    <script src="{{asset('evergreen/js/bootstrap.min.js')}}"> </script>

    @yield('style')
</head>
<body>
<!--start-home-->
<div id="home" class="header">

    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('evergreen/images/logo.jpg')}}"  class="img-responsive" style="height:100px; width:300px" alt="logo"/></a>
            </div>
            <span class="menu"></span>
            <div class="top-menu">
                <ul class="cl-effect-16">
                    <li><a class="{{($active == 'index') ? 'active'  :''}}" href="{{url('/')}}" data-hover="HOME">Home</a></li>
                    <li><a class="{{($active == 'about') ? 'active'  :''}}" href="{{url('/about')}}" data-hover="About">About</a></li>
                    <li><a class="{{($active == 'gallery') ? 'active'  :''}}" href="{{url('/gallery')}}" data-hover="Gallery">Gallery</a></li>
                    <li><a class="{{($active == 'event') ? 'active'  :''}}" href="{{url('/event')}}" data-hover="Events">Events</a></li>
                    <li><a class="{{($active == 'contact') ? 'active'  :''}}" href="{{url('/contact')}}" data-hover="CONTACT">Contact</a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <!-- script for menu -->
            <script>
                $( "span.menu" ).click(function() {
                    $( ".top-menu" ).slideToggle( "slow", function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- script for menu -->
            <div class="clearfix"></div>
        </div>

@yield('content')

<!--footer-->
<div class="footer text-center">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-4 footer-text">
                <h3>About Us</h3>
                <p>A group of women who have come together to socialize in their older age, and to be a strong support system for one another, as well as impact the right moral values to the next generation.</p>

            </div>

            <div class="col-md-4 footer-info">
                <h3>Get In Touch</h3>
                <p>Want to know more about our events and outreach, subscribe to our newsletter.</p>
                <div class="support">
                    <form>
                        <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                        <input type="submit" value="SUBSCRIBE" disabled>
                    </form>
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>
        <div class="copy">
            <p>&copy; {{date('Y')}} All Rights Reserved. Powered by <a href="http://xplugng.com/">Xplug Technologies</a> </p>
        </div>
        <!--footer-->
    </div>
</div>

<!--start-smoth-scrolling-->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!--start-smoth-scrolling-->
<script type="text/javascript">
    $(document).ready(function() {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };


//        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
</div>

<script >
    $(function() {
        $('.timed').delay(9000).fadeOut(9000);
    });
</script>
@yield('script')
</body>
</html>