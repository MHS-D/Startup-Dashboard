@extends('Auth.layout.master')

@section('content')

<!--begin::Authentication - Sign-in -->
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100" id="login-form">
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Sign In to Metronic</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-400 fw-bold fs-4">New Here?
                        <a href="javascript:void(0);" class="link-primary fw-bolder"
                         onclick="return AnimateAndRedirect(route('register'))">Create an Account</a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control form-control-lg form-control-solid" id="email" type="email" name="email" autocomplete="off" />
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-2">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                        <!--end::Label-->
                        <!--begin::Link-->
                        <a href="javascript:void(0);" onclick="return AnimateAndRedirect(route('forgetPassword'))" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Input-->
                    <input class="form-control form-control-lg form-control-solid" id="password" type="password" name="password" autocomplete="off" />
                    <!--end::Input-->
                </div>
                <!--begin::Actions-->
                <div class="text-center">
                    <!--begin::Submit button-->
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">Sign In</span>
                    </button>
                    <!--end::Submit button-->
                </div>
                <!--end::Actions-->

            </form>
            <!--end::Form-->
        </div>
<!--end::Authentication - Sign-in-->
<script>



</script>

@endsection
