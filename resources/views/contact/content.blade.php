<section class="contactpanel">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>聯絡我們</h2>
				<div class="row">
					{!! Form::open(['class' => 'clearfix']) !!}
					<div class="col-xs-12 col-sm-6">
						<div class="form-group">
							{!! Form::label('title', '詢問主指', ['class' => 'control-label']) !!}
							{!! Form::text('title', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('content', '詢問內容', ['class' => 'control-label']) !!}
							{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="form-group">
							{!! Form::label('real_name', '姓名', ['class' => 'control-label']) !!}
							{!! Form::text('real_name', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('company', '公司名稱', ['class' => 'control-label']) !!}
							{!! Form::text('company', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('email', '電子信箱', ['class' => 'control-label']) !!}
							{!! Form::email('email', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('telephone', '聯絡電話', ['class' => 'control-label']) !!}
							{!! Form::text('telephone', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('fax', '傳真', ['class' => 'control-label']) !!}
							{!! Form::text('fax', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('url', '網站', ['class' => 'control-label']) !!}
							{!! Form::text('url', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('country', '國別', ['class' => 'control-label']) !!}
							{!! Form::text('country', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('address', '聯絡地址', ['class' => 'control-label']) !!}
							{!! Form::text('address', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('captcha', '驗證碼', ['class' => 'control-label']) !!}
							{!! Form::text('captcha', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="col-xs-12">
						<div class="btns text-center">
							<button type="reset" class="btn btn-primary">重設</button>
							<button type="submit" class="btn btn-primary">送出</button>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</section>