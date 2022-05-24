    @extends('errors.layout.master')

    @section('content')

    <!--begin::Wrapper-->
    <div class="pt-lg-10 mb-10">
        <!--begin::Logo-->
        <h1 class="fw-bolder fs-2qx text-gray-800 mb-7">Verify Your Email</h1>
        <!--end::Logo-->
        <!--begin::Message-->
        <div class="fs-3 fw-bold text-muted mb-10">We have sent an email to
        <a href="#" class="link-primary fw-bolder">{{ auth()->user()->email ?? request('email') }}</a>
        <br />pelase follow a link to verify your email.</div>
        <!--end::Message-->
        <!--begin::Action-->
        <div class="text-center mb-10">
            <a href="javascript:void(0);" onclick="return AnimateAndRedirect(route('logout'))" class="btn btn-lg btn-primary fw-bolder">Return To Login</a>
        </div>
        <!--end::Action-->
        <!--begin::Action-->
        <div class="fs-5">
            <span class="fw-bold text-gray-700">Did’t receive an email?</span>
            <a href="javascript:void(0);" id="resend-verification-email" email="{{ auth()->user()->email ?? request('email') }}" class="link-primary fw-bolder">Resend</a>
        </div>
        <!--end::Action-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Illustration-->
    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(dashboard/media/illustrations/sigma-1/17.png"></div>
    <!--end::Illustration-->

    @endsection

