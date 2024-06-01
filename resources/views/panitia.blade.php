@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            @if(session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('berhasil') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
        <h4 class="page-title">Panitia Tour</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="#">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Panitia</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
              <a href="{{ url('panitia/create') }}" class="btn btn-success"><i class="fa-solid fa-plus mr-2"></i> Tambah Data </a>  
            </div>
          </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                    <th>No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Email</th>
                    <th>No.Telepon</th>
                    <th>Username</th>
                    <th>Jenis Kelamin</th>
                    <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($panitias as $panitia)
                        
                    <tr style="text-align: center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $panitia->nama }}</td>
                        <td>{{ $panitia->email }}</td>
                        <td>{{ $panitia->no_telepon }}</td>
                        <td>{{ $panitia->username }}</td>
                        <td>{{ $panitia->jenis_kelamin }}</td>
                        <td>

                            <a href="{{ url('panitia/edit') }}/{{$panitia->id}}">
                                <button type="button" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></button>
                              </a>
                                <a href="{{ url('panitia/delete') }}/{{$panitia->id}}">
                                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                              </a> 
                                <a href="{{ url('panitia/ubah_password') }}/{{$panitia->id}}">
                                <button type="button" class="btn btn-warning"><i class="fa-solid fa-key"></i></button>
                              </a>    

                        </td>
                    </tr>

                    @endforeach


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection