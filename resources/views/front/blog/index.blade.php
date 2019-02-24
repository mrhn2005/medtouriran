@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection


@section('style')
<style>
    .image-holder{
        position: relative;
        width: 100%;
        padding-top: 50%;
    }

    .image-container{
       overflow: hidden;
       position:  absolute;
       top: 0;
       left: 0;
       bottom: 0;
       right: 0;
    }
    
    .excerp-height{
        min-height:90px;
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


		
		
		<!-- Banner Start -->
		<section class="page-banner">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-text">
							<h1>Blog</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner End -->
		
		
		<!-- Blog Start -->
		<article class="blog">
			<div class="container">
				<div class="row">
				    @foreach($posts as $post)
					<div class="col-md-6">
						<div class="post-item">
							<div class="image-holder">
							    <div class="image-container">
							        <img class="img-responsive" src="{{Voyager::image($post->image)}}" alt="">
    								@include('front.blog.includes.date')
							    </div>
								
							</div>
							<div class="text-container">
							    <div class="text">
    								<h3>{{$post->getTranslatedAttribute('title')}}</h3>
    								<ul class="status">
    									<!--<li><a href="blog-grid-column-2.html"><i class="fa fa-comments"></i>14 Comments</a></li>-->
    									<li><a href="blog-grid-column-2.html"><i class="fa fa-user"></i>@lang('home.author'): {{$post->authorId->name}}</a></li>
    								</ul>
    								<p class="excerp-height">
    									{{$post->getTranslatedAttribute('excerpt')}}
    								</p>
    								<p class="button">
    									<a href="{{route('blog.show',[$post,$post->getTranslatedAttribute('slug')])}}">@lang('home.read_more')</a>
    								</p>
						    	</div>
							</div>
							
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</article>
		<!-- Blog End -->
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

