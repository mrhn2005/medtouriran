<section class="main-slider">
	<div class="slider">
		<ul class="bxslider">
			@foreach($banners as $banner)
			<li style="background-image:url({{Voyager::image($banner->image)}});">
				<div class="overlay"></div>
				<div class="content">
					<div class="inner {{$banner->text_pos()}}">
					    
						<h2 class="banner-direction">
						    
							{!! $banner->getTranslatedAttribute('title') !!}
						</h2>
						<h3>
							{{$banner->getTranslatedAttribute('subtitle')}}
						</h3>
						<p class="button">
							<a href="{{$banner->link}}" class="btn btn-flat">@lang('home.view_details')</a>
						</p>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
</section>