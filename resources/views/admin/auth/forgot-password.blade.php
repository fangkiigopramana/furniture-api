@extends('admin.layouts.app')
@section('content')
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <a href="index.html" class="d-block d-lg-none mx-auto py-20">
            <img alt="Logo" src="assets/media/logos/default.svg" class="theme-light-show h-25px" />
            <img alt="Logo" src="assets/media/logos/default-dark.svg" class="theme-dark-show h-25px" />
        </a>
        <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
            <div class="d-flex flex-column-fluid flex-column w-100 mw-450px">
                <div class="d-flex flex-stack py-2">
                    <div class="me-2">
                        <a href="authentication/layouts/fancy/sign-in.html" class="btn btn-icon bg-light rounded-circle">
                            <i class="ki-duotone ki-black-left fs-2 text-gray-800"></i>
                        </a>
                    </div>
                    <div class="m-0">
                        <span class="text-gray-500 fw-bold fs-5 me-2" data-kt-translate="password-reset-head-desc">Already a member ?</span>
                        <a href="authentication/layouts/fancy/sign-in.html" class="link-primary fw-bold fs-5" data-kt-translate="password-reset-head-link">Sign In</a>
                    </div>
                </div>
                <div class="py-10">
                    <form class="form w-100" action="{{route('password.email')}}" method="post">
                        @csrf
                        <div class="text-start mb-10">
                            <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="password-reset-title">Forgot Password ?</h1>
                            <div class="text-gray-500 fw-semibold fs-6" data-kt-translate="password-reset-desc">Enter your email to reset your password.</div>
                        </div>
                        <div class="fv-row mb-10">
                            <input class="form-control form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="password-reset-input-email" />
                        </div>
                        <div class="d-flex flex-stack">
                            <div class="m-0">
                                <button type="submit" id="kt_password_reset_submit" class="btn btn-primary me-2" data-kt-translate="password-reset-submit">
                                    <span class="indicator-label">Submit</span>
                                </button>
                                <a href="#" class="btn btn-lg btn-light-primary fw-bold" data-kt-translate="password-reset-cancel">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url({{asset('admin/media/auth/bg11.png')}})"></div>
    </div>
</div>
@endsection