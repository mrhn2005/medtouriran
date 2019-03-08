<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

	<!-- Meta Tags -->	
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="Healthcube - Medical & Health Responsive HTML Template">
	<meta name="keywords" content="medical, doctor, health">
	<meta name="author" content="YokoTheme">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Crisp -->
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="b9a5fe60-cb04-4598-872e-838b0e7a4a9a";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
	
	<!-- Title -->
	<title>
	    @yield('title')
	</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111472260-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-111472260-4');
    </script>
	<!-- Apple Touch Icons -->
	<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
	
	<!-- Favicon -->
	<link href="/images/favicon.png" rel="shortcut icon" type="/image/png">

	<!-- Stylesheets -->
	<!--<link rel="stylesheet" href="/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/slicknav.css">
	<link rel="stylesheet" href="/css/superfish.css">
	
	<link rel="stylesheet" href="/css/animate.css">
	
	<link rel="stylesheet" href="/css/jquery.bxslider.css">
	<link rel="stylesheet" href="/css/hover.css">
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<!--<link rel="stylesheet" href="/css/color-switcher.css">-->
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link rel="stylesheet" href="/css/toastr.min.css">
	<link rel="stylesheet" href="/css/custom.css?t={{time()}}"/>
	@if(!$is_rtl)
		<link rel="stylesheet" href="/css/ltr.css?t={{time()}}"/>
		
	@else
		<link rel="stylesheet" href="/css/bootstrap4rtl.css?t={{time()}}" />
		<!--<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">-->
		<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" type="text/css" />-->
		<link rel="stylesheet" href="/css/rtl.css?t={{time()}}"/>
	@endif
	
	
	<!--<script src="/js/modernizr.min.js"></script>-->
    
    @yield('style')

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="preloader">
		<div id="status" class="lds-heart"><div></div></div>
	</div>
	
	@yield('content')
	


	<!-- Scripts -->
	<script src="/js/jquery-2.2.4.min.js"></script>
	<!--<script src="/js/bootstrap.min.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="/js/jquery.slicknav.min.js"></script>	
	<script src="/js/hoverIntent.js"></script>
	<script src="/js/superfish.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/owl.animate.js"></script>
	<script src="/js/wow.min.js"></script>
	<script src="/js/jquery.bxslider.min.js"></script>
	<script src="/js/jquery.mixitup.min.js"></script>
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<!--<script src="/js/color-switcher.js"></script>-->
	<script src="/js/toastr.min.js"></script>
	@if($is_rtl)
	<script src="/js/custom-rtl.js"></script>
	@else
	<script src="/js/custom.js"></script>
	@endif
	
	<script>
		@if(Session::has('message'))

	    // TODO: change Controllers to use AlertsMessages trait... then remove this
	    var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
	    var alertMessage = {!! json_encode(Session::get('message')) !!};
	    var alerter = toastr[alertType];
			@if(Helper::isRtl())
				toastr.options.rtl = true;
			@endif
	    if (alerter) {
	        alerter(alertMessage);
	    } else {
	        toastr.error("toastr alert-type " + alertType + " is unknown");
	    }
	
	    @endif
	</script>
	
	@yield('js')
	
</body>
</html>