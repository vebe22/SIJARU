@extends('master')
@section('title','Ruang')
@section('js')
  
@endsection
@section('content')
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

<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
  <!--begin::Card header-->
  <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
    data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
    <!--begin::Card title-->
    <div class="card-title m-0">
      <h3 class="fw-bolder m-0">Tambah Baru Data Ruang</h3>
    </div>
    <!--end::Card title-->
  </div>
  <!--begin::Card header-->
  <!--begin::Content-->
  <div id="kt_account_settings_profile_details" class="collapse show">
    <!--begin::Form-->
    <form action="#" method="POST" id="kt_account_profile_details_form" class="form"
      enctype="multipart/form-data">@csrf
      <!--begin::Card body-->
      <div class="card-body border-top p-9">
        <!--begin::Input group-->
        <div class="row mb-6">
          <!--begin::Label-->
          <label class="col-lg-4 col-form-label fw-bold fs-6">Kode / Nama Ruang</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-5 fv-row">
              <input value="{{ old('koder') }}" type="text" name="koder"
                class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Kode Ruang" />
              </div>
              <div class="col-lg-7 fv-row">
                <input value="{{ old('namar') }}" type="text" name="namar"
                  class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Nama Ruang" />
              </div>
            </div>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-6">
          <!--begin::Label-->
          <label class="col-lg-4 col-form-label fw-bold fs-6">Gedung / Lantai</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-8 fv-row">
              <input value="{{ old('gedung') }}" type="text" name="gedung"
                class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Lokasi Gedung" />
              </div>
              <div class="col-lg-4 fv-row">
                <input value="{{ old('lantai') }}" type="text" name="lantai"
                  class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Lokasi Lantai Gedung" />
              </div>
            </div>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-6">
          <!--begin::Label-->
          <label class="col-lg-4 col-form-label fw-bold fs-6">Kapasitas / Ukuran</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-2 fv-row">
            <input value="{{ old('kapasitas') }}" type="text" name="kapasitas"
              class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Max.Kapasitas Ruang" />
          </div>
          <div class="col-lg-3 fv-row">
            <input value="{{ old('panjang') }}" type="text" name="panjang"
              class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Uk.Panjang Ruang" />
          </div>
          <div class="col-lg-3 fv-row">
            <input value="{{ old('lebar') }}" type="text" name="lebar"
              class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Uk.Lebar Ruang" />
          </div>
          <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-6">
          <!--begin::Label-->
          <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span>Keterangan </span>
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Keterangan tambahan"></i>
          </label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8 fv-row">
            <textarea name="keterangan" class="form-control form-control-lg form-control-solid" style="height: 100px;"
              placeholder="Keterangan">{{ old('keterangan') }}</textarea>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Menu separator-->
            <div class="separator mb-3 opacity-75"></div>
        <!--end::Menu separator-->
        <!--begin::Card header-->
        <div class="card border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
          data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
          <!--begin::Card title-->
          <div class="card-title mb-3">
            <h3 class="fw-bolder m-0">Fasilitas</h3>
          </div>
          <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Input group-->
        <div class="row mb-6">
          <div class="col-lg-8">
            <div class="row">
              <!--begin::Label-->
              <label class="col-lg-5 col-form-label fw-bold fs-6">Meja Komputer</label>
              <!--end::Label-->
              <div class="col-lg-7 fv-row">
              <input value="{{ old('mejakom') }}" type="text" name="mejakom"
                class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Jumlah Meja Komputer" />
              </div>
            </div>
            <div class="row">
              <!--begin::Label-->
              <label class="col-lg-5 col-form-label fw-bold fs-6">Meja Pengawas</label>
              <!--end::Label-->
              <div class="col-lg-7 fv-row">
              <input value="{{ old('mejapengawas') }}" type="text" name="mejapengawas"
                class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Jumlah Meja Pengawas" />
              </div>
            </div>
            <div class="row">
              <!--begin::Label-->
              <label class="col-lg-5 col-form-label fw-bold fs-6">Personal Komputer (PC)</label>
              <!--end::Label-->
              <div class="col-lg-7 fv-row">
              <input value="{{ old('pc') }}" type="text" name="pc"
                class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Jumlah PC" />
              </div>
            </div>
            <div class="row">
              <!--begin::Label-->
              <label class="col-lg-5 col-form-label fw-bold fs-6">TV</label>
              <!--end::Label-->
              <div class="col-lg-7 fv-row">
              <input value="{{ old('tv') }}" type="text" name="tv"
                class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Jumlah TV" />
              </div>
            </div>
            <div class="row">
              <!--begin::Label-->
              <label class="col-lg-5 col-form-label fw-bold fs-6">AC</label>
              <!--end::Label-->
              <div class="col-lg-7 fv-row">
              <input value="{{ old('ac') }}" type="text" name="ac"
                class="form-control form-control-lg form-control-solid my-1" placeholder="Masukkan Jumlah AC" />
              </div>
            </div>
          </div>
          <!--begin::Col-->
          <div class="col-lg-4">
            <!--begin::Input group-->
            <div class="row mb-6">
              <div class="col-lg-7">
                <!--begin::Label-->
                  <label class="col-form-label fw-bold fs-6">Foto Ruang <br>
                    <span class="form-text required">Allowed file types: png, jpg, jpeg</span> <br>
                    <span class="form-text required">Maksimal ukuran file sebesar 512 kb</span>
                  </label>
                  <!--end::Label-->
              </div>
              <div class="col-lg-5">
                  <!--begin::Image input-->
                  <div class="image-input image-input-outline" data-kt-image-input="true"
                  style="background-image: url({{ asset('assets/media/avatars/blank.png') }})">
                  <!--begin::Preview existing avatar-->
                  <div class="image-input-wrapper w-125px h-125px"
                    style="background-image: url({{ asset('assets/media/avatars/blank.png') }})"></div>
                  <!--end::Preview existing avatar-->
                  <!--begin::Label-->
                  <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Photo">
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <!--begin::Inputs-->
                    <input type="file" name="foto_pertama" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="foto_pertama_remove" />
                    <!--end::Inputs-->
                  </label>
                  <!--end::Label-->
                  <!--begin::Cancel-->
                  <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Photo">
                    <i class="bi bi-x fs-2"></i>
                  </span>
                  <!--end::Cancel-->
                  <!--begin::Remove-->
                  <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Photo">
                    <i class="bi bi-x fs-2"></i>
                  </span>
                  <!--end::Remove-->
                </div>
                <!--end::Image input-->
              </div>
            </div>
            <!--end::Input group-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
      </div>
      <!--end::Card body-->
      <!--begin::Actions-->
      <div class="card-footer d-flex justify-content-end py-6 px-9">
        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Batalkan</button>
        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
      </div>
      <!--end::Actions-->
    </form>
    <!--end::Form-->
  </div>
  <!--end::Content-->
</div>
<!--end::Basic info-->
@endsection
