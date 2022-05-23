<!--begin::Head-->
<head>
    <base href="/">
    <title>{{ $page_title }}</title>
    <meta charset="utf-8" />
    <meta name="description" content="Startup"
    />
    <meta name="keywords" content="Laravel, Jquery, Bootstrap, Admin, Template, Theme, Responsive, StartupKit"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="MHS - D &amp; Laravel Admin Dashboard" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Startup | MHS-D" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href={{ asset("dashboard/media/logos/favicon.ico") }} />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href={{ asset("dashboard/plugins/custom/datatables/datatables.bundle.css") }} rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href={{ asset("dashboard/plugins/global/plugins.bundle.css") }} rel="stylesheet" type="text/css" />
    <link href={{ asset("dashboard/css/style.bundle.css") }} rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->


    {{-- Custom CSS --}}
    <link href="{{ asset('dashboard/css/MHS/loader.css')}}" rel="stylesheet" type="text/css" />

    {{-- Animate --}}
<link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')}}" rel="stylesheet" type="text/css" />
</head>
<!--end::Head-->
