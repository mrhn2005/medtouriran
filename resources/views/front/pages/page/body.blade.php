<section class="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						
						<!-- Blog Classic Start -->
						<div class="blog-grid">
							<div class="row">
								<div class="col-md-12">
									

									<!-- page Item Start -->
									<div class="post-item">
										<div class="image-holder">
											<img class="img-responsive" src="{{Voyager::image($page->image)}}" alt="{{$page->getTranslatedAttribute('title')}}" >
											
										</div>
										<div class="text">
											<h3><a href="blog-single-sidebar-no.html">{{ $page->getTranslatedAttribute('title') }}</a></h3>
											
											{!! $page->getTranslatedAttribute('body') !!}
											
										</div>
									</div>
									<!-- page Item End -->

								</div>

							</div>
						</div>

					</div>
					<div class="col-md-1"></div>

					


				</div>
			</div>
		</section>