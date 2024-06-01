@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Kegiatan</h4>
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
            <a href="#">Kegiatan</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Tambah Kegiatan</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Tambah Kegiatan</div>
            </div>
            <div class="card-body">
              <form action="{{ url('kegiatan/store') }}" method="POST">
                @csrf
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Nama Kegiatan</label>
                <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan..." required>
              </div>
                <div class="form-group col-6">
                  <label>Lokasi Kegiatan</label>
                  <input type="text" name="lokasi_kegiatan" class="form-control" placeholder="Lokasi Kegiatan..." required>
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Jam Mulai</label>
                <input type="datetime-local" name="jam_mulai" class="form-control" placeholder="Jam Mulai..." >
              </div>
                <div class="form-group col-6">
                  <label>Jam Selesai</label>
                <input type="datetime-local" name="jam_selesai" class="form-control" placeholder="Jam selesai">
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Nama Tour</label> 
                <select name="id_tour" class="form-control" required>

                    @foreach ($data_tour as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_tour }}</option>
                @endforeach

                  </select>
              </div>
              <div class="form-group col-6">
                <label for="email2">Nama Kegiatan</label> 
                <select name="id_master_kegiatan" class="form-control" required>

                    @foreach ($master_kegiatan as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_kegiatan }}</option>
                @endforeach

                  </select>
              </div>
              </div>
              <div class="button mt-3" style="float: ">
                <button class="btn btn-success">Submit</button>
                <a href="{{ route('kegiatan') }}" class="btn btn-danger">Cancel</a>
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