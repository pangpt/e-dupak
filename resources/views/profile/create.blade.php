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
                  New project
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Create a new project
                </h1>

              </div>
            </div> <!-- / .row -->
          </div>
        </div>

        <!-- Form -->
        <form class="mb-4" action="{{route('profile.update')}}" method="POST">
            @csrf
          <div class="row">
            <div class="col-12">

                  <!-- Email address -->
                  <div class="form-group">

                    <!-- Label -->
                    <label class="mb-1">
                      Nama Lengkap
                    </label>

                    <!-- Input -->
                    <input type="text" name="name" class="form-control" value="{{$data->name}}">

                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Email address -->
                  <div class="form-group">

                    <!-- Label -->
                    <label class="mb-1">
                      NIP
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" name="nip" value="{{$data->nip}}">

                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Email address -->
                  <div class="form-group">

                    <!-- Label -->
                    <label class="mb-1">
                      TMT
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" data-toggle="flatpickr" placeholder="" name="tmt" value="{{@$detail->tmt}}">

                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- First name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Golongan Ruang
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" name="golongan" value="{{@$detail->golongan}}">

                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Last name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Jabatan
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" name="jabatan" value="{{@$detail->jabatan}}">

                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- First name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Instansi
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" name="instansi" value="{{@$detail->instansi}}">

                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Last name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Satuan Kerja
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" name="satker" value="{{@$detail->satker}}">

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

@section('js-after')
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
@endsection
