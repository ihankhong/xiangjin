@extends('app')

@section('content')
	<section>
		<div class="container-full">
			<a href="#"><img class="img-responsive center-block" src="{{ asset('images/page/banner/rddesign.png') }}" alt=""></a>
		</div>
	</section>
	@include('breadcrumb.breadcrumb')
	@include('rddesign.content')
@stop