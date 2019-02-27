<section class="blog">
			<div class="container">
				<div class="row">
					<!--<div class="col-md-1"></div>-->
					<div class="col-md-12">
						
						<!-- Blog Classic Start -->
						<div class="blog-grid">
							<div class="row">
								<div class="col-md-12">
									

									<!-- category Item Start -->
									<div class="post-item">
										<!--<div class="image-holder">-->
										<!--	<img class="img-responsive" src="" alt="" >-->
											
										<!--</div>-->
										<div class="text">
											<h3><a href="blog-single-sidebar-no.html">{{ $category->getTranslatedAttribute('title') }}</a></h3>
											
											{!! $category->getTranslatedAttribute('body') !!}
											
										</div>
									</div>
									<!-- category Item End -->

								</div>

							</div>
						</div>

					</div>
					<!--<div class="col-md-1"></div>-->

					


				</div>
			</div>
		</section>