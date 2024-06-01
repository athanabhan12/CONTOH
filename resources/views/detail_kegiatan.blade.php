@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Daftar Hadir Kegiatan</h4>
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
            <a href="#">Daftar Hadir</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <h3><span class="badge badge-success">HADIR</span><span style="color: rgb(62, 207, 0); font-weight: bold; margin-left: 10px;">{{ $jumlah_hadir }}</span></h3>
                <h3 class="ml-4"><span class="badge badge-danger">BELUM HADIR</span><span style="color: rgb(219, 0, 0); font-weight: bold; margin-left: 10px;">{{ $belum_hadir }}</span></h3>
            </div>
          </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover" >
                  <thead>

                    <tr>
                    <th>No</th>
                    <th class="text-center">Nama Peserta</th>
                    <th>No.Telepon</th>
                    <th>No.Peserta Tour</th>
                    <th>Rombongan Tour</th>
                    <th>Kelas</th>
                    <th>No Bus/Kendaraan</th>
                    <th>Waktu Scan</th>
                    <th>Status Hadir</th>
                    </tr>

                  </thead>
                  <tbody>

                    @foreach ($kegiatan as $kegiatans)
                        
                    <tr style="text-align: center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kegiatans->nama_peserta }}</td>
                        <td>{{ $kegiatans->no_telepon }}</td>
                        <td>{{ $kegiatans->no_peserta_tour }}</td>
                        <td>{{ $kegiatans->rombongan_tour }}</td>
                        <td>{{ $kegiatans->kelas }}</td>
                        <td>{{ $kegiatans->no_bus_kendaraan }}</td>
                        <td>{{ $kegiatans->waktu_scan }}</td>
                        <td>
                        <?php
                        if ($kegiatans->status_kehadiran == 1) {
                          ?>
                          <span class="badge badge-success">Hadir</span>
                          <?php
                        } else {
                          ?>
                          <span class="badge badge-danger">Belum</span>
                          <?php
                        }
                          ?>
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