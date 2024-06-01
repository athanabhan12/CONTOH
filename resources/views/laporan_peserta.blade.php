@extends('layouts.main')

@section('content')


<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Report Peserta</h4>
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
            <a href="#">Report</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Report Peserta</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Report Peserta</div>
            </div>
            <div class="card-body">
              <form id="frm-data">
                @csrf
                <div class="container">
              <div class="row">
              <div class="form-group col-12">
                <label for="email2">Rombongan Tour</label>
                <select name="rombongan_tour" class="form-control" id="rombongan_tour">


                </select>
              </div>  
              </div>
            </div>

              <div class="row">
              <div class="form-group col-6">
                <label for="email2">Tanggal Berankat Tour</label>
                <input type="date" name="tgl_berangkat_tour" id="tgl_berangkat_tour" class="form-control">
              </div>
                <div class="form-group col-6">
                  <label>Tanggal Selesai Tour</label>
                  <input type="date" name="tgl_selesai_tour" id="tgl_selesai_tour" class="form-control">
                </div>
              </div>
              <div class="button mt-3" style="float: ">
                <button class="btn btn-success" style="float: right;" id="btnCreateExcel">Excel</button>
                <button class="btn btn-danger" style="float: right;" id="btnCreatePdf">Pdf</button>
                {{-- <a href="{{ url('pelanggan/pdf?id_rombongan=') }}" target="_blank" class="btn btn-danger mr-3 " style="float: right;" id="btnCreatePdf">PDF</a> --}}
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

{{-- @push('scripts')
    <script>
          function(document).ready(function (){

$('#btnCreateExcel').click(function (e) {
    e.preventDefault();
    createExcel();
});

$('#btnCreatePdf').click(function (e) {
    e.preventDefault();
    createPDF();
});

});

// TOMBOL to PDF Detail
function createPDF() {

var params = $('#frm-data').serialize();
var url = "{{ url('laporan_peserta/pdf_peserta') }}?" + params;
window.open(url, '_blank');

}
    </script>
@endpush --}}
@endsection

