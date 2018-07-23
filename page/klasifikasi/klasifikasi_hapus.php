<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-danger">
      <div class="box-header">
          <h3 class="box-title"><b>DATA</b> | KLASIFIKASI Hapus</h3>
      </div>

        <div class="box-body">
          <div class="callout callout-success">

        <?php

              // querry untuk melakukan delete
              $input  = mysqli_query($conn, "DELETE FROM tb_klasifikasi WHERE kode_klasifikasi='$_GET[id]'")
                                      or die (mysqli_error($conn));

            if ($input){
              echo"Data berhasil dihapus";
              echo"<meta http-equiv='refresh' content='1;
              url=?tampil=klasifikasi'>";
            }
        ?>

 <span class="glyphicon glyphicon-ok"></span>
    </div>
    </div>
  </div>
</div>
</div>
</section>
