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
         @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif

        <!-- Form -->
        <form class="mb-4" action="{{route('dokumentasi.input')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <!-- Project name -->
          <div class="form-group">
            <label>
              Nama Kegiatan
            </label>
              <select class="custom-select mb-3 @error('modul_kegiatan_id') is-invalid @enderror" data-toggle="select" name="modul_kegiatan_id">
                <option>Pilih butir kegiatan...</option>
                @foreach($kegiatan as $kegiatanid)
                <option value="{{$kegiatanid->id}}">{{$kegiatanid->kode_kegiatan}} - {{$kegiatanid->isi_kegiatan}}</option>
                @endforeach
              </select>
              @error('modul_kegiatan_id')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
          </div>

          <div class="form-group">

            <label>
              Volume Kegiatan
            </label>

            <!-- Input -->
            <input type="text" class="form-control" placeholder="Volume Kegiatan" name="volume" value="{{old('volume')}}">

          </div>

          <div class="form-group">
            <label>
              Tanggal Pelaksanaan
            </label>

            <!-- Input -->
            <input type="text" class="form-control" data-toggle="flatpickr" placeholder="Tanggal pelaksanaan kegiatan" name="tanggal_pelaksanaan" value="{{old('tanggal_pelaksanaan')}}">

          </div>

          <div class="form-group">
            <label>
              Bukti Fisik : (bisa diupload nanti)
            </label>

            <input class="form-control @error('evidence') is-invalid @enderror" type="file" id="evidence" name="evidence">
            @error('evidence')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
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
