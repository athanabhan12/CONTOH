    $(document).ready(function (){

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