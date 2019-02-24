<section class="pricing-v1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>Pricing</h2>
							<p>We are Offering Special Discounts Now</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($packages as $package)
					<div class="col-md-4">
						<div class="pricing-item wow fadeInLeft">
							<div class="title">{{$package->getTranslatedAttribute('title')}}</div>
							<div class="subtitle">{{$package->getTranslatedAttribute('subtitle')}}</div>
							<div class="price">
								<div class="hexa">
									<div class="time">{{$package->getTranslatedAttribute('before_price')}}</div>
									<div class="amount"><span>$</span>{{$package->getTranslatedAttribute('price')}}</div>
									<div class="time">{{$package->getTranslatedAttribute('after_price')}}</div>
								</div>
							</div>
							<div class="offer">
								<ul>
									<li>6 Specialties</li>
									<li>30 Tests and Treatments</li>
									<li>1 Medical Consultation</li>
									<li>1 Home Visit</li>
									<li>No Pregnancy Care</li>
									<li>No Assistance</li>
								</ul>
							</div>
							<div class="button">
								<a href="#">Select</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>