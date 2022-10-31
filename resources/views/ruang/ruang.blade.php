@extends('master')
@section('title','Ruang')
@section('js')
  
@endsection
@section('header')
  <div class="content flex-column-fluid" id="kt_content">
    <!--begin::Row-->
    <div class="row g-5 g-lg-10">
      <!--begin::Col-->
      <div class="col-xl-12">
        <!--begin::Tiles Widget 2-->
        <div class="card h-175px bgi-no-repeat bgi-size-contain h-200px mb-5"
          style="background-color: #1B283F; background-position: right; background-image:url('assets/media/svg/misc/taieri.svg')">
          <!--begin::Body-->
          <div class="card-body d-flex flex-column justify-content-between">
            <!--begin::Title-->
            <h1 class="text-white fw-bold mb-5">
              <span class="lh-lg">Pendataan Ruang Laboratorium</span>
            </h1>
            <!--end::Title-->
          </div>
          <!--end::Body-->
        </div>
        <!--end::Tiles Widget 2-->
      </div>
      <!--end::Col-->
  </div>
  <!--end::Row-->
@endsection
@section('create')
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
  Tambah Baru
</button>
      
<div class="modal fade" tabindex="-1" id="tambah">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data Ruang</h5>

          <!--begin::Close-->
          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
            <span class="svg-icon svg-icon-2x">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
                  fill="black"></rect>
                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
              </svg>
            </span>
          </div>
          <!--end::Close-->
        </div>

        <div class="modal-body">
          <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#"
            method="POST">@csrf
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
              <!--begin::Label-->
              <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">Nama</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                  data-bs-original-title="Nama Kategori Galeri" aria-label="Nama Galeri"></i>
              </label>
              <!--end::Label-->
              <input value="{{ old('nama') }}" type="text" class="form-control form-control-solid"
                placeholder="Masukan Nama Galeri" name="nama">
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--begin::Actions-->
            <div class="text-center pt-15">
              <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Batalkan</button>
              <button type="submit" class="btn btn-primary">
                <span class="indicator-label">Simpan</span>
              </button>
            </div>
            <!--end::Actions-->
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
  @section('content')
    <!--begin::Row-->
    <div class="row g-5 g-lg-10">
      <!--begin::Col-->
      <div class="col-xl-12 mb-5 mb-xl-10">
        <!--begin::Table Widget 6-->
        <div class="card h-xl-100 mt-5">
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
                              <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end"
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
                              <img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end"
                                alt="" />
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
                              <img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end"
                                alt="" />
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
                              <img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end"
                                alt="" />
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
                              <img src="assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end"
                                alt="" />
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
                              <img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end"
                                alt="" />
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
                              <img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end"
                                alt="" />
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
                              <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end"
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
                              <img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end"
                                alt="" />
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
                              <img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end"
                                alt="" />
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
                              <img src="assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end"
                                alt="" />
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
                              <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end"
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
