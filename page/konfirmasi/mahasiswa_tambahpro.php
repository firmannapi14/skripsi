<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>DATA</b> | MAHASISWA tambah</h3>
      </div>

        <div class="box-body">

          <?php
            if (isset($_POST['simpan'])) {
              
                $input  = mysqli_query($conn, "INSERT INTO tb_mahasiswa SET
                        nim             = '$_POST[nim]',
                        nama_mahasiswa  = '$_POST[nama_mhs]',
                        jurusan         = '$_POST[jurusan]',
                        email           = '$_POST[email]',
                        telepon         = '$_POST[telepon]',
                        username        = '$_POST[username]',
                        password        = '$_POST[password]',
                        status          = 'Aktif'
                        ")  or die (mysqli_error($koneksi));

            if ($input){ ?>
                <div class="callout callout-success">
                  <p>Data berhasil disimpan<span class="fa fa-check"></span></p> 
                  <?php echo "<meta http-equiv='refresh' content='1;
                  url=?tampil=mahasiswa'>"; ?>
                </div>
            <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</section>
