@extends('admin.layouts.app')
@section('content')

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('admin/media/patterns/vector-1.png')">
                        <div class="card-header pt-5">
                            <div class="card-title d-flex flex-column">
                                <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                                <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <div class="card-header pt-5">
                            <div class="card-title d-flex flex-column">
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">357</span>
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Professionals</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end pe-0">
                            <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                            <div class="symbol-group symbol-hover flex-nowrap">
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                    <img alt="Pic" src="admin/media/avatars/300-11.jpg" />
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                    <img alt="Pic" src="admin/media/avatars/300-2.jpg" />
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                    <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                    <img alt="Pic" src="admin/media/avatars/300-12.jpg" />
                                </div>
                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                    <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <div class="card-header pt-5">
                            <div class="card-title d-flex flex-column">
                                <div class="d-flex align-items-center">
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{$user->experiences->count()}}</span>
                                </div>
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Experiences</span>
                            </div>
                        </div>
                        <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                            <div class="d-flex flex-center me-5 pt-2">
                                <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
                            </div>
                            <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                @foreach ($experiences as $item )                                                    
                                <div class="d-flex fw-semibold align-items-center">
                                    <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                    <div class="text-gray-500 flex-grow-1 me-4">{{$item['company_name']}}</div>
                                    <div class="fw-bolder text-gray-700 text-xxl-end">{{$item['count']}}</div>
                                </div>
                                @endforeach

                                
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush h-lg-50">
                        <div class="card-header pt-5">
                            <div class="d-flex align-items-center">
                                <h3 class="card-title text-gray-800 fw-bold">Social Media List</h3>
                                <span class="badge badge-light-success fs-base">{{$user->socialMedias->count()}}</span>
                            </div>
                            <div class="card-toolbar">
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <div class="separator mb-3 opacity-75"></div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <div class="separator mt-3 opacity-75"></div>
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            @foreach ($user->socialMedias as $sosmed )                                                
                            <div class="d-flex flex-stack">
                                <a href="{{$sosmed->link}}" class="text-primary fw-semibold fs-6 me-2">{{$sosmed->name}}</a>
                                <a href="{{$sosmed->link}}" target="blank" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                    <i class="ki-duotone ki-exit-right-corner fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                            <div class="separator separator-dashed my-3"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6">
                    <div class="card card-flush h-md-100">
                        <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('admin/media/stock/900x600/42.png')">
                            <div class="mb-10">
                                <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                <span class="me-2">Try our all new Enviroment with 
                                <br />
                                <span class="position-relative d-inline-block text-danger">
                                    <a href="pages/user-profile/overview.html" class="text-danger opacity-75-hover">Pro Plan</a>
                                    <span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                </span></span>for Free</div>
                                <div class="text-center">
                                    <a href='#' class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
                                </div>
                            </div>
                            <img class="mx-auto h-150px h-lg-200px theme-light-show" src="admin/media/illustrations/misc/upgrade.svg" alt="" />
                            <img class="mx-auto h-150px h-lg-200px theme-dark-show" src="admin/media/illustrations/misc/upgrade-dark.svg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="kt_app_footer" class="app-footer">
    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
        <div class="text-gray-900 order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">2024&copy;</span>
            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
        </div>
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
    </div>
</div>
        
@endsection

@push('script')
<script src="{{asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="{{asset('admin/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('admin/js/widgets.bundle.js')}}"></script>
<script src="{{asset('admin/js/custom/widgets.js')}}"></script>
<script src="{{asset('admin/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/new-target.js')}}"></script>
<script src="{{asset('admin/js/custom/utilities/modals/users-search.js')}}"></script>
@endpush