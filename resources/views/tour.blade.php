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
            <a href="#">Data tour</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href="{{ url('tour/create') }}" class="btn btn-success"><i class="fa-solid fa-plus mr-2"></i> Tambah Data </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover" >
                  <thead>
                    <tr class="text-center">
                    <th>No</th>
                    <th>Nama Tour</th>
                    <th>Tgl Berangkat Tour</th>
                    <th>Tgl Selesai Tour</th>
                    <th>Destinasi Tour</th>
                    <th>Jumlah Peserta Tour</th>
                    <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($data_tours as $data_tour)
                           
                    <tr style="text-align: center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data_tour->nama_tour }}</td>
                        <td>{{ \App\Library\helper::format_date_ind($data_tour->tgl_berangkat_tour) }}</td>
                        <td>{{ \App\Library\helper::format_date_ind($data_tour->tgl_selesai_tour) }}</td>
                        <td>{{ $data_tour->destinasi_tour }}</td>
                        <td>{{ $data_tour->jumlah_peserta_tour }}</td>
                        <td>
                            <a href="{{ url('tour/edit') }}/{{$data_tour->id}}" data-confirm-delete="true">
                                <button type="button" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></button>
                              </a>
                                <a href="{{ url('kegiatan/show') }}/{{$data_tour->id}}">
                                <button type="button" class="btn btn-warning"><i class="fa-solid fa-list"></i></button>
                              </a> 
                              <a href="{{ url('pelanggan/show') }}/{{$data_tour->id}}" class="btn btn-success"><i class="fa-solid fa-people-group"></i></a>
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