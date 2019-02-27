@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('style')

<link rel="stylesheet" href="/css/bootstrap.min.css">

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
		<hr>
		
		
		{!!  $page->getTranslatedAttribute('body') !!}
						
					
		
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

@section('js')

<script src="/js/bootstrap.min.js"></script>
@endsection