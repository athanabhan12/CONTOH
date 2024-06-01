@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Data Tour</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="{{ route('dashboard') }}">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Data Tour</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Tambah Tour</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Tambah Tour</div>
            </div>
            <div class="card-body">
              <form action="{{ url('tour/store') }}" method="POST">
                @csrf
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Nama Tour</label>
                <input type="text" name="nama_tour" class="form-control" placeholder="Nama Tour..." required>
              </div>
                <div class="form-group col-6">
                  <label>Destinasi Tour</label>
                  <input type="text" name="destinasi_tour" class="form-control" placeholder="Destinasi Tour..." required>
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Tanggal Berangkat Tour</label>
                <input type="date" name="tgl_berangkat_tour" class="form-control" placeholder="Tanggal Berangkat Tour...">
              </div>
              <div class="form-group col-6">
                <label for="email2">Tanggal Selesai Tour</label>
                <input type="date" name="tgl_selesai_tour" class="form-control" placeholder="Tanggal Selesai Tour...">
              </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Rombongan Tour</label> 
                <input type="text" name="rombongan_tour" class="form-control" placeholder="Rombongan Tour...">
              </div>
                <div class="form-group col-6">
                  <label>Jumlah Peserta</label>
                  <input type="text" name="jumlah_peserta_tour" class="form-control" placeholder="Jumlah Peserta...">
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Jenis Kendaraan</label>
                <input type="text" name="jenis_kendaraan" class="form-control" placeholder="Jenis Kendaraan...">
              </div>
                <div class="form-group col-6">
                  <label>Jumlah Kendaraan</label>
                  <input type="text" name="jumlah_kendaraan" class="form-control" placeholder="Jumlah Kendaraan..." required>
                </div>
              </div>
              <div class="button mt-3" style="float: right">
              <button class="btn btn-success">Submit</button>
              <a href="{{ route('tour') }}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection