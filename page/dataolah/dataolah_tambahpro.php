<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>DATA</b> | List</h3>
      </div>

        <div class="box-body">

          <?php

              $judul        = $_POST['judul'];
              $tgl          = $_POST['tgl_terbit'];
              $klasifikasi  = $_POST['klasifikasi'];
              $catatan      = addslashes($_POST['catatan']);
            
                $myfile = fopen("deskripsi.txt", "w") or die("Unable to open file!");
                $txt = addslashes($_POST['catatan']);
                fwrite($myfile, $txt);
                fclose($myfile);

                if (isset($catatan)) {
                    $output = null;
                    exec("python coba.py", $output, $return);                

                    $arrper     = preg_replace('/[^A-Za-z0-9\ ]/', '', $output[2]);
                    $tmpArrper  = explode(" ",$arrper);
                    $isicatatan = implode(" ",$tmpArrper);
                    }

                $input  = mysqli_query($conn, "INSERT INTO tb_dataolah SET
                        judul_indonesia     = '$judul',
                        tanggal_terbit      = '$tgl',
                        kode_klasifikasi    = '$klasifikasi',    
                        catatan             = '$catatan',
                        normalisasi         = '$isicatatan'
                        ")  or die (mysqli_error($koneksi));
                
                if ($input) { ?>
                    <div class="callout callout-success">
                      <p>Data berhasil ditambahkan <span class="fa fa-check"></span></p> 
                      <?php echo "<meta http-equiv='refresh' content='1;
                      url=?tampil=dataolah'>"; ?>
                    </div>
                  <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
