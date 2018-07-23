<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>DATA</b> | MAHASISWA Edit</h3>
      </div>

        <div class="box-body">

    <?php

        $input  = mysqli_query($conn, "UPDATE tb_mahasiswa SET
                    nama_mahasiswa  = '$_POST[nama_mhs]',
                    jurusan         = '$_POST[jurusan]',
                    email           = '$_POST[email]',
                    telepon         = '$_POST[telepon]',
                    username        = '$_POST[username]',
                    password        = '$_POST[password]'
                    WHERE nim = '$_POST[nim]'
                    ") or die (mysqli_error($conn));

    if ($input) { ?>
      <div class="callout callout-success">
        <p>Data berhasil diedit <span class="fa fa-check"></span></p> 
        <?php echo "<meta http-equiv='refresh' content='1;
        url=?tampil=mahasiswa'>"; ?>
      </div>
    <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
