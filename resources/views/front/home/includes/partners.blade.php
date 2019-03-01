<section class="partner-v1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>{{__('home.partners')}}</h2>
							<p>{{__('home.partners_sub')}}</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
							
						<div class="partner-carousel">
						    @foreach($partners as $partner)
							<div class="item wow fadeInUp">
								<div class="inner">
									<a href="" target="_blank"><img style="width:140px;" src="{{Voyager::image($partner->image)}}" alt="{{$partner->title}}"></a>
								</div>
							</div>
							
							@endforeach
						</div>

					</div>
				</div>
			</div>
		</section>