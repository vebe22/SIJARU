@extends('master')
@section('title', 'Dashboard')
@section('css')
  <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
  
@endsection
@section('content')
  <div class="content flex-column-fluid" id="kt_content">
    <!--begin::Row-->
    <div class="row g-5 g-lg-10">
      <!--begin::Col-->
      <div class="col-xl-4 mb-xl-10">
        <!--begin::Mixed Widget 18-->
        <div class="card h-md-100">
          <!--begin::Body-->
          <div class="card-body p-0 d-flex flex-column">

            <!--begin::List Widget 6-->
            <div class="card h-xl-100">
              <!--begin::Header-->
              <div class="card-header border-0">
                <h3 class="card-title fw-bold text-dark">Notifications</h3>
                <div class="card-toolbar">
                  <!--begin::Menu-->
                  <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                    <span class="svg-icon svg-icon-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="5" y="5" width="5" height="5" rx="1"
                            fill="currentColor" />
                          <rect x="14" y="5" width="5" height="5" rx="1"
                            fill="currentColor" opacity="0.3" />
                          <rect x="5" y="14" width="5" height="5" rx="1"
                            fill="currentColor" opacity="0.3" />
                          <rect x="14" y="14" width="5" height="5" rx="1"
                            fill="currentColor" opacity="0.3" />
                        </g>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </button>
                  <!--begin::Menu 3-->
                  <div
                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                    data-kt-menu="true">
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
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                          title="Specify a target name for future usage and reference"></i></a>
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
                              <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                checked="checked" name="notifications" />
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
              </div>
              <!--end::Header-->
              <!--begin::Body-->
              <div class="card-body pt-0">
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                  <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                  <span class="svg-icon svg-icon-warning svg-icon-1 me-5">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3"
                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                        fill="currentColor" />
                      <path
                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                        fill="currentColor" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                  <!--begin::Title-->
                  <div class="flex-grow-1 me-2">
                    <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Group lunch celebration</a>
                    <span class="text-muted fw-semibold d-block">Due in 2 Days</span>
                  </div>
                  <!--end::Title-->
                  <!--begin::Lable-->
                  <span class="fw-bold text-warning py-1">+28%</span>
                  <!--end::Lable-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
                  <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                  <span class="svg-icon svg-icon-success svg-icon-1 me-5">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3"
                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                        fill="currentColor" />
                      <path
                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                        fill="currentColor" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                  <!--begin::Title-->
                  <div class="flex-grow-1 me-2">
                    <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Navigation optimization</a>
                    <span class="text-muted fw-semibold d-block">Due in 2 Days</span>
                  </div>
                  <!--end::Title-->
                  <!--begin::Lable-->
                  <span class="fw-bold text-success py-1">+50%</span>
                  <!--end::Lable-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
                  <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                  <span class="svg-icon svg-icon-danger svg-icon-1 me-5">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3"
                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                        fill="currentColor" />
                      <path
                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                        fill="currentColor" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                  <!--begin::Title-->
                  <div class="flex-grow-1 me-2">
                    <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Rebrand strategy
                      planning</a>
                    <span class="text-muted fw-semibold d-block">Due in 5 Days</span>
                  </div>
                  <!--end::Title-->
                  <!--begin::Lable-->
                  <span class="fw-bold text-danger py-1">-27%</span>
                  <!--end::Lable-->
                </div>
                <!--end::Item-->
              </div>
              <!--end::Body-->
            </div>
            <!--end::List Widget 6-->

          </div>
          <!--end::Body-->
        </div>
        <!--end::Mixed Widget 18-->
      </div>
      <!--end::Col-->
      <!--begin::Col-->
      <div class="col-xl-8">
        <!--begin::Row-->
        <div class="row g-5 g-lg-10">
          <!--begin::Col-->
          <div class="col-lg-6 mb-5 mb-lg-10">
            <!--begin::Tiles Widget 1-->
            <div class="card h-150px bgi-no-repeat bgi-size-cover h-150px mb-5 mb-lg-10"
              style="background-image:url('assets/media/stock/600x600/img-12.jpg')">
              <!--begin::Body-->
              <div class="card-body p-6">
                <!--begin::Title-->
                <a href="#" class="text-black text-hover-primary fw-bold fs-2" data-bs-toggle="modal"
                  data-bs-target="#kt_modal_create_app">Roofing</a>
                <!--end::Title-->
              </div>
              <!--end::Body-->
            </div>
            <!--end::Tiles Widget 1-->
            <!--begin::Tiles Widget 5-->
            <a href="#" class="card bg-body h-150px">
              <!--begin::Body-->
              <div class="card-body d-flex flex-column justify-content-between">
                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                <span class="svg-icon svg-icon-dark svg-icon-2hx ms-n1 flex-grow-1">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="2" width="9" height="9" rx="2"
                      fill="currentColor" />
                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                      fill="currentColor" />
                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                      fill="currentColor" />
                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                      fill="currentColor" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
                <div class="d-flex flex-column">
                  <div class="text-dark fw-bold fs-1 mb-0 mt-5">8,600</div>
                  <div class="text-muted fw-semibold fs-6">New Customers</div>
                </div>
              </div>
              <!--end::Body-->
            </a>
            <!--end::Tiles Widget 5-->
          </div>
          <!--end::Col-->
          <!--begin::Col-->
          <div class="col-lg-6 mb-5 mb-lg-10">
            <!--begin::Mixed Widget 3-->
            <div class="card h-150px bgi-no-repeat bgi-size-cover h-150px mb-5 mb-lg-10"
              style="background-image:url('assets/media/stock/600x600/img-12.jpg')">
              <!--begin::Body-->
              <div class="card-body p-6">
                <!--begin::Title-->
                <a href="#" class="text-black text-hover-primary fw-bold fs-2" data-bs-toggle="modal"
                  data-bs-target="#kt_modal_create_app">Roofing</a>
                <!--end::Title-->
              </div>
              <!--end::Body-->
            </div>
            <a href="#" class="card bg-body h-150px">
              <!--begin::Body-->
              <div class="card-body d-flex flex-column justify-content-between">
                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                <span class="svg-icon svg-icon-dark svg-icon-2hx ms-n1 flex-grow-1">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="2" width="9" height="9" rx="2"
                      fill="currentColor" />
                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                      fill="currentColor" />
                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                      fill="currentColor" />
                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                      fill="currentColor" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
                <div class="d-flex flex-column">
                  <div class="text-dark fw-bold fs-1 mb-0 mt-5">8,600</div>
                  <div class="text-muted fw-semibold fs-6">New Customers</div>
                </div>
              </div>
              <!--end::Body-->
            </a>
            <!--end::Mixed Widget 3-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->
      </div>
      <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row g-5 g-lg-10">
      <!--begin::Col-->
      <div class="col-xl-12 mb-5 mb-xl-10">
        <!--begin::Table Widget 6-->
        <div class="card h-xl-100">
          <!--begin::Header-->
          <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
              <span class="card-label fw-bold fs-3 mb-1">Authors Earnings</span>
              <span class="text-muted mt-1 fw-semibold fs-7">More than 400 new authors</span>
            </h3>
            <div class="card-toolbar">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1"
                    data-bs-toggle="tab" href="#kt_table_widget_6_tab_1">Month</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1"
                    data-bs-toggle="tab" href="#kt_table_widget_6_tab_2">Week</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 active"
                    data-bs-toggle="tab" href="#kt_table_widget_6_tab_3">Day</a>
                </li>
              </ul>
            </div>
          </div>
          <!--end::Header-->
          <!--begin::Body-->
          <div class="card-body py-3">
            <div class="tab-content">
              <!--begin::Tap pane-->
              <div class="tab-pane fade" id="kt_table_widget_6_tab_1">
                <!--begin::Table container-->
                <div class="table-responsive">
                  <!--begin::Table-->
                  <table class="table align-middle gs-0 gy-3">
                    <!--begin::Table head-->
                    <thead>
                      <tr>
                        <th class="p-0 w-50px"></th>
                        <th class="p-0 min-w-150px"></th>
                        <th class="p-0 min-w-140px"></th>
                        <th class="p-0 min-w-120px"></th>
                      </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end"
                                alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                          <span class="text-muted fw-semibold d-block">Successful Fellas</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$200,500</span>
                        </td>
                        <td class="text-end">
                          <span class="text-primary fs-7 fw-bold">+28%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/018-girl-9.svg') }}"
                                class="h-75 align-self-end" alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                          <span class="text-muted fw-semibold d-block">HTML, CSS Coding</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$1,200,000</span>
                        </td>
                        <td class="text-end">
                          <span class="text-warning fs-7 fw-bold">+52%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/047-girl-25.svg') }}"
                                class="h-75 align-self-end" alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                          <span class="text-muted fw-semibold d-block">PHP, Laravel, VueJS</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$1,200,000</span>
                        </td>
                        <td class="text-end">
                          <span class="text-danger fs-7 fw-bold">+52%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/014-girl-7.svg') }}"
                                class="h-75 align-self-end" alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                          <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$3,400,000</span>
                        </td>
                        <td class="text-end">
                          <span class="text-success fs-7 fw-bold">-34%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/043-boy-18.svg') }}"
                                class="h-75 align-self-end" alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Kevin Leonard</a>
                          <span class="text-muted fw-semibold d-block">Art Director</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$35,600,000</span>
                        </td>
                        <td class="text-end">
                          <span class="text-info fs-7 fw-bold">+230%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                </div>
                <!--end::Table-->
              </div>
              <!--end::Tap pane-->
              <!--begin::Tap pane-->
              <div class="tab-pane fade" id="kt_table_widget_6_tab_2">
                <!--begin::Table container-->
                <div class="table-responsive">
                  <!--begin::Table-->
                  <table class="table align-middle gs-0 gy-3">
                    <!--begin::Table head-->
                    <thead>
                      <tr>
                        <th class="p-0 w-50px"></th>
                        <th class="p-0 min-w-150px"></th>
                        <th class="p-0 min-w-140px"></th>
                        <th class="p-0 min-w-120px"></th>
                      </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/018-girl-9.svg') }}"
                                class="h-75 align-self-end" alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                          <span class="text-muted fw-semibold d-block">HTML, CSS Coding</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$1,200,000</span>
                        </td>
                        <td class="text-end">
                          <span class="text-warning fs-7 fw-bold">+52%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/014-girl-7.svg') }}"
                                class="h-75 align-self-end" alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                          <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$3,400,000</span>
                        </td>
                        <td class="text-end">
                          <span class="text-success fs-7 fw-bold">-34%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end"
                                alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                          <span class="text-muted fw-semibold d-block">Successful Fellas</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$200,500</span>
                        </td>
                        <td class="text-end">
                          <span class="text-primary fs-7 fw-bold">+28%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                </div>
                <!--end::Table-->
              </div>
              <!--end::Tap pane-->
              <!--begin::Tap pane-->
              <div class="tab-pane fade show active" id="kt_table_widget_6_tab_3">
                <!--begin::Table container-->
                <div class="table-responsive">
                  <!--begin::Table-->
                  <table class="table align-middle gs-0 gy-3">
                    <!--begin::Table head-->
                    <thead>
                      <tr>
                        <th class="p-0 w-50px"></th>
                        <th class="p-0 min-w-150px"></th>
                        <th class="p-0 min-w-140px"></th>
                        <th class="p-0 min-w-120px"></th>
                      </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/047-girl-25.svg') }}"
                                class="h-75 align-self-end" alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                          <span class="text-muted fw-semibold d-block">HTML, CSS Coding</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$1,200,000</span>
                        </td>
                        <td class="text-end">
                          <span class="text-danger fs-7 fw-bold">+52%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/014-girl-7.svg') }}"
                                class="h-75 align-self-end" alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                          <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$3,400,000</span>
                        </td>
                        <td class="text-end">
                          <span class="text-success fs-7 fw-bold">-34%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/043-boy-18.svg') }}"
                                class="h-75 align-self-end" alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Kevin Leonard</a>
                          <span class="text-muted fw-semibold d-block">Art Director</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$35,600,000</span>
                        </td>
                        <td class="text-end">
                          <span class="text-info fs-7 fw-bold">+230%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                              <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}"
                                class="h-75 align-self-end" alt="" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                          <span class="text-muted fw-semibold d-block">Successful Fellas</span>
                        </td>
                        <td>
                          <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                          <span class="text-dark fw-bold d-block fs-5">$200,500</span>
                        </td>
                        <td class="text-end">
                          <span class="text-primary fs-7 fw-bold">+28%</span>
                        </td>
                        <td class="text-end">
                          <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                  rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </td>
                      </tr>
                    </tbody>
                    <!--end::Table body-->
                  </table>
                </div>
                <!--end::Table-->
              </div>
              <!--end::Tap pane-->
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Tables Widget 6-->
      </div>
      <!--end::Col-->
    </div>
    <!--end::Row-->
  </div>
@endsection
