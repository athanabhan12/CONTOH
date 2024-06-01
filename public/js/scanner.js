function onScanSuccess(decodedText, decodedResult) {
    // handle the scanned code as you like, for example:
  //   console.log(`Code matched = ${decodedText}`, decodedResult);
  
  $.ajax({
          type: "POST",
          url: '/scan',
          data: {
              id_peserta: decodedText
          },
          beforeSend: function (xhr) {
              $('.loading').removeClass('hide');
          },
          success: function (response, status, xhr) {
              
              $("#nama_peserta").val(response.peserta[0]['nama_peserta'])
              $("#no_telepon").val(response.peserta[0]['no_telepon'])
              $("#kelas").val(response.peserta[0]['kelas'])
          }
      });
  
  
  }
  
  function onScanFailure(error) {
    // handle scan failure, usually better to ignore and keep scanning.
    // for example:
  }
  
  let html5QrcodeScanner = new Html5QrcodeScanner(
    "reader",
    { fps: 10, qrbox: {width: 250, height: 250} },
    /* verbose= */ false);
  html5QrcodeScanner.render(onScanSuccess, onScanFailure);