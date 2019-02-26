<section class="department-v2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>Our Departments</h2>
							<p>We have All Major Departments to Serve Patients</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						
						<!-- Department Tab Start -->
						<div class="department-tab">
							<div class="row">
							<ul class="nav nav-tabs col-md-3 " role="tablist">
							    @foreach($categories->where('parent_id',null)->all() as $category)
								<li class="nav-item"><a href="#tab{{$category->id}}" class="nav-link {{$loop->first?'active':''}}" data-toggle="tab" ><span class="{{$category->icon}}"></span>{{$category->getTranslatedAttribute('title')}}</a></li>
								@endforeach
							</ul>
							
							<!-- Tab Content Start -->
							<div class="tab-content col-md-9">
							    @foreach($categories->where('parent_id',null)->all() as $category)
								<div class="tab-pane {{$loop->first?'active':''}} in" id="tab{{$category->id}}">
									<div class="row">										
										<div class="col-md-7">
											<div class="department-content">
												<h2>{{$category->getTranslatedAttribute('title')}}</h2>
												<p>
												    {{$category->getTranslatedAttribute('excerpt')}}
												</p>
												<h3>Special Services:</h3>
												<div class="row">
												    @foreach ($category->children->chunk(3) as $chunk)
													<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
														<ul>
														    @foreach ($chunk as $child)
														    <a href="{{route('category.show',[$child->id,$child->getTranslatedAttribute('slug')])}}">
																<li>{{$child->getTranslatedAttribute('title')}}</li>
															</a>
															@endforeach
														</ul>
													</div>
													@endforeach
												</div>
												<p class="button">
													<a href="{{route('category.show',[$category->id,$category->slug])}}">See Details</a>
												</p>											
											</div>
										</div>
										<div class="col-md-5">
											<div class="thumb">
												<img class="img-fullwidth" src="{{Voyager::image($category->thumbnail('medium'))}}" alt="">
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							</div>
							<!-- Tab Content End -->
						</div>
						<!-- Department Tab End -->


					</div>
				</div>
			</div>
		</section>