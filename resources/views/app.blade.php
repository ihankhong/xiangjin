<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name') }}</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
	<nav class="nav navbar-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-5">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a href="{{ route('home') }}">
                        <img class="img-responsive" src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-7">
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="nav navbar-nav">
                                    <li><a data-toggle="tab" href="#home">Home</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Page 1</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Page 2</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</a></li>
                                    <li><a href="#">Log out</a></li>
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
	@yield('content')
	<footer class="navbar">
        <p class="text-center">Copyright © 金彩168 彩票网Reserved</p>
    </footer>
    @yield('script')
</body>
</html>