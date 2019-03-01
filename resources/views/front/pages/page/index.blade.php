@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}} | {{ $page->getTranslatedAttribute('title') }}
@endsection


@section('style')
{!! $page->css !!}

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
            @include('front.pages.page.body')
		<!-- Blog End -->


		<!-- Footer Social Start -->
			@include('front.common.footer')
		<!-- Footer Bottom End -->



		<a href="home-layout-1.html#" class="scrollup">
			<i class="fa fa-angle-up"></i>
		</a>

	</div>

@endsection

