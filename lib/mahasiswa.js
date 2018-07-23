//------------------------- Hapus KATEGORI ------------------------------
$(document).ready(function(){

$('#mahasiswa_hapus').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget)
var id = div.data('id')
var modal = $(this)

modal.find('#hapus-mahasiswa').attr("href","?tampil=mahasiswa_hapus&id="+id);
})}
);