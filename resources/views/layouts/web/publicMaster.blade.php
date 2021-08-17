<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="UPST" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/pub/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/pub/style.css" type="text/css" />
	<link rel="stylesheet" href="/pub/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="/pub/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="/pub/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/pub/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/pub/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="/pub/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    @stack('style')

	<!-- Document Title
	============================================= -->
	<title>PEN Dinas Lingkungan Hidup Prov. DKI Jakarta</title>

</head>

<body class="stretched">
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('layouts.web.header')


		<!-- Content
		============================================= -->
        @yield('content')
		<!-- #content end -->

		<!-- Footer
		============================================= -->
        @include('layouts.web.footer')
		<!-- #footer end -->
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="/pub/js/jquery.js"></script>
	<script src="/pub/js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="/pub/js/functions.js"></script>

    @stack('script')

</body>
</html>
