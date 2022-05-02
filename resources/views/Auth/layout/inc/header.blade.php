	<!--begin::Head-->
	<head><base href="../../../">
		<title>{{ $page_title }}</title>
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<meta name="description" content="MHS-D Startup" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="MHS-D" />
		<link rel="canonical" href="" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico')}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href={{ asset("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700") }} />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

        {{-- Custom CSS --}}
        <link href="{{ asset('assets/css/MHS/loader.css')}}" rel="stylesheet" type="text/css" />


	</head>
	<!--end::Head-->
