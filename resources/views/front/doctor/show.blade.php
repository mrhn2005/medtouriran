@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}} | {{ $doctor->getTranslatedAttribute('name') }}
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


<hr>
		
		
		<!-- Blog Start -->
            @include('front.doctor.includes.body')
		<!-- Blog End -->
        


		<!-- Footer Social Start -->
			@include('front.common.footer')
		<!-- Footer Bottom End -->



		<a href="home-layout-1.html#" class="scrollup">
			<i class="fa fa-angle-up"></i>
		</a>

	</div>

@endsection

@section('js')
<script>
	$(function(){
  $('.bxslider').bxSlider({
    mode: 'fade',
    captions: true,
    slideWidth: 800
  });
});
</script>
@endsection