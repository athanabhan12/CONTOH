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
      <form id="updateForm" method="POST" action="{{ url('/registrasi_kegiatan/update_kegiatan') }}">
        @csrf
        <div class="row">
            <div class="col-6 mt-5">
                <input type="text" name="nama_peserta" id="nama_peserta" class="form-control">
            </div>
            <div class="col-6 mt-5">
                <input type="text" name="id_peserta" id="id_peserta" class="form-control" placeholder="ID PESERTA">
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5">
              <select class="form-control" name="id_master_kegiatan" id="id_master_kegiatan">
                <option value="kontol" disabled selected>Select an option</option>
                @foreach($kegiatan as $kegiatans)
                <option value="{{ $kegiatans->id }}">{{ $kegiatans->nama_kegiatan }}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="mt-3 col-12">
            <button class="btn btn-success mt-3" type="submit" id="konfirmasi" style="display: block; margin-left: auto; margin-right: auto;">SUBMIT</button>
        </div>
    </form>
    
    </div>
  </div>
  
</div>

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
  
  
  
  function onScanSuccess(decodedText, decodedResult) {
      let id_peserta = decodedText.split("|")[0];
      let nama_peserta = decodedText.split("|")[1];

      $('#id').val(id_peserta);
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
    var idValue = form.querySelector('input[name="id_peserta"]').value;
    form.action = form.action + '/' + idValue;
    form.submit(); // Kirimkan form setelah action diubah
});



    </script>

<!-- Tambahkan jQuery jika belum ada -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
//     $(document).ready(function() {
//     $('#updateForm').on('submit', function(event) {
//         event.preventDefault(); // Mencegah form dikirimkan secara default

//         var form = $(this);
//         var formData = form.serialize(); // Serialisasi data form
//         var idValue = form.find('input[name="id_peserta"]').val();
//         var actionUrl = form.attr('action') + '/' + idValue;

//         console.log('Form action URL:', actionUrl); // Debug URL

//         $.ajax({
//             url: actionUrl,
//             method: 'POST',
//             data: formData,
//             success: function(response) {
//                 // Tangani respons sukses
//                 console.log('Form submitted successfully');
//                 console.log(response); // Debug response
//                 alert('Form submitted successfully!');
//             },
//             error: function(xhr, status, error) {
//                 // Tangani kesalahan
//                 console.error('Error submitting form:', xhr.responseText); // Debug error
//                 alert('Error submitting form: ' + xhr.responseText);
//             }
//         });
//     });
// });

</script>




{{-- <script>
 $(document).ready(function(){
    $('#konfirmasi').click(function(e){
        e.preventDefault();
        
        var form = $('#updateForm');
        var url = form.attr('action');
        var formData = form.serialize();

        $.ajax({
            url: "/update_kegiatan", // Pastikan tanda koma terpasang di sini
            type: "POST",
            data: formData,
            success: function(response){
                // Logika untuk sukses
                alert('Data berhasil diperbarui');
                console.log(response);
            },
            error: function(xhr){
              console.log(data);
                // Logika untuk error
                alert('Terjadi kesalahan');
                console.log(xhr.responseText);
            }
        });
    });
});  
  </script> --}}
@endpush

@endsection

