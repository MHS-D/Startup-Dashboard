<!DOCTYPE html>
<html lang="en">

@include('Auth.layout.inc.header')
@include('inc.loader')

<!--begin::Body-->

<body id="divForm" class="bg-dark {{ config('settings.animation.main_animation') }} {{ config('settings.animation.animationInClass') }}">
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
     style="background-image: url(dashboard/media/illustrations/sigma-1/14-dark.png">

        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">

            <!--begin::Logo-->
            <a href="#" class="mb-12">
                <img alt="Logo" src={{ asset("dashboard/media/logos/logo-2.svg") }} class="h-40px" />
            </a>
            <!--end::Logo-->

            <!--begin::Main-->
            <div class="d-flex flex-column flex-root">
                @yield('content')
            </div>
            <!--end::Main-->

            @include('Auth.layout.inc.footer')
        </div>
            <!--end::Content-->

    </div>

    @routes()
    @include('Auth.layout.inc.scripts')

</body>
<!--end::Body-->


</html>
