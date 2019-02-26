@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('style')
<style>
	.thumb-container{
        position: relative;
        width: 100%;
        padding-top: 58%;
        background-color:#F1F1F1;
    }

    .image-container{
       overflow: hidden;
       position:  absolute;
       top: 0;
       left: 0;
       bottom: 0;
       right: 0;
    }
    
    /*.excerp-height{*/
    /*    min-height:120px;*/
    /*}*/
    /*.blog .text {*/
    /*    min-height: 250px;*/
    /*}*/
    /*.blog h3 {*/
    /*    min-height:50px;*/
    /*}*/
    .page-banner{
	    padding-top:320px;
    }
    
    .banner-text {
        margin-top:-130px;
    }
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

		
		<!-- Slider Start -->
		@include('front.home.includes.main-slider')
		<!-- Slider End -->


		<!-- Service Start -->
		@include('front.home.includes.service')
		<!-- Service End -->

		
		<!-- Department Start -->
		{!! $department !!}
		<!-- Department End -->



		<!-- Doctors Start -->
		@include('front.home.includes.doctors')
		<!-- Doctors End -->


		
		<!-- Quote Start -->
		@include('front.home.includes.quote')
		<!-- Quote End -->



		<!-- Pricing Start -->
		@include('front.home.includes.pricing')
		<!-- Pricing End -->



		<!-- Testimonial Start -->
		@include('front.home.includes.testimonial')
		<!-- Testimonial End -->




		<!-- News Start -->
		@include('front.home.includes.posts')
		<!-- News End -->

			

		<!-- Partner Start -->
		@include('front.home.includes.partners')
		<!-- Partner End -->


		<!-- Footer Social Start -->
			@include('front.common.footer')
		<!-- Footer Bottom End -->



		<a href="home-layout-1.html#" class="scrollup">
			<i class="fa fa-angle-up"></i>
		</a>

	</div>

@endsection

