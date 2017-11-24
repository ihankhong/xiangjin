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
								<label for="date">2017.01.01</label>
								<div class="content">
									<p></p>
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
				</div>
			</div>
		</div>
	</div>
</section>