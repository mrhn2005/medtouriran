@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}} | {{ $post->getTranslatedAttribute('title') }}
@endsection


@section('style')
<style>

</style>

@endsection

@section('content')	
	<div class="page-wrapper">
		
		<!-- Top Bar Start -->
		@include('front.common.top-bar')
		<!-- Top Bar End -->

		<!-- Header Start -->
		@include('front.common.header')
		<!-- Header End -->


		
		
		
		
			<!-- Banner Start -->
		<div class="page-banner" style="background:url({{isset($post->image)?Voyager::image($post->image):'/images/about.jpg'}}) no-repeat;background-size: cover;">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-text">
							<h1>{{ $post->getTranslatedAttribute('title') }}</h1>
							<!--<ul>-->
							<!--	<li><a href="home-layout-1.html">Home</a></li>-->
							<!--	<li><i class="fa fa-angle-right"></i></li>-->
							<!--	<li>Blog</li>-->
							<!--</ul>-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		
		<!-- Blog Start -->
		@include('front.blog.includes.body')
		<!-- Blog End -->


		<!-- Footer Social Start -->
			@include('front.common.footer')
		<!-- Footer Bottom End -->



		<a href="home-layout-1.html#" class="scrollup">
			<i class="fa fa-angle-up"></i>
		</a>

	</div>

@endsection

