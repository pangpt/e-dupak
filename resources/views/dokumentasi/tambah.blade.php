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
        <form class="mb-4">

          <!-- Project name -->
          <div class="form-group">

            <!-- Label  -->
            <label>
              Nama Kegiatan
            </label>

            <!-- Input -->
            <input type="text" id="isi_kegiatan" class="form-control" placeholder="Masukkan kata kunci...">

          </div>

          <!-- Project name -->
          <div class="form-group">

            <!-- Label  -->
            <label>
              Volume Kegiatan
            </label>

            <!-- Input -->
            <input type="text" class="form-control" placeholder="Volume Kegiatan">

          </div>

          <!-- Project name -->
          <div class="form-group">

            <!-- Label  -->
            <label>
              Tanggal Pelaksanaan
            </label>

            <!-- Input -->
            <input type="text" class="form-control" data-toggle="flatpickr" placeholder="Tanggal pelaksanaan kegiatan">

          </div>

          <!-- Divider -->
          <hr class="mt-5 mb-5">

          <!-- Buttons -->
          <a href="#" class="btn btn-block btn-primary">
            Simpan
          </a>

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
