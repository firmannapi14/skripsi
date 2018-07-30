<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Data</b> | Sertifikat</h3>
    </div>

    <?php
    
    include "lib/connection.php";
    $carikode = mysqli_query($conn, "SELECT id_report FROM tb_report") or die (mysqli_error($conn));
    $datakode = mysqli_fetch_array($carikode);
    $jumlah_data = mysqli_num_rows($carikode);
        if ($datakode) {
            $nilaikode = substr($jumlah_data[0], 1);
            $kode = (int) $nilaikode;
            $kode = $jumlah_data + 1;
            $kode_otomatis = "SRTF".str_pad($kode, 3, "0", STR_PAD_LEFT);
        } else {
            $kode_otomatis = "SRTF001";
        }

    ?>

    <div class="box-body">
                <form name="tambah" action="?tampil=proses_user" method="post" enctyoe="multipart/form-data" class="form-horizontal">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="label-control col-md-3">JUDUL SEMINAR/KEGIATAN</label>
                            <div class="col-md-6">
                                <input type="hidden" value="<?= $kode_otomatis ?>" name="id_sertif">
                                <textarea class="form-control" name="deskripsi" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-control col-md-3">JUDUL SEMINAR/KEGIATAN (ENGLISH)</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="judul_inggris" rows="3" required></textarea>
                            </div>
                        </div>  

                        <div class="form-group">
                            <label class="label-control col-md-3">TANGGAL TERBIT</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                        <input type="text" name="tgl_terbit" class="form-control pull-right" id="datepicker1" autocomplete="off" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-control col-md-3">INSTANSI PENYELENGGARA</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="instansi">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-control col-md-3">NAMA KOTA</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kota">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-control col-md-3">NEGARA</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="negara">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-control col-md-3">PERIODE</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                    <input type="text" name="periode_awal" class="form-control pull-right" id="datepicker2" autocomplete="off" required>
                                <span class="input-group-addon">sampai</span>
                                    <input type="text" name="periode_akhir" class="form-control pull-right" id="datepicker3" autocomplete="off" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-control col-md-3"></label>
                            <div class="col-md-6">
                            <div class="checkbox">
                            <label>
                                <input type="checkbox" name="check" value="1"> Saya yakin jika data yang telah saya masukkan telah <b>Benar</b> dan <b>Sesuai</b> 
                            </label>
                            </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="label-control col-md-3"></label>
                            <div class="col-md-6">
                                <button type="submit" name="tambah" class="btn btn-primary">
                                    <span class="fa fa-refresh"></span> PROSES
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class="box-footer">
                
                <?php 
                

                $tmpArrper = array();

                  if (isset($_POST['deskripsi'])) {

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
                    
                    $hasil = hitungMetode($tmpArrper);
    
                    $input  = mysqli_query($conn, "INSERT INTO tb_report SET
                    id_report               = '$kode_otomatis',
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
