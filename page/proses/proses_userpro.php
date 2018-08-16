<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Data</b> | Sertifikat</h3>
    </div>
    <div class="box-body">
                
                <?php

                    $tmpArrper = array();
                    
                    $deskripsi = preg_replace('/[^A-Za-z0-9\ ]/', '', $_POST['deskripsi']);
                    $myfile = fopen("stemming.txt", "w") or die("Unable to open file!");
                    $txt = $deskripsi;
                    fwrite($myfile, $txt);
                    fclose($myfile);
                  
                  if (isset($deskripsi)) {

                      $output = null;
                      exec("python coba.py", $output, $return);

                      $arrper     = preg_replace('/[^A-Za-z0-9\ ]/', '', $output[2]);
                      $tmpArrper  = explode(" ",$arrper);
                      
                      }
                    
                    $hasil = hitungMetode($tmpArrper);
                
                    $input  = mysqli_query($conn, "INSERT INTO tb_report SET
                    id_report               = '$_POST[id_sertif]',
                    nim                     = '$id',
                    kode_klasifikasi        = '$hasil',
                    judul_indonesia         = '$deskripsi',
                    judul_inggris           = '$_POST[judul_inggris]',
                    judul_stem              = '$arrper',
                    tgl_terbit              = '$_POST[tgl_terbit]',
                    instansi_penyelenggara  = '$_POST[instansi]',
                    nama_kota               = '$_POST[kota]',
                    nama_negara             = '$_POST[negara]',
                    periode_awal            = '$_POST[periode_awal]',
                    periode_akhir           = '$_POST[periode_akhir]',
                    status_report           = 0
                    ") or die (mysqli_error($conn));

                    if ($input) {
                        echo "<div class='callout callout-success'>";
                        echo "<p>Data berhasil disimpan <span class='fa fa-check'></span></p>"; 
                        echo "<meta http-equiv='refresh' content='1;
                            url=?tampil=konfirmasi'>";
                        echo "</div>";
                    }
                    
                ?>
                </div>
                
          <!-- /.box -->
        </div>
  </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
