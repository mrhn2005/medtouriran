@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}} | {{ $package->getTranslatedAttribute('title') }}
@endsection


@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/themes/classic/galleria.classic.min.css" />
       


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

		
		

		
		@if($package->images)
            @include('front.packages.includes.body')
		@endif
        
        

		<!-- Footer Social Start -->
			@include('front.common.footer')
		<!-- Footer Bottom End -->



		<a href="home-layout-1.html#" class="scrollup">
			<i class="fa fa-angle-up"></i>
		</a>

	</div>

@endsection


@section('js')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/themes/classic/galleria.classic.min.js"></script>
        <script>
            (function () {
                var height = $(window).height() - 120;
                Galleria.run('.galleria', {
                    wait: 5000,
                    height: height,
                    imageCrop: true,
                    imagePosition: '0 0'
                });

                Galleria.ready(function () {
                    var gallery = this;
                    this.addElement('fscr');
                    this.appendChild('stage', 'fscr');
                    var fscr = this.$('fscr')
                        .click(function () {
                            gallery.toggleFullscreen();
                        });
                    this.addIdleState(this.get('fscr'), { opacity: 0 });
                    // Re-add alt attributes to images
                    // https://stackoverflow.com/questions/25666589/how-do-i-add-alternative-text-in-galleria
                    this.bind('image', function (e) {
                        // add alt to big image
                        e.imageTarget.alt = e.galleriaData.original.alt;
                    });
                    this.bind('thumbnail', function (e) {
                        // add alt to thumbnails
                        e.thumbTarget.alt = e.galleriaData.original.alt;
                    });
                });

            }());
        </script>
@endsection
