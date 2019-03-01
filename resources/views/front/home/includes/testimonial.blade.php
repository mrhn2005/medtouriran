<section class="testimonial-v2">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>{{__('home.testimonial')}}</h2>
							<p>{{__('home.testimonial_sub')}}</p>
							<div class="sep sep-white"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						
						<!-- Testimonial Carousel Start -->
						<div class="testimonial-carousel-2 wow fadeInUp">
							@foreach($testimonials as $testimonial)
							<div class="item">
								<div class="testimonial-wrapper">								
									<div class="content">
										<div class="author">
											<div class="photo">
												<img src="{{Voyager::image($testimonial->thumbnail('small', 'avatar'))}}" alt="">
											</div>
											<div class="text">
												<h3>{{$testimonial->name}} </h3>
												<h4>{{$testimonial->position}}</h4>
											</div>
										</div>
										<div class="comment">
											<p>
												{{$testimonial->quote}}
											</p>
											<div class="icon"></div>
										</div>									
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<!-- Testimonial Carousel End -->

					</div>
				</div>
			</div>
		</section>