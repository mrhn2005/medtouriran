<div class="top-bar">
	<div class="container">
		<div class="row">
			
			
			<div class="col-md-7 top-contact">
				<div class="dropdown  language-selector">
					
				    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><img class="flag" src="/images/flags/{{config('app.locales')[app()->getLocale()]}}.jpg" /> {{ config('app.locales')[app()->getLocale()] }} <span class="caret"></span></button>
				    <ul class="dropdown-menu">
				    	@foreach (config('app.locales') as $localeKey => $locale)
				            @if ($localeKey != app()->getLocale())
				                <li><a class="dropdown-item flag-link" href="{{ route('locale.switch', $localeKey) }}">
				                	<img class="flag" src="/images/flags/{{$locale}}.jpg" />
				                    {{ $locale }}
				                </a></li>
				            @endif
				        @endforeach
	
				    </ul>
				</div>
				<div class="list list-info">
					<i class="fa fa-envelope"></i> <a href="mailto:info@yourdomain.com">{{setting('site.email')}}</a>
				</div>
				<div class="list">
					<i class="fa fa-phone"></i> {{setting('site.phone')}}
				</div>
			</div>
			
			<div class="col-md-5 top-social">
				@include('front.common.social-networks')
			</div>
		</div>
	</div>
</div>