@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">

        <!-- Header -->
        <div class="header mt-md-5">
          <div class="header-body">
            <div class="row align-items-center">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Tambah
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Parameter DUPAK
                </h1>

              </div>
            </div> <!-- / .row -->
          </div>
        </div>

        <!-- Form -->
        <form class="mb-4" action="{{route('dupak.inputparam')}}" method="POST">
            @csrf
          <div class="row">
            <div class="col-12 col-md-6">

                  <!-- Email address -->
                  <div class="form-group">

                    <!-- Label -->
                    <label class="mb-1">
                      Nama Atasan Langsung (pengawas/administrator/JPT Pertama)
                    </label>

                    <!-- Input -->
                    <input type="text" name="nama_atasan" class="form-control" value="{{@$param->nama_atasan}}">

                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Email address -->
                  <div class="form-group">

                    <!-- Label -->
                    <label class="mb-1">
                      NIP Atasan Langsung
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" name="nip_atasan" value="{{@$param->nip_atasan}}">

                  </div>

                </div>
                <div class="col-12 col-md-6">

                    <!-- Email address -->
                    <div class="form-group">
  
                      <!-- Label -->
                      <label class="mb-1">
                        Golongan Ruang Atasan Langsung
                      </label>
  
                      <!-- Input -->
                      <input type="text" class="form-control" name="golongan_atasan" value="{{@$param->golongan_atasan}}">
  
                    </div>
  
                  </div>
                <div class="col-12 col-md-6">

                  <!-- Email address -->
                  <div class="form-group">

                    <!-- Label -->
                    <label class="mb-1">
                      TMT Golongan Ruang
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" data-toggle="flatpickr" placeholder="" name="tmt_atasan" value="{{@$param->tmt_atasan}}">

                  </div>

                </div>
                <div class="col-12 col-md-12">

                  <!-- First name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Nama Unit Kerja (pengawas/administrator/JPT Pertama)
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" name="unit_kerja_atasan" value="{{@$param->unit_kerja_atasan}}">

                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Last name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Nama Pejabat (JPT Pertama/Pimpinan Unit)
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" name="nama_jabatan" value="{{@$param->nama_pejabat}}">

                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- First name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      NIP Jabatan
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" name="nip_pejabat" value="{{@$param->nip_pejabat}}">

                  </div>

                </div>
                <div class="col-12 col-md-6">

                    <!-- Email address -->
                    <div class="form-group">
  
                      <!-- Label -->
                      <label>
                        Golongan Ruang Pejabat (JPT Pertama/Pimpinan Unit)
                      </label>
  
                      <!-- Input -->
                      <input type="text" class="form-control" name="golongan_pejabat" value="{{@$param->golongan_pejabat}}">
  
                    </div>
  
                  </div>
                <div class="col-12 col-md-6">

                  <!-- Last name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Lokasi
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" name="lokasi_pejabat" value="{{@$param->lokasi_pejabat}}">

                  </div>

                </div>
                <div class="col-12 col-md-12">

                    <!-- Last name -->
                    <div class="form-group">
  
                      <!-- Label -->
                      <label>
                        Jabatan Pejabat
                      </label>
  
                      <!-- Input -->
                      <input type="text" class="form-control" name="jabatan_pejabat" value="{{@$param->jabatan_pejabat}}">
  
                    </div>
  
                  </div>
              </div> <!-- / .row -->

          <!-- Divider -->
          <hr class="mt-5 mb-5">

          <!-- Buttons -->
          <button type="submit" class="btn btn-block btn-primary" >
            Simpan
          </button>

        </form>

      </div>
    </div> <!-- / .row -->
  </div>

@endsection

{{-- @section('js-after')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
    var path = "{{route('dokumentasi.autocomplete')}}";
    $('#isi_kegiatan').typeahead({
        source: function (query, process) {
            return $.get(path, {query: query}, function(data) {
                return process(data);
            })
        }
    })
</script>
@endsection --}}
