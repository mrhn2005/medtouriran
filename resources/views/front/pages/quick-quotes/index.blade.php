@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}} | {{ $page->getTranslatedAttribute('title') }}
@endsection


@section('style')
{!! $page->css !!}
<link rel="stylesheet" href="/css/quick-quotes.css?t={{time()}}" type="text/css" />
<style>

.header .profile-img {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    background-image: url({{Voyager::image($page->image)}});
    background-size: cover;
    background-position: center top;
}


.feedback-form {
     margin-top: 0px; 
}

.header .content h1 a{
	color:white;
}

</style>
@endsection

@section('content')	
<div class="columns-block">
	<div class="left-col-block blocks">
	    <header class="header">
	        <div class="content text-center">
	            <h1><a href="{{route('home')}}">{{ $page->getTranslatedAttribute('excerpt') }}</a></h1>
	
	            <p class="lead"></p>
	            <ul class="social-icon">
	                @foreach($socials as $social)
				        <li><a href="{{$social->getTranslatedAttribute('link')}}" target="_blank" aria-hidden="true"><i class="social-pad {{$social->icon}}"></i></a></li>
				    @endforeach
	            </ul>
	        </div>
	        <div class="profile-img"></div>
	    </header>
	    <!-- .header-->
	</div>
</div>
 <div class="right-col-block blocks">
	<section class="section-contact section-wrapper gray-bg">

 	<div class="container-fluid">
        <div class="row">
        	<div class="col-md-12">
			<div class="feedback-form">
		        <h2>{{__('home.touch')}}</h2>
				<form id="contactForm" action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
					    @csrf
										
							<div class="form-group">
                                    <input type="text" class="form-control" placeholder="{{__('home.first_name')}}" name="first_name" required>
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" placeholder="{{__('home.last_name')}}" name="last_name" required>
                            </div>
							<div class="form-group">
                                    <input type="email" class="form-control" placeholder="{{__('home.email')}}" name="email" required>
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Country Code" name="country_code" required >
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                            </div>
                            
							<div class="form-group">
                                    <textarea name="message" class="form-control" cols="30" rows="3" placeholder="{{__('home.message')}}"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">{{__('home.submit')}}</button>
						
				</form>

		    </div>
    	</div>
    	</div>
   	</div>
  </section>
 </div>

@endsection

