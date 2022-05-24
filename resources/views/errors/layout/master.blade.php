<!DOCTYPE html>
<html lang="en">

@include('Auth.layout.inc.header')
@include('inc.loader')

<!--begin::Body-->
<body id="kt_body" class="auth-bg">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root {{ config('settings.animation.main_animation') }} {{ config('settings.animation.animationInClass') }}" id="divForm">
        <!--begin::Authentication - Signup Verify Email -->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
                <!--begin::Logo-->
                <a href="#" class="mb-10 pt-lg-10">
                    <img alt="Logo" src="dashboard/media/logos/logo-1.svg" class="h-40px mb-5" />
                </a>
                <!--end::Logo-->

                @yield('content')

            </div>

            <!--end::Content-->
            @include('Auth.layout.inc.footer')

        </div>
        <!--end::Authentication - Signup Verify Email-->
    </div>
    <!--end::Root-->

    @routes()
    @include('Auth.layout.inc.scripts')
</body>
<!--end::Body-->

</html>
