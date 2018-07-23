<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>ADMIN</b> | PROFIL Edit</h3>
      </div>

        <div class="box-body">

    <?php

        $input  = mysqli_query($conn, "UPDATE tb_admin SET
                    username        = '$_POST[username]',
                    password        = '$_POST[password]',
                    telepon         = '$_POST[telepon]',
                    email           = '$_POST[email]'
                    WHERE kode_admin = '$_POST[id]'
                    ") or die (mysqli_error($conn));

    if ($input) { ?>
      <div class="callout callout-success">
        <p>Data berhasil diedit<span class="fa fa-check"></span></p> 
        <?php echo "<meta http-equiv='refresh' content='1;
        url=?tampil=profil'>"; ?>
      </div>
    <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
