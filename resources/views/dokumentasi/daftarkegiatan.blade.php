@extends('layouts.master')


@section('style-before')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
@endsection

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
                  Daftar Kegiatan
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
          <div class="card-header">
            Data Daftar Kegiatan
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-xl table-striped table-hover table-bordered" id="datatables">
                <thead>
                  <tr>
                    <th>
                      <a href="#" class="text-muted list-sort" data-sort="orders-order">
                        Nama Kegiatan
                      </a>
                    </th>
                    <th>
                      <a href="#" class="text-muted list-sort" data-sort="orders-product">
                        Tanggal Pelaksanaan
                      </a>
                    </th>
                    <th>
                      <a href="#" class="text-muted list-sort" data-sort="orders-date">
                        Volume
                      </a>
                    </th>
                    <th>
                      <a href="#" class="text-muted list-sort" data-sort="orders-date">
                        Angka Kredit
                      </a>
                    </th>
                    <th>
                      <a href="#" class="text-muted list-sort" data-sort="orders-date">
                        Bukti Fisik
                      </a>
                    </th>
                    <th>
                      <a href="#" class="text-muted list-sort" data-sort="orders-date">
                        Aksi
                      </a>
                    </th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach($data as $key)
                  <tr>
                    <td class="orders-order">
                      {{$key->modul_kegiatan->isi_kegiatan}}
                    </td>
                    <td class="orders-product">
                      {{$key->tanggal_pelaksanaan}}
                    </td>
                    <td class="orders-date">
  
                      {{$key->volume}}
  
                    </td>
                    <td class="orders-date">
  
                      {{$key->angka_kredit_usulan}}
  
                    </td>
                    <td class="orders-date">
  
                      {{$key->evidence}}
  
                    </td>
                    <td class="orders-date">
  
                      {{$key->volume}}
  
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
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
@section('js-after')
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script src='https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js'></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#datatables').DataTable();
  })
</script>
@endsection
