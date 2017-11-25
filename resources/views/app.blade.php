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
                <div class="hidden-xs hidden-sm"><a href="{{ route('home') }}">首頁</a></div>
                <div class="form-inline hidden-xs hidden-sm">
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
                    <a class="btn btn-secondary dropdown-toggle hidden-xs hidden-sm" id="dropdownMenuLink" data-toggle="dropdown"><i class="fa fa-globe" aria-hidden="true"></i>Languages</a>
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
                    <div class="col-xs-12 col-md-4 col-lg-5">
                        <div class="row">
                            <a href="{{ route('home') }}" class="col-xs-10 col-md-12 logo">
                                <img class="img-responsive" src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" />
                            </a>
                            <div class="col-xs-2">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-8 col-lg-7">
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{ route('about') }}">關於翔勁</a></li>
                                        <li><a href="{{ route('news') }}">最新消息</a></li>
                                        <li><a href="{{ route('product') }}">產品介紹</a></li>
                                        <li><a href="{{ route('rddesign') }}">研發設計</a></li>
                                        <li><a href="{{ route('download') }}">電子型錄下載</a></li>
                                        <li><a href="{{ route('contact') }}">聯絡我們</a></li>
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
    {{-- content begin --}}
	@yield('content')
    {{-- content end --}}
    {{-- footer begin --}}
	<footer>
        <div class="container">
            <div class="col-xs-12">
                <div class="footer-contact text-center">
                    <div><span>翔勁金屬  模具開發的領先者    S.G. Carbide Die Co. , Ltd.</span></div>
                    <div><span>NO. 53-1, Lane 754, Sec.2, Chang-Ho Rd., Ho-Mei, Changhua 508, Taiwan</span></div>
                    <div>
                        <span class="telephone"><i class="fa fa-phone"></i> <a href="+88647360805">+886 ( 4 ) 7360805</a></span>
                        <span class="faxNumber"><i class="fa fa-fax"></i> +886 ( 4 ) 7350874</span>
                        <span class="email"><i class="fa fa-envelope-o"></i> <a href="mailto:sgcarbide@sgcarbide.com.tw">sgcarbide@sgcarbide.com.tw</a></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- footer end --}}
    {{-- script begin --}}
    @yield('script')
    {{-- script end --}}
</body>
</html>