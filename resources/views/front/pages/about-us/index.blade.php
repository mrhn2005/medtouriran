@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('content')	
	<div class="page-wrapper">
		
		<!-- Top Bar Start -->
		@include('front.common.top-bar')
		<!-- Top Bar End -->

		<!-- Header Start -->
		@include('front.common.header')
		<!-- Header End -->


		

		<!-- About Start -->

		
		<section class="about-v2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-normal">
							<h2>About Organization</h2>
						</div>
					</div>
				</div>
				<div class="row padd-bottom">
					<div class="col-md-4 wow fadeInLeft">
						<img src="{{Voyager::image($page->image)}}" alt="{{ $page->getTranslatedAttribute('title') }}" class="img-fullwidth">
					</div>

					<div class="col-md-4 wow fadeInUp">
						<h2>Who We Are</h2>
						{!! $page->getTranslatedAttribute('body') !!}
						
					</div>
					<div class="col-md-4 wow fadeInRight">
                        @include('front.common.contact')
					</div>
				</div>
			</div>
		</section>
		<!-- About End -->
		
		<!-- aboutend -->

		<!-- Footer Social Start -->
			@include('front.common.footer')
		<!-- Footer Bottom End -->



		<a href="home-layout-1.html#" class="scrollup">
			<i class="fa fa-angle-up"></i>
		</a>

	</div>

@endsection

