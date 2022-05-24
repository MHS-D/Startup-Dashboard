	<!--begin::Javascript-->
    <script>var hostUrl = "dashboard/";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src={{ asset("dashboard/plugins/global/plugins.bundle.js") }}></script>
    <script src={{ asset("dashboard/js/scripts.bundle.js") }}></script>
    <!--end::Global Javascript Bundle-->

    {{-- recaptcha --}}
    <script src="https://www.google.com/recaptcha/api.js"></script>



    {{-- Custom Js --}}
    <script src={{ asset("dashboard/js/MHS/Core.js") }}></script>
    <script src={{ asset("dashboard/js/MHS/CoreAuth.js") }}></script>

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}');
            </script>
        @endforeach
    @endif

    <!--end::Javascript-->
