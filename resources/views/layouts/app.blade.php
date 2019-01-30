<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ config('app.name') }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="icon" type="image/png" href="{{ asset('admin/images/icons/favicon.ico') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css') }}">
</head>
<body style="background-color: #666666;">

    @yield('content')

	<script src="{{ asset('admin/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/animsition/js/animsition.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/select2/select2.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('admin/vendor/countdowntime/countdowntime.js') }}"></script>
	<script src="{{ asset('admin/js/main.js') }}"></script>

</body>
</html>
