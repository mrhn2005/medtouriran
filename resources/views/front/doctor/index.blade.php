@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection


@section('style')


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
		<section class="page-banner">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-text">
							<h1>Doctors</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner End -->
		
		<!-- Doctors Start -->
		<section class="doctor-v3">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<h2>Our Qualified Doctors</h2>
							<p>Meet with All Our Qualified Doctors</p>
							<div class="sep"></div>
						</div>
					</div>
				</div>
				<div class="row">
				    <div class="col-md-3">
						
						<!-- Sidebar Container Start -->
						<div class="sidebar">
							<div class="widget">
								<h4>Categories</h4>
								<ul>
								    @foreach($categories->where('parent_id','!=',null) as $category)
									<li><a href="{{route('doctor.category.show',[$category,$category->getTranslatedAttribute('slug')])}}">{{$category->getTranslatedAttribute('title')}} ({{$category->doctors_count}})</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<!-- Sidebar Container End -->
					
					</div>
					<div class="col-md-9">
						
						<!-- Doctor Container Start -->
						<div class="doctor-inner">
							<div class="row flex-row">
						    @foreach($doctors as $doctor)
							<div class="col-lg-4 col-md-6 item">
								<div class="inner">
									<div class="thumb">
										<img src="{{Voyager::image($doctor->thumbnail('medium', 'avatar'))}}" alt="{{$doctor->getTranslatedAttribute('name')}}">
										<div class="overlay"></div>
										<div class="social-icons">
											<ul>
											    @foreach($doctor->networks as $network)
												<li><a href="{{$network->tlink()}}"><i class="{{$network->icon}}"></i></a></li>
												@endforeach
											</ul>
										</div>
									</div>
									<div class="text">
										<h3><a href="{{route('doctor.show',[$doctor,$doctor->getTranslatedAttribute('slug')])}}">{{$doctor->getTranslatedAttribute('name')}}</a></h3>
										<h4>
										    @foreach($doctor->categories as $category)
										    <a href="{{route('doctor.category.show',[$category,$category->getTranslatedAttribute('slug')])}}">{{$category->getTranslatedAttribute('title')}}</a>
										        @if(!$loop->last)
										        ,
										        @endif
										    
										    @endforeach
										</h4>
										<p class="button">
											<a href="{{route('doctor.show',[$doctor,$doctor->getTranslatedAttribute('slug')])}}">See Full Profile</a>
										</p>
									</div>
								</div>
							</div>
                            @endforeach
                            </div>
						</div>
						<!-- Doctor Container End -->

					</div>
				</div>
			</div>
		</section>
		<!-- Doctors End -->


		<!-- Footer Social Start -->
			@include('front.common.footer')
		<!-- Footer Bottom End -->



		<a href="home-layout-1.html#" class="scrollup">
			<i class="fa fa-angle-up"></i>
		</a>

	</div>

@endsection

