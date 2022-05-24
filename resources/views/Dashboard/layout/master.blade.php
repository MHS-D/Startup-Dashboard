<!DOCTYPE html>
<html lang="en">

@include('dashboard.layout.inc.header')
@include('inc.loader')

    <!--begin::Body-->

    <body id="kt_body" style="background-image: url(dashboard/media/patterns/header-bg.jpg)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                    @include('Dashboard.layout.inc.navbar')

                    @include('Dashboard.layout.inc.toolbar')

                    <!--begin::Container-->
                    <div id="divForm" class="{{ config('settings.animation.main_animation') }} {{ config('settings.animation.animationInClass') }}">

                        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                            @yield('content')
                        </div>

                    </div>
                    <!--end::Container-->

                    @include('Dashboard.layout.inc.footer')
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->

    @include('Dashboard.layout.inc.chatbar')
    @include('Dashboard.layout.inc.scroltop')

@routes()
@include('Dashboard.layout.inc.scripts')
</body>
<!--end::Body-->
</html>
