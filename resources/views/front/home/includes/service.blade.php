<section class="service-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading wow fadeInUp">
					<h2>@lang('home.services')</h2>
					<p>We Are Here to Provide You Awesome Service Always</p>
					<div class="sep"></div>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($benefits as $benefit)
			<div class="col-sm-6 col-md-4 col-lg-4">
				<div class="item wow fadeInLeft">
					<div class="icon">
						<span class="{{$benefit->icon}}"></span>
					</div>
					<div class="text">
						<div class="inner">
							<h3>{{$benefit->getTranslatedAttribute('title')}}</h3>
							<p>{{$benefit->getTranslatedAttribute('body')}}</p>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>