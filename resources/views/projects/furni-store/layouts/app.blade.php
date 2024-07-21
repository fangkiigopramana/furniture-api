<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Untree.co">
		<link rel="shortcut icon" href="favicon.png">

		<meta name="description" content="" />
		<meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{asset('furni-store/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{asset('furni-store/css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{asset('furni-store/css/style.css')}}" rel="stylesheet">
		@yield('style')
		<title>Furni Store</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		@include('projects.furni-store.partials.navbar')
		<!-- End Header/Navigation -->

		@yield('content')

		<!-- Start Footer Section -->
		@include('projects.furni-store.partials.footer')
		<!-- End Footer Section -->	


		@include('sweetalert::alert')
		<script src="{{asset('furni-store/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('furni-store/js/tiny-slider.js')}}"></script>
		<script src="{{asset('furni-store/js/custom.js')}}"></script>
		@stack('script')
	</body>

</html>