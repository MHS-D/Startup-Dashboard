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

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="0627ebd8-7331-4938-b458-33ca77cce9d7";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

    <!--end::Javascript-->
