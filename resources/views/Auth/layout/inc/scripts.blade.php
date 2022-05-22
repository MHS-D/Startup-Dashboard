	<!--begin::Javascript-->
    <script>var hostUrl = "startup/assets/";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src={{ asset("startup/assets/plugins/global/plugins.bundle.js") }}></script>
    <script src={{ asset("startup/assets/js/scripts.bundle.js") }}></script>
    <!--end::Global Javascript Bundle-->

    {{-- recaptcha --}}
    <script src="https://www.google.com/recaptcha/api.js"></script>



    {{-- Custom Js --}}
    <script src={{ asset("startup/assets/js/MHS/Core.js") }}></script>
    @if(request()->is('auth/*'));
        <script src={{ asset("startup/assets/js/MHS/CoreAuth.js") }}></script>
    @endif

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}');
            </script>
        @endforeach
    @endif

    <!--end::Javascript-->
