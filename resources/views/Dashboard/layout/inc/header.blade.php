<!--begin::Head-->
<head>
    <base href="/">
    @include('inc.meta')
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
