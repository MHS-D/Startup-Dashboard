@extends('Auth.layout.master')

@section('content')

<!--begin::Authentication - Sign-up -->
        <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100" id="register-form">
                <!--begin::Heading-->
                <div class="mb-10 text-center">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Create an Account</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-400 fw-bold fs-4">Already have an account?
                        <a href="javascript:void(0);" id="redirect"
                         onclick=" return AnimateAndRedirect(route('login'))" class="link-primary fw-bolder">Sign in here</a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Heading-->

                <!--begin::Input group-->
                <div class="row fv-row mb-7">
                    <!--begin::Col-->
                        <label class="form-label fw-bolder text-dark fs-6">Full Name</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="name" id="name" autocomplete="off" />
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">Email</label>
                    <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" id="email" name="email" autocomplete="off" />
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6">Password</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control-solid" id="password" type="password" placeholder="" name="password" autocomplete="off" />
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
                <!--begin::Input group-->
                <div class="fv-row mb-5">
                    <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""  name="password_confirmation" id="password_confirmation" autocomplete="off" />
                </div>
                <!--end::Input group-->
                <div class="form-group">
                    <div class=" g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                      @if ($errors->has('g-recaptcha-response'))
                          <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                      @endif
                </div>
                <br>
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <label class="form-check form-check-custom form-check-solid form-check-inline">
                        <input class="form-check-input" id="terms" type="checkbox" name="terms" />
                        <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                            <a href="javascript:void(0);" onclick="return AnimateAndRedirect(route('register'))" class="ms-1 link-primary">Terms and conditions</a>.</span>
                    </label>
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                    <button type="submit" id="" class="btn btn-lg btn-primary">
                        <span class="indicator-label">Submit</span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
<!--end::Authentication - Sign-up-->



@endsection

