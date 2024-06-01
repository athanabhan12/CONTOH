@extends('layouts.main')

@section('content')

<script src=""></script>

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Registrasi</h4>
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
        <div class="col-12 col-md-6" style="display: block; margin-left: auto; margin-right: auto;">
        <div id="reader" width="600px"></div>
    </div>
      </div>
<<<<<<< HEAD
      <form id="updateForm" action="{{ url('/registrasi/update') }}" method="POST">
=======
      <form action="{{ url('/registrasi/update') }}" method="POST" id="updateForm">
>>>>>>> 3f17a9c499e60892f5f0f88fbd2b172fafb6d9b3
        @csrf
      <div class="row">
        <div class="col-6 mt-5">
          <input type="text" name="nama_peserta" id="nama_peserta" class="form-control">
        </div>
<<<<<<< HEAD
        <div class="col-6 mt-5">
        <input type="text" name="id" id="id" class="form-control" placeholder="ID PESERTA">
      </div>
=======
      </div>
      <div class="row">
        <div class="col-12 form-control mt-5">
          <input type="text" name="id" id="id" class="form-control" placeholder="ID PESERTA">
        </div>
>>>>>>> 3f17a9c499e60892f5f0f88fbd2b172fafb6d9b3
    </div>
      <div class="mt-3 col-12">
        <button class="btn btn-success mt-3" id="konfirmasi" style="display: block; margin-left: auto; margin-right: auto;">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>
  
</div>

@push('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
 --}}
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
  
  
  
  function onScanSuccess(decodedText, decodedResult) {
<<<<<<< HEAD
      let id = decodedText.split("|")[0];
      let nama_peserta = decodedText.split("|")[1];
=======
  // handle the scanned code as you like, for example:
//   console.log(`Code matched = ${decodedText}`, decodedResult);
// alert(decodedText);
let id = decodedText.split("|")[0];
let nama_peserta = decodedText.split("|")[1];

$('#id').val(id);
$('#nama_peserta').val(nama_peserta);
>>>>>>> 3f17a9c499e60892f5f0f88fbd2b172fafb6d9b3

      $('#id').val(id);
      $('#nama_peserta').val(nama_peserta);

      
    }


function onScanFailure(error) {
  // handle scan failure, usually better to ignore and keep scanning.
  // for example:
//   console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 10, qrbox: {width: 250, height: 250} },
  /* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);


document.getElementById('updateForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah form dikirimkan secara default
    var form = event.target;
    var idValue = form.querySelector('input[name="id"]').value;
    form.action = form.action + '/' + idValue;
    form.submit(); // Kirimkan form setelah action diubah
});



    </script>
@endpush

@endsection

