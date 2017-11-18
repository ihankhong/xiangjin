@extends('app')

@section('content')
	@include('carousel')
	<section>
		<div class="container-full">
			<a href="#"><img class="img-responsive center-block" src="{{ asset('images/home/banner.png') }}" alt=""></a>
		</div>
	</section>
	<section class="index-block">
		<div class="container-full">
			<div class="row">
				<a href="#" class="col-xs-12 col-sm-4 pd">
					<div class="divTable">
	                    <div class="divTableCell">
	                        <h3>產品介紹</h3>
	                        <p>我們的產品包含車身外觀件，底盤模組，底盤結構件...</p>
	                        <span>瞭解更多</span>
	                    </div>
	                </div>
				</a>
				<a href="#" class="col-xs-12 col-sm-4 rd">
					<div class="divTable">
	                    <div class="divTableCell">
	                        <h3>研發設計</h3>
	                        <p>CAE電腦輔助分析，模具設計，檢、治具設計及製作...</p>
	                        <span>瞭解更多</span>
	                    </div>
	                </div>
				</a>
				<a href="#" class="col-xs-12 col-sm-4 er">
					<div class="divTable">
	                    <div class="divTableCell">
	                        <h3>參展經歷</h3>
	                        <p>本公司四十多年來一貫稟持「誠信、踏實、世界觀」...</p>
	                        <span>瞭解更多</span>
	                    </div>
	                </div>
				</a>
			</div>
		</div>
	</section>
@stop