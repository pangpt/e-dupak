@extends('layouts.master')

@section('content')
<!-- HEADER -->
      <div class="header">
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Overview
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Dashboard
                </h1>

              </div>
              {{-- <div class="col-auto">

                <!-- Button -->
                <a href="#!" class="btn btn-primary lift">
                  Create Report
                </a>

              </div> --}}
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->

       <!-- CARDS -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 col-xl">

            <!-- Value  -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Follow me on github
                    </h6>

                    <!-- Heading -->
                    <span class="h5 mb-0">
                      pangpt
                    </span>

                    <!-- Badge -->
                    {{-- <span class="badge badge-soft-success mt-n1">
                      +3.5%
                    </span> --}}
                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span><img src="{{asset('assets/img/github-logo.png')}}" alt="" width="40px"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Hours -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Follow me on valorant
                    </h6>

                    <!-- Heading -->
                    <span class="h5 mb-0">
                      Goddamn Steven#4646
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span><img src="{{asset('assets/img/valo.png')}}" alt="" width="50px"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Exit -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Open Donation
                    </h6>

                    <!-- Heading -->
                    <span class="h5 mb-0">
                      Japri
                    </span>


                  </div>
                  <div class="col-auto">

                    <span class="h1 fe fe-dollar-sign text-bold mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
        </div> <!-- / .row -->

      </div>
@endsection
