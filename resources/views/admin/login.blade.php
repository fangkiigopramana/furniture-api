@extends('admin.layouts.app')

@section('content')	
<div class="d-flex flex-column flex-root" id="kt_app_root">
	<div class="d-flex flex-column flex-lg-row flex-column-fluid">
		<a href="index.html" class="d-block d-lg-none mx-auto py-20">
			<img alt="Logo" src="{{asset('admin/media/logos/default.svg')}}" class="theme-light-show h-25px" />
			<img alt="Logo" src="{{asset('admin/media/logos/default-dark.svg')}}" class="theme-dark-show h-25px" />
		</a>
		<div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
			<div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
				<div class="py-20">
					<form class="form w-100" method="POST" action="{{route('auth')}}">
						@csrf
						<div class="card-body">
							<div class="text-start mb-10">
								<h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="sign-in-title">Sign In</h1>
								<div class="text-gray-500 fw-semibold fs-6" data-kt-translate="general-desc">Masuk akses admin kihub website</div>
							</div>
							<div class="fv-row mb-8">
								<input type="email" placeholder="Leboke Email..." name="email" autocomplete="off" data-kt-translate="sign-in-input-email" class="form-control form-control-solid" />
							</div>
							<div class="fv-row mb-7">
								<input type="password" placeholder="Leboke Password..." name="password" autocomplete="off" data-kt-translate="sign-in-input-password" class="form-control form-control-solid" />
							</div>
							<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
								<div></div>
								<a href="#" class="link-primary" data-kt-translate="sign-in-forgot-password">Forgot Password ?</a>
							</div>
							<div class="d-flex flex-stack">
								<button class="btn btn-primary me-2 flex-shrink-0">
									<span class="indicator-label">Sign In</span>
								</button>
								<div class="d-flex align-items-center">
									<div class="text-gray-500 fw-semibold fs-6 me-3 me-md-6" data-kt-translate="general-or">Or</div>
									<a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
										<img alt="Logo" src="{{asset('admin/media/svg/brand-logos/google-icon.svg')}}" class="p-4" />
									</a>
								</div>
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

@push('script')
<script src="{{asset('admin/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('admin/js/scripts.bundle.js')}}"></script>
<script src="{{asset('admin/js/custom/authentication/sign-in/general.js')}}"></script>
<script src="{{asset('admin/js/custom/authentication/sign-in/i18n.js')}}"></script>
@endpush