<!DOCTYPE html>
<html lang="vi" class="no-js">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <link rel="stylesheet" href="{{url('frontend/css/vitaminc.css')}}" type="text/css"/>
    <title>{{$meta_title}}</title>
    <meta name="description" content="{{$meta_desc}}" />
    <meta name="keywords" content="{{$meta_keywords}}" />
    <!--[if lte IE 9]>
    <script src="{{url('frontend/js/html5.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{url('frontend/css/ie9.css')}}" type="text/css"/>
    <![endif]-->
    <script src="{{url('frontend/js/modernizr.js')}}" type="text/javascript"></script>
</head>
<body>

@include('frontend.header')

<!-- /endBanner -->
 @yield('content')
<!-- /endSection -->
@include('frontend.footer')
<!-- /endboxNews -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript" src="{{url('frontend/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{url('frontend/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.matchHeight-min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/scrollReveal.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/common.js')}}"></script>
</body>
</html>