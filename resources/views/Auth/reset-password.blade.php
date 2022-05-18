@extends('Auth.layout.master')

@section('content')
    	<!--begin::Wrapper-->
        <div class="w-lg-550px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100" id="password-reset">
                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Setup New Password</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-400 fw-bold fs-4">Already have reset your password ?
                    <a href="javascript:void(0);" onclick="return AnimateAndRedirect(route('login'))" class="link-primary fw-bolder">Sign in here</a></div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6">Password</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control-solid" type="password" id="password" placeholder="" autocomplete="off" />
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <!--end::Input wrapper-->
                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Hint-->
                    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                    <!--end::Hint-->
                </div>
                <!--end::Input group=-->
                <!--begin::Input group=-->
                <div class="fv-row mb-10">
                    <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" id="password_confirmation" autocomplete="off" />
                </div>
                <!--end::Input group=-->
                <!--begin::Input group=-->
                <div class="fv-row mb-10">
                    <div class="form-check form-check-custom form-check-solid form-check-inline">
                        <input class="form-check-input" type="checkbox" id="terms" name="toc" value="1" />
                        <label class="form-check-label fw-bold text-gray-700 fs-6">I Agree &amp;
                        <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</label>
                    </div>
                </div>
                <input type="hidden" id="token" value="{{ $token }}">
                <!--end::Input group=-->
                <!--begin::Action-->
                <div class="text-center">
                    <button type="submit" id="kt_new_password_submit" class="btn btn-lg btn-primary fw-bolder">
                        <span class="indicator-label">Submit</span>
                    </button>
                </div>
                <!--end::Action-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
@endsection
