<section class="pricing-v1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>{{__('home.packages')}}</h2>
							<p>{{__('home.packages_sub')}}</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row flex-row">
					@foreach($packages as $package)
					<div class="col-md-4">
						<div class="pricing-item wow fadeInLeft thumbnail1">
							<div class="title">{{$package->getTranslatedAttribute('title')}}</div>
							<div class="subtitle">{{$package->getTranslatedAttribute('subtitle')}}</div>
							<div class="price">
								<div class="hexa">
									<div class="time">{{$package->getTranslatedAttribute('before_price')}}</div>
									<div class="amount"><span>$</span>{{$package->getTranslatedAttribute('price')}}</div>
									<div class="time">{{$package->getTranslatedAttribute('after_price')}}</div>
								</div>
							</div>
							<div class="offer flex-text">
								<ul>
									@foreach(explode(";",$package->getTranslatedAttribute('options')) as $option)
									<li>{{$option}}</li>
									@endforeach
								</ul>
							</div>
							<div class="button">
								<a href="{{route('package.show',[$package->id])}}">{{__('home.select')}}</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>