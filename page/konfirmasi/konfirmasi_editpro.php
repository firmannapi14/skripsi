<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>DATA</b> | KONFIRMASI Edit</h3>
      </div>

        <div class="box-body">

    <?php

        $deskripsi = $_POST['deskripsi'];
                              
        $myfile = fopen("stemming.txt", "w") or die("Unable to open file!");
        $txt = $_POST['deskripsi'];
        fwrite($myfile, $txt);
        fclose($myfile);

        if (isset($deskripsi)) {

        $output = null;
        exec("python coba.py", $output, $return);

        $arrper     = preg_replace('/[^A-Za-z0-9\ ]/', '', $output[2]);
        $tmpArrper  = explode(" ",$arrper);

        }

        $hasil = $hasil = hitungMetode($tmpArrper);

        $input  = mysqli_query($conn, "UPDATE tb_report SET
                    kode_klasifikasi        = '$hasil',
                    judul_indonesia         = '$_POST[deskripsi]',
                    judul_inggris           = '$_POST[judul_inggris]',
                    judul_stem              = '$arrper',
                    tgl_terbit              = '$_POST[tgl_terbit]',
                    instansi_penyelenggara  = '$_POST[instansi]',
                    nama_kota               = '$_POST[kota]',
                    nama_negara             = '$_POST[negara]',
                    periode_awal            = '$_POST[periode_awal]',
                    periode_akhir           = '$_POST[periode_akhir]'
                    WHERE id_report         = '$_POST[id_report]'
                    ") or die (mysqli_error($conn));

    if ($input) { ?>
      <div class="callout callout-success">
        <p>Data berhasil diedit <span class="fa fa-check"></span></p> 
        <?php echo "<meta http-equiv='refresh' content='1;
        url=?tampil=konfirmasi'>"; ?>
      </div>
    <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
