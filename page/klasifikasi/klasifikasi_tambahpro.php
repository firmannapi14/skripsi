<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>DATA</b> | KLASIFIKASI tambah</h3>
      </div>

        <div class="box-body">

          <?php
            if (isset($_POST['simpan'])) {
              
                $input  = mysqli_query($conn, "INSERT INTO tb_klasifikasi SET
                        kode_klasifikasi  = '$_POST[kd_klasifikasi]',
                        klasifikasi       = '$_POST[klasifikasi]',
                        deskripsi         = '$_POST[deskripsi]'
                        ")  or die (mysqli_error($koneksi));

            if ($input){ ?>
                <div class="callout callout-success">
                  <p>Data berhasil disimpan<span class="fa fa-check"></span></p> 
                  <?php echo "<meta http-equiv='refresh' content='1;
                  url=?tampil=klasifikasi'>"; ?>
                </div>
            <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</section>
