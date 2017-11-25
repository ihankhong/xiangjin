@extends('app')

@section('content')
	<section>
		<div class="container-full">
			<a href="#"><img class="img-responsive center-block" src="{{ asset('images/page/banner/download.png') }}" alt=""></a>
		</div>
	</section>
	@include('breadcrumb.breadcrumb')
	@include('download.content')
@stop