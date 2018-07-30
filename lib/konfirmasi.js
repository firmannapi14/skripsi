//------------------------- Hapus KATEGORI ------------------------------
$(document).ready(function(){

    $('#report_hapus').on('show.bs.modal', function (event) {
    var div = $(event.relatedTarget)
    var id = div.data('id')
    var modal = $(this)
    
    modal.find('#hapus-report').attr("href","?tampil=konfirmasi_hapus&id="+id);
    })}
    );