@extends('admin.layouts.app')
@push('style')
<link href="{{asset('admin/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
	<!--begin::Page-->
	<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
		<!--begin::Header-->
		<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
			<!--begin::Header container-->
			<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
				<!--begin::Sidebar mobile toggle-->
				<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
					<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
						<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</div>
				</div>
				<!--end::Sidebar mobile toggle-->
				<!--begin::Mobile logo-->
				<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
					<a href="index.html" class="d-lg-none">
						<img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
					</a>
				</div>
				<!--end::Mobile logo-->
				<!--begin::Header wrapper-->
				<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
					<!--begin::Menu wrapper-->
					<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
						<!--begin::Menu-->
						<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
							<!--begin:Menu item-->
							
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Menu wrapper-->
					<!--begin::Navbar-->
					<div class="app-navbar flex-shrink-0">
						<!--begin::Search-->
						<div class="app-navbar-item align-items-stretch ms-1 ms-md-4">
							<!--begin::Search-->
							<div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
								<!--begin::Search toggle-->
								<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
									<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px">
										<i class="ki-duotone ki-magnifier fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Search toggle-->
								<!--begin::Menu-->
								<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
									<!--begin::Wrapper-->
									<div data-kt-search-element="wrapper">
										<!--begin::Form-->
										<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
											<!--begin::Icon-->
											<i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
											<!--end::Icon-->
											<!--begin::Input-->
											<input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
											<!--end::Input-->
											<!--begin::Spinner-->
											<span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
												<span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
											</span>
											<!--end::Spinner-->
											<!--begin::Reset-->
											<span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
												<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<!--end::Reset-->
											<!--begin::Toolbar-->
											<div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
												<!--begin::Preferences toggle-->
												<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
													<i class="ki-duotone ki-setting-2 fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Preferences toggle-->
												<!--begin::Advanced search toggle-->
												<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
													<i class="ki-duotone ki-down fs-2"></i>
												</div>
												<!--end::Advanced search toggle-->
											</div>
											<!--end::Toolbar-->
										</form>
										<!--end::Form-->
										<!--begin::Separator-->
										<div class="separator border-gray-200 mb-6"></div>
										<!--end::Separator-->
										<!--begin::Recently viewed-->
										<div data-kt-search-element="results" class="d-none">
											<!--begin::Items-->
											<div class="scroll-y mh-200px mh-lg-350px">
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-6.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Karina Clark</span>
														<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-2.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Olivia Bold</span>
														<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-9.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Ana Clark</span>
														<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-14.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Nick Pitola</span>
														<span class="fs-7 fw-semibold text-muted">Art Director</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-11.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Edward Kulnic</span>
														<span class="fs-7 fw-semibold text-muted">System Administrator</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Company Rbranding</span>
														<span class="fs-7 fw-semibold text-muted">UI Design</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Company Re-branding</span>
														<span class="fs-7 fw-semibold text-muted">Web Development</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Business Analytics App</span>
														<span class="fs-7 fw-semibold text-muted">Administration</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
														<span class="fs-7 fw-semibold text-muted">Marketing</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Tower Group Website</span>
														<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-notepad fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
														<span class="fs-7 fw-semibold text-muted">#45670</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-frame fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
														<span class="fs-7 fw-semibold text-muted">#45690</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-message-text-2 fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
														<span class="fs-7 fw-semibold text-muted">#21090</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-profile-circle fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
														<span class="fs-7 fw-semibold text-muted">#34560</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Recently viewed-->
										<!--begin::Recently viewed-->
										<div class="mb-5" data-kt-search-element="main">
											<!--begin::Heading-->
											<div class="d-flex flex-stack fw-semibold mb-4">
												<!--begin::Label-->
												<span class="text-muted fs-6 me-2">Recently Searched:</span>
												<!--end::Label-->
											</div>
											<!--end::Heading-->
											<!--begin::Items-->
											<div class="scroll-y mh-200px mh-lg-325px">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-laptop fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
														<span class="fs-7 text-muted fw-semibold">#45789</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart-simple fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
														<span class="fs-7 text-muted fw-semibold">#84050</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
														<span class="fs-7 text-muted fw-semibold">#84250</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
														<span class="fs-7 text-muted fw-semibold">#67945</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-sms fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
														<span class="fs-7 text-muted fw-semibold">#84250</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-bank fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
														<span class="fs-7 text-muted fw-semibold">#45690</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
														<span class="fs-7 text-muted fw-semibold">#24005</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Recently viewed-->
										<!--begin::Empty-->
										<div data-kt-search-element="empty" class="text-center d-none">
											<!--begin::Icon-->
											<div class="pt-10 pb-10">
												<i class="ki-duotone ki-search-list fs-4x opacity-50">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</div>
											<!--end::Icon-->
											<!--begin::Message-->
											<div class="pb-15 fw-semibold">
												<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
												<div class="text-muted fs-7">Please try again with a different query</div>
											</div>
											<!--end::Message-->
										</div>
										<!--end::Empty-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Preferences-->
									<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
										<!--begin::Heading-->
										<h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<!--begin::Radio group-->
											<div class="nav-group nav-group-fluid">
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="users" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="orders" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="projects" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Radio group-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<!--begin::Radio group-->
											<div class="nav-group nav-group-fluid">
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="attachment" value="any" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Radio group-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
												<option value="next">Within the next</option>
												<option value="last">Within the last</option>
												<option value="between">Between</option>
												<option value="on">On</option>
											</select>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-8">
											<!--begin::Col-->
											<div class="col-6">
												<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-6">
												<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
													<option value="days">Days</option>
													<option value="weeks">Weeks</option>
													<option value="months">Months</option>
													<option value="years">Years</option>
												</select>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
											<a href="utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Preferences-->
									<!--begin::Preferences-->
									<form data-kt-search-element="preferences" class="pt-1 d-none">
										<!--begin::Heading-->
										<h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="pb-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
												<input class="form-check-input" type="checkbox" value="1" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
												<input class="form-check-input" type="checkbox" value="1" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end pt-7">
											<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
											<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Preferences-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Search-->
						</div>
						<!--end::Search-->
						<!--begin::Activities-->
						<div class="app-navbar-item ms-1 ms-md-4">
							<!--begin::Drawer toggle-->
							<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" id="kt_activities_toggle">
								<i class="ki-duotone ki-messages fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
								</i>
							</div>
							<!--end::Drawer toggle-->
						</div>
						<!--end::Activities-->
						<!--begin::Notifications-->
						<div class="app-navbar-item ms-1 ms-md-4">
							<!--begin::Menu- wrapper-->
							<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
								<i class="ki-duotone ki-notification-status fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</div>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
								<!--begin::Heading-->
								<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
									<!--begin::Title-->
									<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications 
									<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
									<!--end::Title-->
									<!--begin::Tabs-->
									<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
										<li class="nav-item">
											<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
										</li>
									</ul>
									<!--end::Tabs-->
								</div>
								<!--end::Heading-->
								<!--begin::Tab content-->
								<div class="tab-content">
									<!--begin::Tab panel-->
									<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
										<!--begin::Items-->
										<div class="scroll-y mh-325px my-5 px-8">
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-primary">
															<i class="ki-duotone ki-abstract-28 fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
														<div class="text-gray-500 fs-7">Phase 1 development</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">1 hr</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-danger">
															<i class="ki-duotone ki-information fs-2 text-danger">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
														<div class="text-gray-500 fs-7">Confidential staff documents</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-warning">
															<i class="ki-duotone ki-briefcase fs-2 text-warning">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
														<div class="text-gray-500 fs-7">Corporeate staff profiles</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">5 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-success">
															<i class="ki-duotone ki-abstract-12 fs-2 text-success">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
														<div class="text-gray-500 fs-7">New frontend admin theme</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 days</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-primary">
															<i class="ki-duotone ki-colors-square fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
														<div class="text-gray-500 fs-7">Product launch status update</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">21 Jan</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-info">
															<i class="ki-duotone ki-picture fs-2 text-info"></i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
														<div class="text-gray-500 fs-7">Collection of banner images</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">21 Jan</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-warning">
															<i class="ki-duotone ki-color-swatch fs-2 text-warning">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
																<span class="path7"></span>
																<span class="path8"></span>
																<span class="path9"></span>
																<span class="path10"></span>
																<span class="path11"></span>
																<span class="path12"></span>
																<span class="path13"></span>
																<span class="path14"></span>
																<span class="path15"></span>
																<span class="path16"></span>
																<span class="path17"></span>
																<span class="path18"></span>
																<span class="path19"></span>
																<span class="path20"></span>
																<span class="path21"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
														<div class="text-gray-500 fs-7">Collection of SVG icons</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">20 March</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Items-->
										<!--begin::View more-->
										<div class="py-3 text-center border-top">
											<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All 
											<i class="ki-duotone ki-arrow-right fs-5">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></a>
										</div>
										<!--end::View more-->
									</div>
									<!--end::Tab panel-->
									<!--begin::Tab panel-->
									<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
										<!--begin::Wrapper-->
										<div class="d-flex flex-column px-9">
											<!--begin::Section-->
											<div class="pt-10 pb-0">
												<!--begin::Title-->
												<h3 class="text-gray-900 text-center fw-bold">Get Pro Access</h3>
												<!--end::Title-->
												<!--begin::Text-->
												<div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
												<!--end::Text-->
												<!--begin::Action-->
												<div class="text-center mt-5 mb-9">
													<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
												</div>
												<!--end::Action-->
											</div>
											<!--end::Section-->
											<!--begin::Illustration-->
											<div class="text-center px-4">
												<img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/1.png" />
											</div>
											<!--end::Illustration-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Tab panel-->
									<!--begin::Tab panel-->
									<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
										<!--begin::Items-->
										<div class="scroll-y mh-325px my-5 px-8">
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200 OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Just now</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200 OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">5 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 days</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200 OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">1 week</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200 OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Mar 5</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">May 15</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Apr 3</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Jun 30</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Jul 10</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Sep 10</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Dec 10</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Items-->
										<!--begin::View more-->
										<div class="py-3 text-center border-top">
											<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All 
											<i class="ki-duotone ki-arrow-right fs-5">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></a>
										</div>
										<!--end::View more-->
									</div>
									<!--end::Tab panel-->
								</div>
								<!--end::Tab content-->
							</div>
							<!--end::Menu-->
							<!--end::Menu wrapper-->
						</div>
						<!--end::Notifications-->
						<!--begin::Chat-->
						<div class="app-navbar-item ms-1 ms-md-4">
							<!--begin::Menu wrapper-->
							<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative" id="kt_drawer_chat_toggle">
								<i class="ki-duotone ki-message-text-2 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
								<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::Chat-->
						<!--begin::My apps links-->
						<div class="app-navbar-item ms-1 ms-md-4">
							<!--begin::Menu wrapper-->
							<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
								<i class="ki-duotone ki-element-11 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</div>
							<!--begin::My apps-->
							<div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header">
										<!--begin::Card title-->
										<div class="card-title">My Apps</div>
										<!--end::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar">
											<!--begin::Menu-->
											<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n3" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
												<i class="ki-duotone ki-setting-3 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>
											</button>
											<!--begin::Menu 3-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
												<!--begin::Heading-->
												<div class="menu-item px-3">
													<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
												</div>
												<!--end::Heading-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Create Invoice</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link flex-stack px-3">Create Payment 
													<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
														<i class="ki-duotone ki-information fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span></a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Generate Bill</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
													<a href="#" class="menu-link px-3">
														<span class="menu-title">Subscription</span>
														<span class="menu-arrow"></span>
													</a>
													<!--begin::Menu sub-->
													<div class="menu-sub menu-sub-dropdown w-175px py-4">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Plans</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Billing</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Statements</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator my-2"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content px-3">
																<!--begin::Switch-->
																<label class="form-check form-switch form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																	<!--end::Input-->
																	<!--end::Label-->
																	<span class="form-check-label text-muted fs-6">Recuring</span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu sub-->
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3 my-1">
													<a href="#" class="menu-link px-3">Settings</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu 3-->
											<!--end::Menu-->
										</div>
										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body py-5">
										<!--begin::Scroll-->
										<div class="mh-450px scroll-y me-n5 pe-5">
											<!--begin::Row-->
											<div class="row g-2">
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/amazon.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">AWS</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/angular-icon-1.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">AngularJS</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/atica.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Atica</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/beats-electronics.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Music</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/codeigniter.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Codeigniter</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/bootstrap-4.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Bootstrap</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/google-tag-manager.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">GTM</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/disqus.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Disqus</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Dribble</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/google-play-store.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Play Store</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/google-podcasts.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Podcasts</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/figma-1.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Figma</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/github.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Github</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/gitlab.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Gitlab</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Instagram</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="assets/media/svg/brand-logos/pinterest-p.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Pinterest</span>
													</a>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Scroll-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::My apps-->
							<!--end::Menu wrapper-->
						</div>
						<!--end::My apps links-->
						<!--begin::Theme mode-->
						<div class="app-navbar-item ms-1 ms-md-4">
							<!--begin::Menu toggle-->
							<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
								<i class="ki-duotone ki-night-day theme-light-show fs-1">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
									<span class="path6"></span>
									<span class="path7"></span>
									<span class="path8"></span>
									<span class="path9"></span>
									<span class="path10"></span>
								</i>
								<i class="ki-duotone ki-moon theme-dark-show fs-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</a>
							<!--begin::Menu toggle-->
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-0">
									<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
										<span class="menu-icon" data-kt-element="icon">
											<i class="ki-duotone ki-night-day fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
												<span class="path7"></span>
												<span class="path8"></span>
												<span class="path9"></span>
												<span class="path10"></span>
											</i>
										</span>
										<span class="menu-title">Light</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-0">
									<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
										<span class="menu-icon" data-kt-element="icon">
											<i class="ki-duotone ki-moon fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Dark</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-0">
									<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
										<span class="menu-icon" data-kt-element="icon">
											<i class="ki-duotone ki-screen fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</span>
										<span class="menu-title">System</span>
									</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Theme mode-->
						<!--begin::User menu-->
						<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
							<!--begin::Menu wrapper-->
							<div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
								<img src="assets/media/avatars/300-3.jpg" class="rounded-3" alt="user" />
							</div>
							<!--begin::User account menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<div class="menu-content d-flex align-items-center px-3">
										<!--begin::Avatar-->
										<div class="symbol symbol-50px me-5">
											<img alt="Logo" src="assets/media/avatars/300-3.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Username-->
										<div class="d-flex flex-column">
											<div class="fw-bold d-flex align-items-center fs-5">Robert Fox 
											<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
											<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">robert@kt.com</a>
										</div>
										<!--end::Username-->
									</div>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="account/overview.html" class="menu-link px-5">My Profile</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="apps/projects/list.html" class="menu-link px-5">
										<span class="menu-text">My Projects</span>
										<span class="menu-badge">
											<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
										</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
									<a href="#" class="menu-link px-5">
										<span class="menu-title">My Subscription</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/referrals.html" class="menu-link px-5">Referrals</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/billing.html" class="menu-link px-5">Billing</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/statements.html" class="menu-link px-5">Payments</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements 
											<span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
												<i class="ki-duotone ki-information-5 fs-5">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content px-3">
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
													<span class="form-check-label text-muted fs-7">Notifications</span>
												</label>
											</div>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="account/statements.html" class="menu-link px-5">My Statements</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
									<a href="#" class="menu-link px-5">
										<span class="menu-title position-relative">Mode 
										<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
											<i class="ki-duotone ki-night-day theme-light-show fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
												<span class="path7"></span>
												<span class="path8"></span>
												<span class="path9"></span>
												<span class="path10"></span>
											</i>
											<i class="ki-duotone ki-moon theme-dark-show fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span></span>
									</a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-night-day fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-moon fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
									<a href="#" class="menu-link px-5">
										<span class="menu-title position-relative">Language 
										<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English 
										<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/settings.html" class="menu-link d-flex px-5 active">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
											</span>English</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
											</span>Spanish</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
											</span>German</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
											</span>Japanese</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
											</span>French</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5 my-1">
									<a href="account/settings.html" class="menu-link px-5">Account Settings</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::User account menu-->
							<!--end::Menu wrapper-->
						</div>
						<!--end::User menu-->
						<!--begin::Header menu toggle-->
						<div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
							<div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
								<i class="ki-duotone ki-element-4 fs-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Header menu toggle-->
						<!--begin::Aside toggle-->
						<!--end::Header menu toggle-->
					</div>
					<!--end::Navbar-->
				</div>
				<!--end::Header wrapper-->
			</div>
			<!--end::Header container-->
		</div>
		<!--end::Header-->
		<!--begin::Wrapper-->
		<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            @include('admin.partials.sidebar-admin')
			<!--begin::Main-->
			<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
				<!--begin::Content wrapper-->
				<div class="d-flex flex-column flex-column-fluid">
					<!--begin::Toolbar-->
					<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
						<!--begin::Toolbar container-->
						<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
								<!--begin::Title-->
								<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Account Overview</h1>
								<!--end::Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
									<!--begin::Item-->
									<li class="breadcrumb-item text-muted">
										<a href="index.html" class="text-muted text-hover-primary">Home</a>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item">
										<span class="bullet bg-gray-500 w-5px h-2px"></span>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-muted">Account</li>
									<!--end::Item-->
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title-->
							<!--begin::Actions-->
							<div class="d-flex align-items-center gap-2 gap-lg-3">
								<!--begin::Filter menu-->
								<div class="m-0">
									<!--begin::Menu toggle-->
									<a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<i class="ki-duotone ki-filter fs-6 text-muted me-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>Filter</a>
									<!--end::Menu toggle-->
									<!--begin::Menu 1-->
									<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214c95399">
										<!--begin::Header-->
										<div class="px-7 py-5">
											<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
										</div>
										<!--end::Header-->
										<!--begin::Menu separator-->
										<div class="separator border-gray-200"></div>
										<!--end::Menu separator-->
										<!--begin::Form-->
										<div class="px-7 py-5">
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-semibold">Status:</label>
												<!--end::Label-->
												<!--begin::Input-->
												<div>
													<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214c95399" data-allow-clear="true">
														<option></option>
														<option value="1">Approved</option>
														<option value="2">Pending</option>
														<option value="2">In Process</option>
														<option value="2">Rejected</option>
													</select>
												</div>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-semibold">Member Type:</label>
												<!--end::Label-->
												<!--begin::Options-->
												<div class="d-flex">
													<!--begin::Options-->
													<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
														<input class="form-check-input" type="checkbox" value="1" />
														<span class="form-check-label">Author</span>
													</label>
													<!--end::Options-->
													<!--begin::Options-->
													<label class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="2" checked="checked" />
														<span class="form-check-label">Customer</span>
													</label>
													<!--end::Options-->
												</div>
												<!--end::Options-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-semibold">Notifications:</label>
												<!--end::Label-->
												<!--begin::Switch-->
												<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
													<label class="form-check-label">Enabled</label>
												</div>
												<!--end::Switch-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
												<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Form-->
									</div>
									<!--end::Menu 1-->
								</div>
								<!--end::Filter menu-->
								<!--begin::Secondary button-->
								<!--end::Secondary button-->
								<!--begin::Primary button-->
								<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
								<!--end::Primary button-->
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Toolbar container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Content-->
					<div id="kt_app_content" class="app-content flex-column-fluid">
						<!--begin::Content container-->
						<div id="kt_app_content_container" class="app-container container-xxl">
							<!--begin::Navbar-->
							<div class="card mb-5 mb-xl-10">
								<div class="card-body pt-9 pb-0">
									<!--begin::Details-->
									<div class="d-flex flex-wrap flex-sm-nowrap">
										<!--begin: Pic-->
										<div class="me-7 mb-4">
											<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
												<img src="assets/media/avatars/300-1.jpg" alt="image" />
												<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
											</div>
										</div>
										<!--end::Pic-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<!--begin::Title-->
											<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
												<!--begin::User-->
												<div class="d-flex flex-column">
													<!--begin::Name-->
													<div class="d-flex align-items-center mb-2">
														<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
														<a href="#">
															<i class="ki-duotone ki-verify fs-1 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</a>
													</div>
													<!--end::Name-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
														<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
														<i class="ki-duotone ki-profile-circle fs-4 me-1">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>Developer</a>
														<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
														<i class="ki-duotone ki-geolocation fs-4 me-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>SF, Bay Area</a>
														<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
														<i class="ki-duotone ki-sms fs-4">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>max@kt.com</a>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
												<!--begin::Actions-->
												<div class="d-flex my-4">
													<a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
														<i class="ki-duotone ki-check fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Follow</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</a>
													<a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
													<!--begin::Menu-->
													<div class="me-0">
														<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="ki-solid ki-dots-horizontal fs-2x"></i>
														</button>
														<!--begin::Menu 3-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
															<!--begin::Heading-->
															<div class="menu-item px-3">
																<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
															</div>
															<!--end::Heading-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Create Invoice</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link flex-stack px-3">Create Payment 
																<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																	<i class="ki-duotone ki-information fs-6">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span></a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Generate Bill</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">Subscription</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Plans</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Billing</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Statements</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu separator-->
																	<div class="separator my-2"></div>
																	<!--end::Menu separator-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3">
																			<!--begin::Switch-->
																			<label class="form-check form-switch form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																				<!--end::Input-->
																				<!--end::Label-->
																				<span class="form-check-label text-muted fs-6">Recuring</span>
																				<!--end::Label-->
																			</label>
																			<!--end::Switch-->
																		</div>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3 my-1">
																<a href="#" class="menu-link px-3">Settings</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 3-->
													</div>
													<!--end::Menu-->
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Title-->
											<!--begin::Stats-->
											<div class="d-flex flex-wrap flex-stack">
												<!--begin::Wrapper-->
												<div class="d-flex flex-column flex-grow-1 pe-8">
													<!--begin::Stats-->
													<div class="d-flex flex-wrap">
														<!--begin::Stat-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
																<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-semibold fs-6 text-gray-500">Earnings</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
														<!--begin::Stat-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
																<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="80">0</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-semibold fs-6 text-gray-500">Projects</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
														<!--begin::Stat-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
																<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-semibold fs-6 text-gray-500">Success Rate</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Progress-->
												<div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
													<div class="d-flex justify-content-between w-100 mt-auto mb-2">
														<span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
														<span class="fw-bold fs-6">50%</span>
													</div>
													<div class="h-5px mx-3 w-100 bg-light mb-3">
														<div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end::Progress-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Info-->
									</div>
									<!--end::Details-->
									<!--begin::Navs-->
									<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="account/overview.html">Overview</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/settings.html">Settings</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/security.html">Security</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/activity.html">Activity</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/billing.html">Billing</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/statements.html">Statements</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/referrals.html">Referrals</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/api-keys.html">API Keys</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/logs.html">Logs</a>
										</li>
										<!--end::Nav item-->
									</ul>
									<!--begin::Navs-->
								</div>
							</div>
							<!--end::Navbar-->
							<!--begin::details View-->
							<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
								<!--begin::Card header-->
								<div class="card-header cursor-pointer">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Profile Details</h3>
									</div>
									<!--end::Card title-->
									<!--begin::Action-->
									<a href="account/settings.html" class="btn btn-sm btn-primary align-self-center">Edit Profile</a>
									<!--end::Action-->
								</div>
								<!--begin::Card header-->
								<!--begin::Card body-->
								<div class="card-body p-9">
									<!--begin::Row-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Full Name</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800">Max Smith</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Company</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-semibold text-gray-800 fs-6">Keenthemes</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Contact Phone 
										<span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
											<i class="ki-duotone ki-information fs-7">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span></label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 d-flex align-items-center">
											<span class="fw-bold fs-6 text-gray-800 me-2">044 3276 454 935</span>
											<span class="badge badge-success">Verified</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Company Site</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">keenthemes.com</a>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Country 
										<span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
											<i class="ki-duotone ki-information fs-7">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span></label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800">Germany</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Communication</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800">Email, Phone</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Allow Changes</label>
										<!--begin::Label-->
										<!--begin::Label-->
										<div class="col-lg-8">
											<span class="fw-semibold fs-6 text-gray-800">Yes</span>
										</div>
										<!--begin::Label-->
									</div>
									<!--end::Input group-->
									<!--begin::Notice-->
									<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
										<!--begin::Icon-->
										<i class="ki-duotone ki-information fs-2tx text-warning me-4">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1">
											<!--begin::Content-->
											<div class="fw-semibold">
												<h4 class="text-gray-900 fw-bold">We need your attention!</h4>
												<div class="fs-6 text-gray-700">Your payment was declined. To start using tools, please 
												<a class="fw-bold" href="account/billing.html">Add Payment Method</a>.</div>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::details View-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-8 mb-xl-10">
									<!--begin::Chart widget 5-->
									<div class="card card-flush h-lg-100">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-gray-900">Top Selling Categories</span>
												<span class="text-gray-500 pt-2 fw-semibold fs-6">8k social visitors</span>
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
													<i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-5 ps-6">
											<div id="kt_charts_widget_5" class="min-h-auto"></div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Chart widget 5-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4 mb-5 mb-xl-10">
									<!--begin::Engage widget 1-->
									<div class="card h-md-100" dir="ltr">
										<!--begin::Body-->
										<div class="card-body d-flex flex-column flex-center">
											<!--begin::Heading-->
											<div class="mb-2">
												<!--begin::Title-->
												<h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried 
												<br />new 
												<span class="fw-bolder">Mobile Application ?</span></h1>
												<!--end::Title-->
												<!--begin::Illustration-->
												<div class="py-10 text-center">
													<img src="assets/media/svg/illustrations/easy/1.svg" class="theme-light-show w-200px" alt="" />
													<img src="assets/media/svg/illustrations/easy/1-dark.svg" class="theme-dark-show w-200px" alt="" />
												</div>
												<!--end::Illustration-->
											</div>
											<!--end::Heading-->
											<!--begin::Links-->
											<div class="text-center mb-1">
												<!--begin::Link-->
												<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">Try now</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a class="btn btn-sm btn-light" href="apps/invoices/view/invoice-1.html">Learn more</a>
												<!--end::Link-->
											</div>
											<!--end::Links-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Engage widget 1-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::List widget 5-->
									<div class="card card-flush h-xl-100">
										<!--begin::Header-->
										<div class="card-header pt-7">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-gray-900">Product Delivery</span>
												<span class="text-gray-500 mt-1 fw-semibold fs-6">1M Products Shipped so far</span>
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<a href="apps/ecommerce/sales/details.html" class="btn btn-sm btn-light">Order Details</a>
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Scroll-->
											<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/210.png" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																<i class="ki-duotone ki-dots-square fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mb-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-500 fw-bold">To: 
														<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Jason Bourne</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-success">Delivered</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/209.png" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																<i class="ki-duotone ki-dots-square fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mb-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-500 fw-bold">To: 
														<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Marie Durant</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-primary">Shipping</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/214.png" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																<i class="ki-duotone ki-dots-square fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mb-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-500 fw-bold">To: 
														<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Dan Wilson</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-danger">Confirmed</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/211.png" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																<i class="ki-duotone ki-dots-square fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mb-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-500 fw-bold">To: 
														<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Lebron Wayde</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-success">Delivered</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/215.png" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																<i class="ki-duotone ki-dots-square fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mb-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-500 fw-bold">To: 
														<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Ana Simmons</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-primary">Shipping</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/192.png" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																<i class="ki-duotone ki-dots-square fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mb-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-500 fw-bold">To: 
														<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Kevin Leonard</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-danger">Confirmed</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Scroll-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::List widget 5-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-8">
									<!--begin::Table Widget 5-->
									<div class="card card-flush h-xl-100">
										<!--begin::Card header-->
										<div class="card-header pt-7">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-gray-900">Stock Report</span>
												<span class="text-gray-500 mt-1 fw-semibold fs-6">Total 2,356 Items in the Stock</span>
											</h3>
											<!--end::Title-->
											<!--begin::Actions-->
											<div class="card-toolbar">
												<!--begin::Filters-->
												<div class="d-flex flex-stack flex-wrap gap-4">
													<!--begin::Destination-->
													<div class="d-flex align-items-center fw-bold">
														<!--begin::Label-->
														<div class="text-muted fs-7 me-2">Cateogry</div>
														<!--end::Label-->
														<!--begin::Select-->
														<select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
															<option></option>
															<option value="Show All" selected="selected">Show All</option>
															<option value="a">Category A</option>
															<option value="b">Category B</option>
														</select>
														<!--end::Select-->
													</div>
													<!--end::Destination-->
													<!--begin::Status-->
													<div class="d-flex align-items-center fw-bold">
														<!--begin::Label-->
														<div class="text-muted fs-7 me-2">Status</div>
														<!--end::Label-->
														<!--begin::Select-->
														<select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
															<option></option>
															<option value="Show All" selected="selected">Show All</option>
															<option value="In Stock">In Stock</option>
															<option value="Out of Stock">Out of Stock</option>
															<option value="Low Stock">Low Stock</option>
														</select>
														<!--end::Select-->
													</div>
													<!--end::Status-->
													<!--begin::Search-->
													<a href="apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View Stock</a>
													<!--end::Search-->
												</div>
												<!--begin::Filters-->
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
														<th class="min-w-150px">Item</th>
														<th class="text-end pe-3 min-w-100px">Product ID</th>
														<th class="text-end pe-3 min-w-150px">Date Added</th>
														<th class="text-end pe-3 min-w-100px">Price</th>
														<th class="text-end pe-3 min-w-100px">Status</th>
														<th class="text-end pe-0 min-w-75px">Qty</th>
													</tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody class="fw-bold text-gray-600">
													<tr>
														<!--begin::Item-->
														<td>
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Macbook Air M1</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#XGY-356</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">02 Apr, 2024</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,230</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="58">
															<span class="text-gray-900 fw-bold">58 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Surface Laptop 4</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#YHD-047</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">01 Apr, 2024</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="0">
															<span class="text-gray-900 fw-bold">0 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Logitech MX 250</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#SRR-678</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">24 Mar, 2024</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$64</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="290">
															<span class="text-gray-900 fw-bold">290 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">AudioEngine HD3</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#PXF-578</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">24 Mar, 2024</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="46">
															<span class="text-gray-900 fw-bold">46 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">HP Hyper LTR</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#PXF-778</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">16 Jan, 2024</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$4500</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="78">
															<span class="text-gray-900 fw-bold">78 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Dell 32 UltraSharp</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#XGY-356</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">22 Dec, 2024</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="8">
															<span class="text-gray-900 fw-bold">8 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Google Pixel 6 Pro</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#XVR-425</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">27 Dec, 2024</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="124">
															<span class="text-gray-900 fw-bold">124 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Table Widget 5-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Content container-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Content wrapper-->
				<!--begin::Footer-->
				<div id="kt_app_footer" class="app-footer">
					<!--begin::Footer container-->
					<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
						<!--begin::Copyright-->
						<div class="text-gray-900 order-2 order-md-1">
							<span class="text-muted fw-semibold me-1">2024&copy;</span>
							<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
						</div>
						<!--end::Copyright-->
						<!--begin::Menu-->
						<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
							<li class="menu-item">
								<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
							</li>
							<li class="menu-item">
								<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
							</li>
							<li class="menu-item">
								<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
							</li>
						</ul>
						<!--end::Menu-->
					</div>
					<!--end::Footer container-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end:::Main-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
		
@push('script')
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('admin/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('admin/js/custom/pages/user-profile/general.js')}}"></script>
<script src="{{asset('admin/js/widgets.bundle.js')}}"></script>
<script src="{{asset('admin/js/custom/widgets.js')}}"></script>
<script src="{{asset('admin/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/offer-a-deal/type.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/offer-a-deal/details.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/offer-a-deal/finance.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/offer-a-deal/complete.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/offer-a-deal/main.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/users-search.js')}}"></script>
<!--end::Custom Javascript-->
@endpush