@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">

        <!-- Header -->
        <div class="header">
          <div class="header-body">
            <div class="row align-items-center">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Overview
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Bab Kegiatan
                </h1>

              </div>
              <div class="col-auto">

                <!-- Button -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalMembers">
                    Tambah
                </button>

              </div>
            </div> <!-- / .row -->
          </div>
        </div>

        <!-- Card -->
        <div class="card" data-list='{"valueNames": ["orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method"]}'>
          <div class="table-responsive">
            <table class="table table-sm table-nowrap card-table">
              <thead>
                <tr>
                  <th>
                    <a href="#" class="text-muted list-sort" data-sort="orders-order">
                      No.
                    </a>
                  </th>
                  <th>
                    <a href="#" class="text-muted list-sort" data-sort="orders-product">
                      Kode
                    </a>
                  </th>
                  <th>
                    <a href="#" class="text-muted list-sort" data-sort="orders-date">
                      Nama
                    </a>
                  </th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach($data as $key)
                <tr>
                  <td class="orders-order">
                    {{$loop->iteration}}
                  </td>
                  <td class="orders-product">
                    {{$key->kode_bab}}
                  </td>
                  <td class="orders-date">

                    {{$key->nama_bab}}

                  </td>
                  <td class="text-right">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div> <!-- / .row -->
  </div>

  <div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-card card" data-list='{"valueNames": ["name"]}'>
          <div class="card-header">

            <!-- Title -->
            <h4 class="card-header-title" id="exampleModalCenterTitle">
              Tambah Bab Kegiatan
            </h4>

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>
          <div class="card-body">

            <!-- List group -->
            <ul class="list-group list-group-flush list my-n3">
              <li class="list-group-item">
                <div class="row align-items-center">

                  <div class="col ml-n2">

                    <div class="form-group">

                        <!-- Label -->
                        <label>
                          Nama Sub Kegiatan
                        </label>

                        <!-- Input -->
                        <input type="text" class="form-control">

                      </div>

                  </div>

                </div> <!-- / .row -->
              </li>
              <li class="list-group-item">
                <div class="row align-items-center">
                    <div class="col ml-n2 text-right">
                        <!-- Button -->
                        <button class="btn btn-lg btn-primary" type="button">Simpan</button>

                      </div>
                </div> <!-- / .row -->
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
