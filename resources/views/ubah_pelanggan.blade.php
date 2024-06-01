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
            <a href="#">Tambah Peserta</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Tambah Peserta</div>
            </div>
            <div class="card-body">
              <form action="{{ url('/pelanggan/update') }}/{{ $peserta->id }}" method="POST">
                @csrf
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Nama Peserta</label>
                <input type="text" name="nama_peserta" class="form-control" value="{{ $peserta->nama_peserta }}">
              </div>
                <div class="form-group col-6">
                  <label>No.Telepon</label>
                  <input type="text" name="no_telepon" class="form-control" value="{{ $peserta->no_telepon }}">
                </div>
              </div>
              <div class="row">
              <div class="form-group col-12">
                <label for="email2">No.Peserta Tour</label>
                <input readonly type="text" name="no_peserta_tour" class="form-control" placeholder="No.Peserta Tour..." value="{{ $peserta->no_peserta_tour }}">
              </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Kelas</label> 
                <input type="kelas" class="form-control" value="{{ $peserta->kelas }}">
              </div>
                <div class="form-group col-6">
                  <label>Jurusan</label>
                  <input type="text" name="jurusan" class="form-control" value="{{ $peserta->jurusan }}">
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Bidang</label>
                <input type="text" name="bidang" class="form-control" value="{{ $peserta->bidang }}">
              </div>
                <div class="form-group col-6">
                  <label>No.Bus/Kendaraan</label>
                  <input type="text" name="no_bus_kendaraan" class="form-control" id="password" value="{{ $peserta->no_bus_kendaraan }}">
                </div>
              </div>
              <div class="button mt-3">
              <button class="btn btn-success">Submit</button>
            </form>
              <button class="btn btn-danger">Cancel</button>
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