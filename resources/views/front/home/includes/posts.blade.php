<section class="news-v1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading wow fadeInUp">
							<h2>Latest News</h2>
							<p>See All Our Updated and Latest News</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						
						<!-- News Carousel Start -->
						<div class="news-carousel flex-row">
                            @foreach($posts as $post)
							<div class="item wow fadeInUp blog thumbnail1">
								<div class="thumb thumb-container">
								    <div class="image-container">
    									<img src="{{Voyager::image($post->thumbnail('medium'))}}" alt="{{$post->slug}}">
    									<div class="date">
    										<div class="day">25</div>
    										<div class="month">Sep</div>
    									</div>
									</div>
								</div>
								<div class="text">
									<h3><a href="{{route('blog.show',[$post->id,$post->getTranslatedAttribute('slug')])}}">{{$post->getTranslatedAttribute('title')}}</a></h3>
									<!--<h4><i class="fa fa-comments-o" aria-hidden="true"></i> 24 Comments</h4>-->
									<p class="excerp-height">
										{{$post->getTranslatedAttribute('excerpt')}}
									</p>
									<p class="button">
    									<a href="{{route('blog.show',[$post->id,$post->slug])}}">Read More</a>
    								</p>
								</div>
							</div>
                            @endforeach
						</div>
						<!-- News Carousel End -->

					</div>
				</div>
			</div>
		</section>