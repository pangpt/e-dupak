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
                  Dokumentasi Kegiatan
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  detail
                </h1>

              </div>
            </div> <!-- / .row -->
          </div>
        </div>

        <!-- Form -->
        <form class="mb-4" action="{{route('dokumentasi.input')}}" method="POST">
            @csrf
          <!-- Project name -->
          <div class="form-group">
            <label>
              Nama Kegiatan
            </label>
              {{$bukti->id}}
          </div>
          <!-- <div class="form-group">
            <label>
              Nama Kegiatan
            </label>
            <input type="text" id="isi_kegiatan" class="form-control" placeholder="Masukkan kata kunci...">

          </div> -->

          <!-- Project name -->
          <div class="form-group">

            <!-- Label  -->
            <label>
              Volume Kegiatan
            </label>

            <!-- Input -->
            <input type="text" class="form-control" placeholder="Volume Kegiatan" name="volume">

          </div>

          <!-- Project name -->
          <div class="form-group">

            <!-- Label  -->
            <label>
              Tanggal Pelaksanaan
            </label>

            <!-- Input -->
            <input type="text" class="form-control" data-toggle="flatpickr" placeholder="Tanggal pelaksanaan kegiatan" name="tanggal_pelaksanaan">

          </div>

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
