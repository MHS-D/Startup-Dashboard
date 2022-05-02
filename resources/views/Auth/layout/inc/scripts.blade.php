	<!--begin::Javascript-->
    <script>var hostUrl = "assets/";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src={{ asset("assets/plugins/global/plugins.bundle.js") }}></script>
    <script src={{ asset("assets/js/scripts.bundle.js") }}></script>
    <!--end::Global Javascript Bundle-->


    {{-- Animate --}}
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')}}" rel="stylesheet" type="text/css" />


    {{-- Custom Js --}}
    <script src={{ asset("assets/js/MHS/Core.js") }}></script>
    @if(request()->is('auth/*'));
        <script src={{ asset("assets/js/MHS/CoreAuth.js") }}></script>
    @endif

    <!--end::Javascript-->
