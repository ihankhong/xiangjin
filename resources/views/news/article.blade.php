@extends('app')

@section('content')
	<section>
		<div class="container-full">
			<a href="#"><img class="img-responsive center-block" src="{{ asset('images/page/banner/new.png') }}" alt=""></a>
		</div>
	</section>
	@include('breadcrumb.breadcrumb')
	@include('news.article-content')
@stop