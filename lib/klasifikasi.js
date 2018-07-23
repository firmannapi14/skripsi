//------------------------- Hapus KLASIFIKASI ------------------------------
$(document).ready(function(){

    $('#klasifikasi_hapus').on('show.bs.modal', function (event) {
    var div = $(event.relatedTarget)
    var id = div.data('id')
    var modal = $(this)
    
    modal.find('#hapus-klasifikasi').attr("href","?tampil=klasifikasi_hapus&id="+id);
    })}
);