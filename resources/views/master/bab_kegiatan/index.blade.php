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
            {{-- <div class="row align-items-center">
              <div class="col">

                <!-- Nav -->
                <ul class="nav nav-tabs nav-overflow header-tabs">
                  <li class="nav-item">
                    <a href="#!" class="nav-link active">
                      All <span class="badge badge-pill badge-soft-secondary">823</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#!" class="nav-link">
                      Pending <span class="badge badge-pill badge-soft-secondary">24</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#!" class="nav-link">
                      Processing <span class="badge badge-pill badge-soft-secondary">3</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#!" class="nav-link">
                      Refunded <span class="badge badge-pill badge-soft-secondary">71</span>
                    </a>
                  </li>
                </ul>

              </div>
            </div> --}}
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
                      Order
                    </a>
                  </th>
                  <th>
                    <a href="#" class="text-muted list-sort" data-sort="orders-product">
                      Product
                    </a>
                  </th>
                  <th>
                    <a href="#" class="text-muted list-sort" data-sort="orders-date">
                      Date
                    </a>
                  </th>
                  <th>
                    <a href="#" class="text-muted list-sort" data-sort="orders-total">
                      Total
                    </a>
                  </th>
                  <th>
                    <a href="#" class="text-muted list-sort" data-sort="orders-status">
                      Status
                    </a>
                  </th>
                  <th colspan="2">
                    <a href="#" class="text-muted list-sort" data-sort="orders-method">
                      Payment method
                    </a>
                  </th>
                </tr>
              </thead>
              <tbody class="list">
                <tr>
                  <td class="orders-order">
                    #6520
                  </td>
                  <td class="orders-product">
                    5' x 3' Wall Poster
                  </td>
                  <td class="orders-date">

                    <!-- Time -->
                    <time datetime="2018-07-30">07/30/18</time>

                  </td>
                  <td class="orders-total">
                    $55.25
                  </td>
                  <td class="orders-status">

                    <!-- Badge -->
                    <div class="badge badge-soft-success">
                      Shipped
                    </div>

                  </td>
                  <td class="orders-method">
                    Mastercard
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
                <tr>
                  <td class="orders-order">
                    #6521
                  </td>
                  <td class="orders-product">
                    XL Logo Tee
                  </td>
                  <td class="orders-date">

                    <!-- Time -->
                    <time datetime="2018-07-30">07/30/18</time>

                  </td>
                  <td class="orders-total">
                    $14.99
                  </td>
                  <td class="orders-status">

                    <!-- Badge -->
                    <div class="badge badge-soft-success">
                      Shipped
                    </div>

                  </td>
                  <td class="orders-method">
                    Paypal
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
                <tr>
                  <td class="orders-order">
                    #6522
                  </td>
                  <td class="orders-product">
                    Flexfit Hat
                  </td>
                  <td class="orders-date">

                    <!-- Time -->
                    <time datetime="2018-07-28">07/28/18</time>

                  </td>
                  <td class="orders-total">
                    $25.50
                  </td>
                  <td class="orders-sratus">

                    <!-- Badge -->
                    <div class="badge badge-soft-warning">
                      Processing
                    </div>

                  </td>
                  <td class="orders-method">
                    Visa
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
                <tr>
                  <td class="orders-order">
                    #6523
                  </td>
                  <td class="orders-product">
                    Reversible Hoodie
                  </td>
                  <td class="orders-date">

                    <!-- Time -->
                    <time datetime="2018-07-27">07/27/18</time>

                  </td>
                  <td class="orders-total">
                    $64.99
                  </td>
                  <td class="orders-status">

                    <!-- Badge -->
                    <div class="badge badge-soft-danger">
                      Cancelled
                    </div>

                  </td>
                  <td class="orders-method">
                    Amex
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
                <tr>
                  <td class="orders-order">
                    #6524
                  </td>
                  <td class="orders-product">
                    Geometric Print Shorts
                  </td>
                  <td class="orders-date">

                    <!-- Time -->
                    <time datetime="2018-07-25">07/25/18</time>

                  </td>
                  <td class="orders-total">
                    $31.99
                  </td>
                  <td class="orders-status">

                    <!-- Badge -->
                    <div class="badge badge-soft-success">
                      Shipped
                    </div>

                  </td>
                  <td class="orders-method">
                    Paypal
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
