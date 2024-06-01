@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Data Tour</h4>
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
            <a href="#">Data</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
              <a href="{{ url('laporan_data_tour/pdf_data_tour') }}" class="btn btn-danger mr-4 ml-auto" style="float: right;"><i class="fa-solid fa-plus ml-2"></i>Export PDF</a>
            </div>
          </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Tour</th>
                    <th>Tanggal Berangkat tour</th>
                    <th>Tanggal Selesai Tour</th>
                    <th>Destinasi</th>
                    <th>Rombongan Tour</th>
                    <th>Jumlah Peserta</th>
                    <th>Jumlah Kendaraan</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($laporan_data_tour as $data_tour)
                        
                    <tr style="text-align: center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data_tour->nama_tour }}</td>
                        <td>{{ $data_tour->tgl_berangkat_tour }}</td>
                        <td>{{ $data_tour->tgl_selesai_tour }}</td>
                        <td>{{ $data_tour->destinasi_tour }}</td>
                        <td>{{ $data_tour->rombongan_tour }}</td> 
                        <td>{{ $data_tour->jumlah_peserta_tour }}</td> 
                        <td>{{ $data_tour->jumlah_kendaraan }}</td> 
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