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
                    @if($key->evidence != null)
                      <a href="{{asset('storage/'.$key->evidence)}}" target="_blank" class="text-decoration-none"><span class="fe fe-file" title="Lihat Berkas"></span></a>
                    @else 
                    @endif
                    
                  </td>
                  <td class="orders-date">
                      <a href="#" class="btn btn-outline-primary btn-sm">
                          <i class="fe fe-eye"></i>
                      </a>
                      <a href="#" class="btn btn-outline-success btn-sm btn-edit" data-toggle="modal" data-target="#editButir" data-id="{{$key->id}}" data-isi="{{$key->modul_kegiatan->isi_kegiatan}}" data-modul="{{$key->modul_kegiatan->id}}" data-tgl="{{$key->tanggal_pelaksanaan}}" data-vol="{{$key->volume}}" data-kredit="{{$key->angka_kredit_usulan}}" data-file="{{$key->evidence}}" data-angka="{{$key->modul_kegiatan->angka_kredit}}">
                          <i class="fe fe-edit"></i>
                      </a>
                      <a href="#" class="btn btn-outline-danger btn-sm btn-hapus" data-toggle="modal" data-target="#hapusButir" data-id="{{$key->id}}" data-url="{{route('dokumentasi.hapus', ['id' => $key->id])}}">
                          <i class="fe fe-trash"></i>
                      </a>
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
<div class="modal fade" id="hapusButir" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Butir Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <h6>Apakah anda yakin?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a id="hapus"> <button type="submit" class="btn btn-primary">Ya</button></a>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="editButir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form-modal-edit" action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          
            <div class="mb-3">
              <label for="butir_kegiatan" class="col-form-label">Nama Kegiatan</label>
              <input type="text" class="form-control" id="butir_kegiatan" name="butir_kegiatan" hidden>
              <textarea class="form-control" id="isi_kegiatan" name="isi_kegiatan" readonly></textarea>
            </div>
            <div class="mb-3">
              <label for="volume" class="col-form-label">Volume Kegiatan</label>
              <input type="text" class="form-control" id="volume" name="volume">
            </div>
            <div class="mb-3">
              <label for="tanggal_pelaksanaan" class="col-form-label">Tanggal Pelaksanaan</label>
              <input type="text" class="form-control" id="tanggal_pelaksanaan" name="tanggal_pelaksanaan">
              <input type="text" class="form-control" id="angka_kredit_susulan" name="angka_kredit_susulan" hidden>
              <input type="text" class="form-control" id="angka_kredit" name="angka_kredit" hidden>
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Bukti Fisik : (format: .txt dan .pdf)</label>
              <input class="form-control" type="file" id="evidence" name="evidence">
              @if($key->evidence != null)
                <a href="{{asset('storage/'.$key->evidence)}}" target="_blank" class="text-decoration-none"><span class="fe fe-file"></span>Bukti Fisik</a>
              @else
                Belum ada bukti fisik
              @endif
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
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
  });

  $('.btn-edit').on('click', function() {
       id = $(this).data('id');
       isi = $(this).data('isi');
       modul = $(this).data('modul');
       vol = $(this).data('vol');
       tgl = $(this).data('tgl');
       kredit = $(this).data('kredit');
       file = $(this).data('file');
       angka = $(this).data('angka');
       url = window.location.origin + '/dokumentasi/' + 'edit/' +id;

       console.log(url)
       
       $('#form-modal-edit').attr('action', url);
       $('#butir_kegiatan').attr('value', modul);
       $('#isi_kegiatan').val(isi);
       $('#angka_kredit_susulan').val(kredit);
       $('#angka_kredit').val(angka);
       $('#volume').attr('value', vol);
       $('#tanggal_pelaksanaan').attr('value', tgl);
       $('#evidence').attr('value', file);

  });

  $('.btn-hapus').on('click', function() {
      id=$(this).data('id');
      url = $(this).data('url');
      $('#hapus').attr('href', url);
  })
</script>
@endsection
