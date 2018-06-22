<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="icon" href="{{ asset('/img/Favicon-02.ico') }}">
	<title></title>
</head>
<body  style="background-color: #F5F7F8;">
	<header>
		@include('layouts.nav')
	</header>
	<section>
		@yield('contenido')
	</section>
	<footer  style="background-color: #435761; padding-bottom: 0px;">
		@include('layouts.footer')
	</footer>
	<script type="text/javascript" src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>