<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name') }}</title>
    <link href="{{ mix('css/vendor.css') }}" rel="stylesheet">
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	<script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
    <header id="navbar-top" class="navbar navbar-default navbar-fixed-top">
        {{-- topbar begin --}}
        <div class="topbar">
            <div class="container inline-group">
                <div><a href="{{ route('home') }}">首頁</a></div>
                <div class="form-inline">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            {!! Form::text('search', null, ['class' => 'form-control','placeholder' => '全站搜尋']) !!}
                            <span class="input-group-btn">
                                <button type="reset" class="btn btn-default">
                                    <span class="glyphicon glyphicon-remove">
                                        <span class="sr-only">Close</span>
                                    </span>
                                </button>
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search">
                                        <span class="sr-only">Search</span>
                                    </span>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="lang dropdown">
                    <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown"><i class="fa fa-globe" aria-hidden="true"></i>Languages</a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">繁體中文</a>
                        <a class="dropdown-item" href="#">簡體中文</a>
                        <a class="dropdown-item" href="#">English</a>
                        <a class="dropdown-item" href="#">日本語</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- topbar end --}}
        {{-- nav begin --}}
        <nav role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a href="{{ route('home') }}" class="logo">
                            <img class="img-responsive" src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" style="height: 80px;">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-7">
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="nav navbar-nav pull-right">
                                        <li><a data-toggle="tab" href="#home">關於翔勁</a></li>
                                        <li><a data-toggle="tab" href="#menu1">最新消息</a></li>
                                        <li><a data-toggle="tab" href="#menu2">產品介紹</a></li>
                                        <li><a data-toggle="tab" href="#menu2">研發設計</a></li>
                                        <li><a data-toggle="tab" href="#menu2">電子型錄下載</a></li>
                                        <li><a data-toggle="tab" href="#menu2">聯絡我們</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        {{-- nav end --}}
    </header>
	@yield('content')
	<footer class="navbar">
        <p class="text-center">Copyright © 金彩168 彩票网Reserved</p>
    </footer>
    @yield('script')
</body>
</html>


{{-- <nav class="nav navbar-default">
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
        </nav> --}}