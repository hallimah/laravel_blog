<!DOCTYPE html>
<html lang="en">
<head>
<title>My Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('user/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('user/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/responsive.css')}}">



</head>
<body>
    <div>
		@include('pages.user.usernav')
		<br>
		@yield('main')
	</div>
	@yield('footer')

<script src="{{asset('user/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('user/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('user/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('user/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('user/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('user/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('user/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('user/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('user/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('user/plugins/easing/easing.js')}}"></script>
<script src="{{asset('user/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('user/js/custom.js')}}"></script>




</body>
</html>   