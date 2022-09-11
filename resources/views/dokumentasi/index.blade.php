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
              Nama Kegiatan :
            </label>
              {{$bukti->modul_kegiatan->isi_kegiatan}}
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
              Volume Kegiatan :
            </label>
            {{$bukti->volume}}

          </div>

          <!-- Project name -->
          <div class="form-group">

            <!-- Label  -->
            <label>
              Tanggal Pelaksanaan :
            </label>

            {{$bukti->tanggal_pelaksanaan}}

          </div>
        
        <div class="form-group">

            <!-- Label  -->
            <label>
              Bukti :
            </label>

            <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-options='{"url": "https://"}'>
              <!-- Fallback -->
              <div class="fallback">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileUploadMultiple" multiple>
                    <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                  </div>
                </div>
    
                <!-- Preview -->
                <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                  <li class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">
    
                        <!-- Image -->
                        <div class="avatar">
                          <img class="avatar-img rounded" src="data:image/svg+xml,%3csvg3c/svg%3e" alt="..." data-dz-thumbnail>
                        </div>
    
                      </div>
                      <div class="col ml-n3">
    
                        <!-- Heading -->
                        <h4 class="mb-1" data-dz-name>...</h4>
    
                        <!-- Text -->
                        <small class="text-muted" data-dz-size>...</small>
    
                      </div>
                      <div class="col-auto">
    
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item" data-dz-remove>
                              Remove
                            </a>
                          </div>
                        </div>
    
                      </div>
                    </div>
                  </li>
                </ul>
    
            </div>
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
