@extends('layouts.master')

@section('content')

<div class="header">
  <!-- Image -->
  <img src="assets/img/covers/profile-cover-1.jpg" class="header-img-top" alt="...">

  <div class="container-fluid">

    <!-- Body -->
    <div class="header-body mt-n5 mt-md-n6">
      <div class="row align-items-end">
        <div class="col-auto">

          <!-- Avatar -->
          <div class="avatar avatar-xxl header-avatar-top">
            <img src="assets/img/avatars/profiles/default.jpg" alt="..." class="avatar-img rounded-circle border border-4 border-body">
          </div>

        </div>
        <div class="col mb-3 ml-n3 ml-md-n2">

          <!-- Pretitle -->
          <h6 class="header-pretitle">
            Pejabat Fungsional Pranata Komputer
          </h6>

          <!-- Title -->
          <h1 class="header-title">
            {{$data->name}}
          </h1>

        </div>
        <div class="col-12 col-md-auto mt-2 mt-md-0 mb-md-3">

          <!-- Button -->
          <a href="{{route('profile.akun')}}" class="btn btn-primary d-block d-md-inline-block lift">
            Pengaturan
          </a>

        </div>
      </div> <!-- / .row -->

    </div> <!-- / .header-body -->

  </div>
</div>
      
<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-xl-12">

      <!-- Card -->
      <div class="card">
        <div class="card-body">

          <!-- List group -->
          <div class="list-group list-group-flush my-n3">
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-2">

                  <!-- Title -->
                  <h5 class="mb-0">
                    NIP
                  </h5>

                </div>
                <div class="col-10">

                  {{$data->nip}}

                </div>
              </div> <!-- / .row -->
            </div>
          </div>
          <div class="list-group list-group-flush my-n3">
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-2">

                  <!-- Title -->
                  <h5 class="mb-0">
                    Alamat Email
                  </h5>

                </div>
                <div class="col-10">

                  {{$data->email}}

                </div>
              </div> <!-- / .row -->
            </div>
          </div>
          <div class="list-group list-group-flush my-n3">
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-2">

                  <!-- Title -->
                  <h5 class="mb-0">
                    Golongan Ruang
                  </h5>

                </div>
                <div class="col-10">

                  {{@$detail->golongan}}

                </div>
              </div> <!-- / .row -->
            </div>
          </div>
          <div class="list-group list-group-flush my-n3">
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-2">

                  <!-- Title -->
                  <h5 class="mb-0">
                    Jabatan
                  </h5>

                </div>
                <div class="col-10">

                  {{@$detail->jabatan}}

                </div>
              </div> <!-- / .row -->
            </div>
          </div>
          <div class="list-group list-group-flush my-n3">
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-2">

                  <!-- Title -->
                  <h5 class="mb-0">
                    Instansi
                  </h5>

                </div>
                <div class="col-10">

                  {{@$detail->instansi}}

                </div>
              </div> <!-- / .row -->
            </div>
          </div>
          <div class="list-group list-group-flush my-n3">
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-2">

                  <!-- Title -->
                  <h5 class="mb-0">
                    Satuan Kerja
                  </h5>

                </div>
                <div class="col-10">

                  {{@$detail->satker}}

                </div>
              </div> <!-- / .row -->
            </div>
          </div>
          <div class="list-group list-group-flush my-n3">
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-2">

                  <!-- Title -->
                  <h5 class="mb-0">
                    Perolehan Angka Kredit
                  </h5>

                </div>
                <div class="col-8">

                  <div class="progress" style="height: 25px;">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="400" aria-valuemin="0" aria-valuemax="500">400</div>
                  </div>

                </div>
                <div class="col-2">

                  120 - Pertama (III/a)

                </div>
              </div> <!-- / .row -->
            </div>
          </div>

        </div>
      </div>
    

    </div>
  </div> <!-- / .row -->
</div>

@endsection