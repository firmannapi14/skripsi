<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>DATA</b> | KLASIFIKASI Edit</h3>
      </div>

        <div class="box-body">

    <?php

        $input  = mysqli_query($conn, "UPDATE tb_klasifikasi SET
                    klasifikasi       = '$_POST[klasifikasi]',
                    deskripsi         = '$_POST[deskripsi]'
                    WHERE kode_klasifikasi = '$_POST[kd_klasifikasi]'
                    ") or die (mysqli_error($conn));

    if ($input) { ?>
      <div class="callout callout-success">
        <p>Data berhasil diedit <span class="fa fa-check"></span></p> 
        <?php echo "<meta http-equiv='refresh' content='1;
        url=?tampil=klasifikasi'>"; ?>
      </div>
    <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
