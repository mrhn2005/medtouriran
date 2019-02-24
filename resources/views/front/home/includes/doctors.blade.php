<section class="doctor-v1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>Our Qualified Doctors</h2>
							<p>Meet with All Our Qualified Doctors</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						
						<!-- Doctor Carousel Start -->
						<div class="doctor-carousel">
							@foreach($doctors as $doctor)
							<div class="item wow fadeInUp">
								<div class="thumb">
									<img src="{{Voyager::image($doctor->thumbnail('medium', 'avatar'))}}" alt="{{$doctor->getTranslatedAttribute('name')}}">
									<div class="overlay"></div>
									<div class="social-icons">
										<ul>
											@foreach($doctor->networks as $network)
											<li><a href="{{$network->tlink()}}"><i class="{{$network->icon}}"></i></a></li>
											@endforeach
										</ul>
									</div>
								</div>
								<div class="text">
									<h3><a href="{{route('doctor.show',[$doctor,$doctor->getTranslatedAttribute('slug')])}}">{{$doctor->getTranslatedAttribute('name')}}</a></h3>
									<p>
									    @foreach($doctor->categories as $category)
									    	{{$category->getTranslatedAttribute('title')}}
									        @if(!$loop->last)
									        ,
									        @endif
									    
									    @endforeach
									</p>
								</div>
							</div>
							@endforeach
						</div>
						<!-- Doctor Carousel End -->

					</div>
				</div>
			</div>
		</section>