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
              <form action="{{ url('pelanggan/store') }}" method="POST">
                @csrf
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Nama Peserta</label>
                <input type="text" name="nama_peserta" class="form-control" placeholder="Nama Peserta..." required>
              </div>
                <div class="form-group col-6">
                  <label>No.Telepon</label>
                  <input type="text" name="no_telepon" class="form-control" placeholder="No.Telepon..." required>
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">No.Peserta Tour</label>
                <input type="text" name="no_peserta_tour" class="form-control" placeholder="No.Peserta Tour..." value="{{$generateno->generateno}}">
              </div>
                <div class="form-group col-6">
                  <label>Rombongan Tour</label>
                  <select name="id_tour" class="form-control" required>

                    @foreach ($peserta as $item)
                    <option value="{{ $item->id }}">{{ $item->rombongan_tour }}</option>
                @endforeach

                  </select>
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Kelas</label> 
                <input type="text" name="kelas" class="form-control" placeholder="Kelas...">
              </div>
                <div class="form-group col-6">
                  <label>Jurusan</label>
                  <input type="text" name="jurusan" class="form-control" placeholder="Jurusan...">
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Bidang</label>
                <input type="text" name="bidang" class="form-control" placeholder="Bidang...">
              </div>
                <div class="form-group col-6">
                  <label>No.Bus/Kendaraan</label>
                  <input type="text" name="no_bus_kendaraan" class="form-control" id="password" placeholder="No.Bus/Kendaraan..." required>
                </div>
              </div>
              <div class="button mt-3" style="float: ">
                <button class="btn btn-success">Submit</button>
                <a href="{{ route('pelanggan') }}" class="btn btn-danger">Cancel</a>
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