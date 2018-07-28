<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Data</b> | Sertifikat</h3>
    </div>

    <div class="box-body">
                <form name="tambah" action="?tampil=proses_user" method="post" enctyoe="multipart/form-data" class="form-horizontal">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="label-control col-md-3">JUDUL SEMINAR/KEGIATAN</label>
                            <div class="col-md-6">
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
                    
                    $tmpklas    = array();
                    $tmpterm    = array();
                    $tmptermd1  = array();
                    $tmptermd2  = array();
                    $tmptermd3  = array();
                    $tmptermd4  = array();
                    $tmptermd5  = array();
                    $tmptermd6  = array();
                
                    
                    $sql = mysqli_query($conn, "SELECT * FROM tb_klasifikasi");
                    while($data = mysqli_fetch_array($sql)) {
                        $pecah_data = array($data['kode_klasifikasi']);
                        $tmpklas = array_merge($tmpklas, $pecah_data);
                    }


                    $sql = mysqli_query($conn, "SELECT normalisasi FROM tb_dataolah");
                    while($data = mysqli_fetch_array($sql)) {
                        $pecah_data = explode(" ", $data['normalisasi']);
                        $tmpterm = array_merge($tmpterm, $pecah_data);
                    }

                    $tmpterm    = array_merge($tmpterm, $tmpArrper);
                    $tmp1term   = array_unique($tmpterm);
                    $term       = array_values($tmp1term);

                    // Bagian untuk memproses Term di Dokumen 1 yaitu Bahasa Internasional -------------
                    $sql = mysqli_query($conn, "SELECT normalisasi FROM tb_dataolah WHERE kode_klasifikasi='KLS1807001'");
                    while($data = mysqli_fetch_array($sql)) {
                        $pecah_data = explode(" ", $data['normalisasi']);
                        $tmptermd1 = array_merge($tmptermd1, $pecah_data);
                    }
                    
                    $tmp1termd1 = array_unique($tmptermd1);
                    $d1         = array_values($tmp1termd1);

                    // Bagian untuk memproses Term di Dokumen 2 yaitu Magang Industri -------------
                    $sql = mysqli_query($conn, "SELECT normalisasi FROM tb_dataolah WHERE kode_klasifikasi='KLS1807002'");
                    while($data = mysqli_fetch_array($sql)) {
                        $pecah_data = explode(" ", $data['normalisasi']);
                        $tmptermd2 = array_merge($tmptermd2, $pecah_data);
                    }
                    
                    $tmp2termd2 = array_unique($tmptermd2);
                    $d2         = array_values($tmp2termd2);

                    // Bagian untuk memproses Term di Dokumen 3 yaitu Pendidikan Karakter -------------
                    $sql = mysqli_query($conn, "SELECT normalisasi FROM tb_dataolah WHERE kode_klasifikasi='KLS1807003'");
                    while($data = mysqli_fetch_array($sql)) {
                        $pecah_data = explode(" ", $data['normalisasi']);
                        $tmptermd3 = array_merge($tmptermd3, $pecah_data);
                    }
                    
                    $tmp3termd3 = array_unique($tmptermd3);
                    $d3         = array_values($tmp3termd3);

                    // Bagian untuk memproses Term di Dokumen 4 yaitu Pengalaman Organisasi -------------
                    $sql = mysqli_query($conn, "SELECT normalisasi FROM tb_dataolah WHERE kode_klasifikasi='KLS1807004'");
                    while($data = mysqli_fetch_array($sql)) {
                        $pecah_data = explode(" ", $data['normalisasi']);
                        $tmptermd4 = array_merge($tmptermd4, $pecah_data);
                    }
                    
                    $tmp4termd4 = array_unique($tmptermd4);
                    $d4         = array_values($tmp4termd4);

                    // Bagian untuk memproses Term di Dokumen 5 yaitu Tugas Akhir/Skripsi -------------
                    $sql = mysqli_query($conn, "SELECT normalisasi FROM tb_dataolah WHERE kode_klasifikasi='KLS1807005'");
                    while($data = mysqli_fetch_array($sql)) {
                        $pecah_data = explode(" ", $data['normalisasi']);
                        $tmptermd5 = array_merge($tmptermd5, $pecah_data);
                    }
                    
                    $tmp5termd5 = array_unique($tmptermd5);
                    $d5         = array_values($tmp5termd5);

                    // Bagian untuk memproses Term di Dokumen 6 yaitu Penghargaan dan Kejuaraan -------------
                    $sql = mysqli_query($conn, "SELECT normalisasi FROM tb_dataolah WHERE kode_klasifikasi='KLS1807006'");
                    while($data = mysqli_fetch_array($sql)) {
                        $pecah_data = explode(" ", $data['normalisasi']);
                        $tmptermd6 = array_merge($tmptermd6, $pecah_data);
                    }
                    
                    $tmp6termd6 = array_unique($tmptermd6);
                    $d6         = array_values($tmp6termd6);



                    //Perulangan Baris ------------------------

                    $jumquery   = array(); 
                    $jumkad1    = array();
                    $jumkad2    = array();
                    $jumkad3    = array();
                    $jumkad4    = array();
                    $jumkad5    = array();
                    $jumkad6    = array();
                    $df         = array();
                    $d_df       = array();
                    $idf        = array();
                    $wdtq       = array();
                    $wdtd1      = array();
                    $wdtd2      = array();
                    $wdtd3      = array();
                    $wdtd4      = array();
                    $wdtd5      = array();
                    $wdtd6      = array();
                    $wd5d1      = array();
                    $wd5d2      = array();
                    $wd5d3      = array();
                    $wd5d4      = array();
                    $wd5d5      = array();
                    $wd5d6      = array();
                    $sumwd5d1   = array();
                    $sumwd5d2   = array();
                    $sumwd5d3   = array();
                    $sumwd5d4   = array();
                    $sumwd5d5   = array();
                    $sumwd5d6   = array();
                    $powwdtq    = array();
                    $powwdtd1   = array();
                    $powwdtd2   = array();
                    $powwdtd3   = array();
                    $powwdtd4   = array();
                    $powwdtd5   = array();
                    $powwdtd6   = array();
                    $sumpowq    = array();
                    $sumpowd1   = array();
                    $sumpowd2   = array();
                    $sumpowd3   = array();
                    $sumpowd4   = array();
                    $sumpowd5   = array();
                    $sumpowd6   = array();
                    $akarq      = array();
                    $akard1     = array();
                    $akard2     = array();
                    $akard3     = array();
                    $akard4     = array();
                    $akard5     = array();
                    $akard6     = array();
                    $cosd1      = array();
                    $cosd2      = array();
                    $cosd3      = array();
                    $cosd4      = array();
                    $cosd5      = array();
                    $cosd6      = array();
                    


                    for ($d=0;$d<1;$d++) {
                        $sumwd5d1[$d]    = 0;
                        $sumwd5d2[$d]    = 0;
                        $sumwd5d3[$d]    = 0;
                        $sumwd5d4[$d]    = 0;
                        $sumwd5d5[$d]    = 0;
                        $sumwd5d6[$d]    = 0;
                        $sumpowq[$d]     = 0;
                        $sumpowd1[$d]    = 0;
                        $sumpowd2[$d]    = 0;
                        $sumpowd3[$d]    = 0;
                        $sumpowd4[$d]    = 0;
                        $sumpowd5[$d]    = 0;
                        $sumpowd6[$d]    = 0;
                        $akarq[$d]       = 0;
                        $akard1[$d]      = 0;
                        $akard2[$d]      = 0;
                        $akard3[$d]      = 0;
                        $akard4[$d]      = 0;
                        $akard5[$d]      = 0;
                        $akard6[$d]      = 0;
                        $cosd1[$d]       = 0;
                        $cosd2[$d]       = 0;
                        $cosd3[$d]       = 0;
                        $cosd4[$d]       = 0;
                        $cosd5[$d]       = 0;
                        $cosd6[$d]       = 0;
                    }

                    for ($c=0;$c<count($term);$c++) {
                        $jumquery[$c]   = 0;
                        $jumkad1[$c]    = 0;
                        $jumkad2[$c]    = 0;
                        $jumkad3[$c]    = 0;
                        $jumkad4[$c]    = 0;
                        $jumkad5[$c]    = 0;
                        $jumkad6[$c]    = 0;
                        $df[$c]         = 0;
                        $d_df[$c]       = 0;
                        $idf[$c]        = 0;
                        $wdtq[$c]       = 0;
                        $wdtd1[$c]      = 0;
                        $wdtd2[$c]      = 0;
                        $wdtd3[$c]      = 0;
                        $wdtd4[$c]      = 0;
                        $wdtd5[$c]      = 0;
                        $wdtd6[$c]      = 0;
                        $wd5d1[$c]      = 0;
                        $wd5d2[$c]      = 0;
                        $wd5d3[$c]      = 0;
                        $wd5d4[$c]      = 0;
                        $wd5d5[$c]      = 0;
                        $wd5d6[$c]      = 0;
                        $powwdtq[$c]    = 0;
                        $powwdtd1[$c]   = 0;
                        $powwdtd2[$c]   = 0;
                        $powwdtd3[$c]   = 0;
                        $powwdtd4[$c]   = 0;
                        $powwdtd5[$c]   = 0;
                        $powwdtd6[$c]   = 0;
                        
                    }

                    for ($a=0;$a<count($term);$a++) {

                        for ($b=0;$b<1;$b++) {
                            if (in_array($term[$a],$tmpArrper)) {
                                $jumquery[$a] = 1;
                            } else {
                                $jumquery[$a] = 0;
                            }
                        }
                        
                        for ($b=0;$b<1;$b++) {
                            if (in_array($term[$a],$d1)) {
                                $jumkad1[$a] = 1;
                                $df[$a] = $df[$a] + $jumkad1[$a];
                            } else {
                                $jumkad1[$a] = 0;
                            }
                        }

                        for ($b=0;$b<1;$b++) {
                            if (in_array($term[$a],$d2)) {
                                $jumkad2[$a] = 1;
                                $df[$a] = $df[$a] + $jumkad2[$a];
                            } else {
                                $jumkad2[$a] = 0;
                            }
                        }

                        for ($b=0;$b<1;$b++) {
                            if (in_array($term[$a],$d3)) {
                                $jumkad3[$a] = 1;
                                $df[$a] = $df[$a] + $jumkad3[$a];
                            } else {
                                $jumkad3[$a] = 0;
                            }
                        }

                        for ($b=0;$b<1;$b++) {
                            if (in_array($term[$a],$d4)) {
                                $jumkad4[$a] = 1;
                                $df[$a] = $df[$a] + $jumkad4[$a];
                            } else {
                                $jumkad4[$a] = 0;
                            }
                        }

                        for ($b=0;$b<1;$b++) {
                            if (in_array($term[$a],$d5)) {
                                $jumkad5[$a] = 1;
                                $df[$a] = $df[$a] + $jumkad5[$a];
                            } else {
                                $jumkad5[$a] = 0;
                            }
                        }

                        for ($b=0;$b<1;$b++) {
                            if (in_array($term[$a],$d6)) {
                                $jumkad6[$a] = 1;
                                $df[$a] = $df[$a] + $jumkad6[$a];
                            } else {
                                $jumkad6[$a] = 0;
                            }
                        }

                        for ($b=0;$b<1;$b++) {
                            if ($df[$a] == 0) {
                                $d_df[$a] = 0;
                            } else {
                                $d_df[$a] = 6/$df[$a];
                            }
                            
                        }

                        for ($b=0;$b<1;$b++) {
                            if ($d_df[$a] == 0) {
                                $idf[$a] = 0;
                            } else {
                                $idf[$a] = log10($d_df[$a]);
                            }
                            
                        }

                        for ($b=0;$b<1;$b++) {
                            $wdtq[$a] = $jumquery[$a] * $idf[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wdtd1[$a] = $jumkad1[$a] * $idf[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wdtd2[$a] = $jumkad2[$a] * $idf[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wdtd3[$a] = $jumkad3[$a] * $idf[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wdtd4[$a] = $jumkad4[$a] * $idf[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wdtd5[$a] = $jumkad5[$a] * $idf[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wdtd6[$a] = $jumkad6[$a] * $idf[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wd5d1[$a] = $wdtq[$a] * $wdtd1[$a];
                            $sumwd5d1[$b] += $wd5d1[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wd5d2[$a] = $wdtq[$a] * $wdtd2[$a];
                            $sumwd5d2[$b] += $wd5d2[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wd5d3[$a] = $wdtq[$a] * $wdtd3[$a];
                            $sumwd5d3[$b] += $wd5d3[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wd5d4[$a] = $wdtq[$a] * $wdtd4[$a];
                            $sumwd5d4[$b] += $wd5d4[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wd5d5[$a] = $wdtq[$a] * $wdtd5[$a];
                            $sumwd5d5[$b] += $wd5d5[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $wd5d6[$a] = $wdtq[$a] * $wdtd6[$a];
                            $sumwd5d6[$b] += $wd5d6[$a];
                        }
                        
                        for ($b=0;$b<1;$b++) {
                            $powwdtq[$a] = pow($wdtq[$a],2);
                            $sumpowq[$b] += $powwdtq[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $powwdtd1[$a] = pow($wdtd1[$a],2);
                            $sumpowd1[$b] += $powwdtd1[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $powwdtd2[$a] = pow($wdtd2[$a],2);
                            $sumpowd2[$b] += $powwdtd2[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $powwdtd3[$a] = pow($wdtd3[$a],2);
                            $sumpowd3[$b] += $powwdtd3[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $powwdtd4[$a] = pow($wdtd4[$a],2);
                            $sumpowd4[$b] += $powwdtd4[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $powwdtd5[$a] = pow($wdtd5[$a],2);
                            $sumpowd5[$b] += $powwdtd5[$a];
                        }

                        for ($b=0;$b<1;$b++) {
                            $powwdtd6[$a] = pow($wdtd6[$a],2);
                            $sumpowd6[$b] += $powwdtd6[$a];
                        }
                    }

                    for ($a=0;$a<1;$a++) {
                        $akarq[$a] = sqrt($sumpowq[$a]); // Hasil Akar dari SUM Q
                    }

                    for ($a=0;$a<1;$a++) {
                        $akard1[$a] = sqrt($sumpowd1[$a]); // Hasil Akar dari SUM D1
                    }

                    for ($a=0;$a<1;$a++) {
                        $akard2[$a] = sqrt($sumpowd2[$a]); // Hasil Akar dari SUM D2
                    }

                    for ($a=0;$a<1;$a++) {
                        $akard3[$a] = sqrt($sumpowd3[$a]); // Hasil Akar dari SUM D3
                    }

                    for ($a=0;$a<1;$a++) {
                        $akard4[$a] = sqrt($sumpowd4[$a]); // Hasil Akar dari SUM D4
                    }

                    for ($a=0;$a<1;$a++) {
                        $akard5[$a] = sqrt($sumpowd5[$a]); // Hasil Akar dari SUM D5
                    }

                    for ($a=0;$a<1;$a++) {
                        $akard6[$a] = sqrt($sumpowd6[$a]); // Hasil Akar dari SUM D
                    }

                    for ($a=0;$a<1;$a++) {
                        if ($sumpowq[$a] == 0) {
                            $cosd1[$a] = 0;
                        } else {
                            $cosd1[$a] = $sumwd5d1[$a]/($sumpowq[$a]*$sumpowd1[$a]);
                        }  
                    }

                    for ($a=0;$a<1;$a++) {
                        if ($sumpowq[$a] == 0) {
                            $cosd2[$a] = 0;
                        } else {
                            $cosd2[$a] = $sumwd5d2[$a]/($sumpowq[$a]*$sumpowd2[$a]);
                        }
                    }

                    for ($a=0;$a<1;$a++) {
                        if ($sumpowq[$a] == 0) {
                            $cosd3[$a] = 0;
                        } else {
                            $cosd3[$a] = $sumwd5d3[$a]/($sumpowq[$a]*$sumpowd3[$a]);
                        }
                    }

                    for ($a=0;$a<1;$a++) {
                        if ($sumpowq[$a] == 0) {
                            $cosd4[$a] = 0;
                        } else {
                            $cosd4[$a] = $sumwd5d4[$a]/($sumpowq[$a]*$sumpowd4[$a]);
                        }
                    }

                    for ($a=0;$a<1;$a++) {
                        if ($sumpowq[$a] == 0) {
                            $cosd5[$a] = 0;
                        } else {
                            $cosd5[$a] = $sumwd5d5[$a]/($sumpowq[$a]*$sumpowd5[$a]);
                        }
                    }

                    for ($a=0;$a<1;$a++) {
                        if ($sumpowq[$a] == 0) {
                            $cosd6[$a] = 0;
                        } else {
                            $cosd6[$a] = $sumwd5d6[$a]/($sumpowq[$a]*$sumpowd6[$a]);
                        }
                    }

                    $isicosine = array();
                    $pindah = array();
                    
                    for ($a=0;$a<1;$a++) {
                        $pindah = array($cosd1[$a]);
                        $isicosine = array_merge($isicosine, $pindah);
                    }

                    for ($a=0;$a<1;$a++) {
                        $pindah = array($cosd2[$a]);
                        $isicosine = array_merge($isicosine, $pindah);
                    }

                    for ($a=0;$a<1;$a++) {
                        $pindah = array($cosd3[$a]);
                        $isicosine = array_merge($isicosine, $pindah);
                    }

                    for ($a=0;$a<1;$a++) {
                        $pindah = array($cosd4[$a]);
                        $isicosine = array_merge($isicosine, $pindah);
                    }

                    for ($a=0;$a<1;$a++) {
                        $pindah = array($cosd5[$a]);
                        $isicosine = array_merge($isicosine, $pindah);
                    }

                    for ($a=0;$a<1;$a++) {
                        $pindah = array($cosd6[$a]);
                        $isicosine = array_merge($isicosine, $pindah);
                    }
                    
                    $max = max($isicosine);

                    for ($a=0;$a<6;$a++) {
                        if ($isicosine[$a] == $max) {
                            $key = $a;
                        }
                    }

                    $hasil = $tmpklas[$key];

                    $input  = mysqli_query($conn, "INSERT INTO tb_report SET
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
                        status_report           = 1
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
