<!-- Doctor Start -->
		<section class="doctor-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="doctor-single">
							<div class="thumb">
								<img src="{{Voyager::image($doctor->thumbnail('medium', 'avatar'))}}" alt="">
							</div>
							<div class="text">
								<h2>{{$doctor->getTranslatedAttribute('name')}}</h2>
								
								<h4>
								    @foreach($doctor->categories as $category)
								    <a href="{{route('doctor.category.show',[$category,$category->getTranslatedAttribute('slug')])}}">{{$category->getTranslatedAttribute('title')}}</a>
								        @if(!$loop->last)
								        ,
								        @endif
								    
								    @endforeach
								</h4>
							</div>
							<div class="social">
								<div class="title">
									Social Media Activities
								</div>
								<ul>
								    @foreach($doctor->networks as $network)
									    <li><a href="{{$network->tlink()}}"><i class="{{$network->icon}}"></i></a></li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						
						<!-- Doctor Detail Tab Start -->
						<div class="doctor-detail-tab">
							<ul class="nav nav-tabs">
								<li class="nav-item" ><a class="nav-link active" href="#tab1" data-toggle="tab" aria-expanded="true">About</a></li>
								<li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab" aria-expanded="false">Testimonial</a></li>
								<li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab" aria-expanded="false">Ask a Question</a></li>
								<li class="nav-item"><a class="nav-link" href="#tab4" data-toggle="tab" aria-expanded="false">Contact</a></li>
							</ul>
							
							<!-- Tab Content Start -->
							<div class="tab-content">
								<div class="tab-pane fade show active in" id="tab1" role="tabpanel">
									<div class="row">										
										<div class="col-md-12">
											<div class="content">
												{!! $doctor->getTranslatedAttribute('about') !!}

												
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="tab2" role="tabpanel">
									<div class="row">										
										<div class="col-md-12">
											<div class="content">
                                                {!! $doctor->getTranslatedAttribute('testimonal') !!}
											</div>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="tab3" role="tabpanel">
									<div class="row">
										<div class="col-md-12">
											<div class="content">
												<div class="ask-question">
													<h2>Ask a Question</h2>
													<p>Non nec senectus, nec vitae aenean urna vitae diam non, cras sed eget enim vitae lorem tellus. Nibh mollis enim consectetuer, magna sit.</p>
													<form action="doctors-detail.html#" class="form-horizontal" method="post">
														<div class="form-group">
							                                <div class="col-sm-12">
							                                    <input type="text" class="form-control" placeholder="Name" name="">
							                                </div>
							                            </div>
														<div class="form-group">
							                                <div class="col-sm-12">
							                                    <input type="email" class="form-control" placeholder="Email Address" name="">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-sm-12">
							                                    <input type="text" class="form-control" placeholder="Phone Number" name="">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-sm-12">
							                                    <input type="text" class="form-control" placeholder="Subject" name="">
							                                </div>
							                            </div>
							                            <div class="form-group">
							                                <div class="col-sm-12">
							                                    <textarea name="" class="form-control" cols="30" rows="10" placeholder="Question"></textarea>
							                                </div>
							                            </div>
							                            <div class="form-group">
										                    <div class="col-sm-12">
										                        <input type="submit" value="Send Message" class="btn btn-success">
										                    </div>
										                </div>
													</form>
												</div>									
											</div>
										</div>								
									</div>
								</div>

								<div class="tab-pane fade" id="tab4" role="tabpanel">
									<div class="row">
										<div class="col-md-12">
											<div class="content">									
											    <div class="row">
													<div class="col-md-6">
														<div class="contact">
															<div class="icon"><i class="fa fa-map-o"></i></div>
															<div class="text">
																<h4>Address</h4>
																<p>
																	{{ $doctor->getTranslatedAttribute('address') }}
																</p>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="contact">
															<div class="icon"><i class="fa fa-phone"></i></div>
															<div class="text">
																<h4>Phone</h4>
																<p>
																	{{ $doctor->phone }}
																</p>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="contact">
															<div class="icon"><i class="fa fa-envelope"></i></div>
															<div class="text">
																<h4>Email</h4>
																<p>
																    {{ $doctor->email }}
																</p>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="contact">
															<div class="icon"><i class="fa fa-globe"></i></div>
															<div class="text">
																<h4>Website</h4>
																<p>
																	{{ $doctor->website }}
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>									
								</div>

								<div class="tab-pane fade" id="tab5" role="tabpanel">
									<div class="row">
										<div class="col-md-7">
											<div class="content">
												<h2>Gynecology</h2>
												<p>
													One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.
												</p>
												<h3>Special Services:</h3>
												<div class="row">
													<div class="col-md-6">
														<ul>
															<li>24X7 Hours Emergency Service</li>
															<li>Qualified Doctors</li>
															<li>Trained Nurser</li>
														</ul>
													</div>
													<div class="col-md-6">
														<ul>
															<li>Emergency Ambulance</li>
															<li>Outdoor Checkup</li>
															<li>Affordable Billing</li>
														</ul>
													</div>
												</div>
												<p class="button">
													<a href="doctors-detail.html">See Details</a>
												</p>
											</div>
										</div>
										<div class="col-md-5">
											<div class="thumb">
												<img class="img-fullwidth" src="images/departments/w5.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Tab Content End -->
						</div>
						<!-- Doctor Detail Tab End -->

					</div>
				</div>
			</div>
		</section>
		<!-- Doctor End -->
		
		@if($doctor->images)
		<!-- Doctors Start -->
		<section class="doctor-v2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-normal">
							<h2>Photos</h2>
						</div>
					</div>
				</div>
				<div class="gap-small"></div>
				<div class="row">
					<div class="col-md-12">
						
						<div class="bxslider">
						  @foreach(json_decode($doctor->images) as $image)
						  <div><img src="{{Voyager::image($image)}}" title="{{ $doctor->getTranslatedAttribute('name') }}"></div>
						  @endforeach
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- Doctors End -->
		@endif