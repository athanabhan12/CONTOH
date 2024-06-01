@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Peserta</h4>
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
            <a href="#">Peserta</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Detail Peserta</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Detail Peserta</div>
            </div>
            <div class="card-body">
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Nama Peserta</label>
                <input readonly name="nama_peserta" class="form-control" value="{{ $pelanggan->nama_peserta }}">
              </div>
                <div class="form-group col-6">
                  <label>No.Telepon</label>
                  <input readonly name="no_telepon" class="form-control" value="{{ $pelanggan->no_telepon }}">
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">No.Peserta Tour</label>
                <input readonly name="no_peserta_tour" class="form-control" value="{{ $pelanggan->no_peserta_tour }}">
              </div>
                <div class="form-group col-6">
                  <label>Rombongan Tour</label>
                  <input readonly name="rombongan_tour" class="form-control" value="{{ $tour->rombongan_tour }}">
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Kelas</label> 
                <input readonly class="form-control" value="{{ $pelanggan->kelas }}">
              </div>
                <div class="form-group col-6">
                  <label>Jurusan</label>
                  <input readonly name="jurusan" class="form-control" value="{{ $pelanggan->jurusan }}">
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Bidang</label>
                <input readonly name="bidang" class="form-control" value="{{ $pelanggan->tgl_berangkat_tour }}">
              </div>
                <div class="form-group col-6">
                  <label>No.Bus/Kendaraan</label><br>
                  <input readonly name="bidang" class="form-control" value="{{ $pelanggan->no_bus_kendaraan }}">
                </div>
              </div>
              <div class="button mt-3" style="float: right"> 
                <a href="{{ route('pelanggan') }}" class="btn btn-primary">Kembali</a>
                </div>
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