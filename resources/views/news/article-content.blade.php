<section class="tabpanel">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-2">
				<div class="sidebar">
					<h4 class="title">最新消息</h4>
					<ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
						<li class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><i class="fa fa-play" aria-hidden="true"></i>公司情報</a></li>
						<li class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><i class="fa fa-play" aria-hidden="true"></i>綜合活動</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-9 col-md-9 col-lg-10">
				<div class="tab-content">
					<div class="tab-pane active" id="tab1" role="tabpanel">
						<h2>公司情報</h2>
						<div class="news-wrap clearfix">
							@include('carousel.article-carousel')
							<div class="article clearfix">
								<h4>2017榮獲台灣精品獎之肯定</h4>
								<label class="text-right" for="date">2017.01.01</label>
								<div class="content">
									<p>東台(4526)今年首度參加9月6日 2017台灣國際3D列印展</p>
									<p>由經濟部指導、國貿局主辦、中華民國對外貿易發展協會執行的第26屆台灣精品獎結果出爐！東台精機「複合式車削中心VMT-200」、「智能化雷射鑽孔自動化設備TLC-2H22II」、「銑車複合加工中心機TD-1500Y」，以及亞太菁英「動柱棟樑式高速龍門加工中心機MC-18200」四項設備均符合「研發」、「設計」、「品質」、「行銷」等評選之標準，並具備性能優越、操作便利、製程與使用過程綠色環保、以及品質管理等特點獲得評審悄青睞，奪得2018台灣精品獎的殊榮。</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab2" role="tabpanel">
						<h2>綜合活動</h2>
						<div class="content">
							<p>綜合活動內容</p>
						</div>
					</div>
					<div class="btns text-right">
						<a class="back-btn" href="{{ route('news') }}"><img src="{{ asset('images/page/icon/back.png') }}" alt="返回列表">返回列表</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>