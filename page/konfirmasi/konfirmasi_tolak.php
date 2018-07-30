<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-danger">
      <div class="box-header">
          <h3 class="box-title"><b>DATA</b> | KONFIRMASI tolak</h3>
      </div>

        <div class="box-body">
          <div class="callout callout-success">

        <?php

              $input  = mysqli_query($conn, "UPDATE tb_report SET 
                                            status_report   = 2,
                                            deleted_at      = NULL
                                            WHERE id_report='$_GET[id]'")
                                      or die (mysqli_error($conn));

            if ($input){
              echo"Draft tidak sesuai berhasil diubah";
              echo"<meta http-equiv='refresh' content='1;
              url=?tampil=konfirmasi'>";
            }
        ?>

 <span class="glyphicon glyphicon-ok"></span>
    </div>
    </div>
  </div>
</div>
</div>
</section>
