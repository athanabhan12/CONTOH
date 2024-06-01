@extends('layouts.main')

@section('content')

<div class="main-panel">
    <div class="content">
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title">Kegiatan Tour</h4>
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
              <a href="#">Kegiatan</a>
            </li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">

                <a href="{{ url('kegiatan/create_master_kegiatan') }}" class="btn btn-success ml-auto mr-3" style="float: right;"><i class="fa-solid fa-plus"></i> Tambah Master Kegiatan </a>
                <a href="{{ url('kegiatan/create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data </a>
  
              </div>
            </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="basic-datatables" class="display table table-striped table-hover" >
                    <thead>
                      <tr>
                      <th>No</th>
                      <th>Nama Kegiatan</th>
                      <th class="text-center">Lokasi Kegiatan</th>
                      <th>Jam Mulai</th>
                      <th>Jam Selesai</th>
                      <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
      
                      @foreach($kegiatan as $kegiatans)
                       <tr style="text-align: center;">
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $kegiatans->nama_kegiatan }}</td>
                          <td>{{ $kegiatans->lokasi_kegiatan }}</td>
                          <td>{{ $kegiatans->jam_mulai }}</td>
                          <td>{{ $kegiatans->jam_selesai }}</td>
                          {{-- <td>{{ \App\Library\helper::format_date_ind($pelanggan->tgl_berangkat_tour) }}</td> --}}
                          <td>
  
                              <a href="{{ url('kegiatan/edit') }}">
                                  <button type="button" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></button>
                                </a>
                                <a href="{{ url('kegiatan/delete') }}">
                                  <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </a> 
                                <a href="{{ url('kegiatan/detail') }}/{{ $kegiatans->id }}">
                                  <button type="button" class="btn btn-success"><i class="fa-solid fa-people-group"></i></button>
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