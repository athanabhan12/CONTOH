@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">User</h4>
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
            <a href="#">User</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Ubah User</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Ubah User</div>
            </div>
            <div class="card-body">
              <form action="{{ url('panitia/update') }}/{{ $panitia->id }}" method="POST">
                @csrf
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Nama Lenkap</label>
                <input type="text" name="nama" class="form-control" value="{{ $panitia->nama }}">
              </div>
                <div class="form-group col-6">
                  <label>No.Telepon</label>
                  <input type="number" name="no_telepon" class="form-control" value="{{ $panitia->no_telepon }}">
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $panitia->email }}">
              </div>
                <div class="form-group col-6">
                  <label>Role</label>
                  <select name="id_role" class="form-control">
                      
                    {{-- @foreach ($role as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_role }}</option>
                    @endforeach --}}

                  </select>
                </div>
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Username</label> 
                <input type="text" name="username" class="form-control" value="{{ $panitia->username }}">
              </div>
              <div class="form-group col-6">
                <label for="email2">Jenis Kelamin</label> 
                <select name="jenis_kelamin" class="form-control" id="">

                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>

                </select>
              </div>
              </div>
              <div class="row">
              </div>
              <div class="button mt-3" style="float: ">
                <button class="btn btn-success">Submit</button>
                <a href="{{ route('panitia') }}" class="btn btn-danger">Cancel</a>
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