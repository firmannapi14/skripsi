//------------------------- Hapus KLASIFIKASI ------------------------------
$(document).ready(function(){

    $('#dataolah_hapus').on('show.bs.modal', function (event) {
    var div = $(event.relatedTarget)
    var id = div.data('id')
    var modal = $(this)
    
    modal.find('#hapus-dataolah').attr("href","?tampil=dataolah_hapus&id="+id);
    })}
);