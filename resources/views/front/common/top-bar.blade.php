<div class="top-bar">
	<div class="container">
		<div class="row">
			
			
			<div class="col-md-7 top-contact">
				<div class="dropdown  language-selector">
					
				    	@foreach (config('app.locales') as $localeKey => $locale)
				            @if ($localeKey != app()->getLocale())
				                <a class="btn btn-light flag-link" href="{{ route('locale.switch', $localeKey) }}">
				                	<img class="flag" src="/images/flags/{{$locale}}.jpg" />
				                    {{ $locale }}
				                </a>
				            @endif
				        @endforeach
	
				</div>
				<div class="list list-info">
					<i class="fa fa-envelope"></i> <a href="mailto:info@yourdomain.com">{{setting('site.email')}}</a>
				</div>
				<div class="list">
					<i class="fa fa-phone"></i> <span class="phone"> {{setting('site.phone')}} </span>
				</div>
			</div>
			
			<div class="col-md-5 top-social">
				@include('front.common.social-networks')
			</div>
		</div>
	</div>
</div>