
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin - {{config('app.name')}}</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="{{config('app.faker_locale')}}" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="{{config('app.name')}}" />
		<meta property="og:url" content="kihub.net" />
		<meta property="og:site_name" content="{{config('app.name')}}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{asset('admin/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				@auth()
				@include('admin.partials.header')
				@endauth
				<!--end::Header-->
				<!--begin::Wrapper-->
				@auth()
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					@include('admin.partials.sidebar-admin')
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						@yield('content')
					</div>
				</div>
				@endauth
				@yield('content')
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
		<!--end::Modals-->
        @include('sweetalert::alert')
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('admin/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('admin/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		@stack('script')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>