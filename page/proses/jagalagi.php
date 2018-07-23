<!-- section untuk input pertanyaan -->
<section class="content">
  <div class="row">

    <div class="col-xs-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title"><b>INPUT</b> Pertanyaan | Tokenizing - Filtering - Stemming </h3>
        </div>

        <div class="box-body">
          <form name="tambah" action="?tampil=proses" method="post" enctype="multipart/form-data"
            class="form-horizontal">

            <div class="col-md-12">
              <div class="form-group">
                <label class="label-control col-md-2">PERTANYAAN</label>
                <div class="col-md-6">
                  <input name="pertanyaan" class="form-control" rows="5" placeholder="Isikan Pertanyaan ..." required>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label class="label-control col-md-2"></label>
                <div class="col-md-6">
                  <button type="Submit" name="tambah" class="btn btn-primary">
                      <span class="fa fa-refresh"></span> PROSES</button>
                </div>
              </div>
            </div>
          </div>

            <div class="box-footer">
              <?php

                  $tmpArrper = array();

                  if (isset($_POST['pertanyaan'])) {
                      $pertanyaan = $_POST['pertanyaan'];
                      $myfile = fopen("stemming.txt", "w") or die("Unable to open file!");
                      $txt = $_POST['pertanyaan'];
                      fwrite($myfile, $txt);
                      fclose($myfile);
                  }
                  if (isset($pertanyaan)) {
                      echo "Kata Awal : <b>".$pertanyaan."</b>";
                      $output = null;
                      exec("python coba.py", $output, $return);
                      echo "<pre>";
                      print_r($output);
                      echo "</pre>";
                      $arrper     = preg_replace('/[^A-Za-z0-9\ ]/', '', $output[2]);
                      $tmpArrper  = explode(" ",$arrper);
                      echo "<pre>";
                      print_r($tmpArrper);
                      echo "</pre>"; 
                      }
                  
              ?>
            </div>

          </form>
        </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>

<!-- section untuk proses TF IDF -->
<section class="content">
  <div class="row">

    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><b>PROSES</b> | TF IDF - (WDT = TF.IDF)</h3>
        </div>

        <div class="box-body">
        <?php 

            $arrayData = array();
            $push     = array();
            $sql = mysqli_query($conn, "SELECT kata_kunci FROM tbl_basispengetahuan")
                    or die(mysqli_error($conn));
            $hitSql = mysqli_num_rows($sql);
            while($data = mysqli_fetch_array($sql)) {
              
              $isi      = explode(" ", $data['kata_kunci']);
              array_push($push,$isi);
              $arrayData = array_merge($arrayData,$isi);

            }
            echo "<pre>";
            echo count($push);
            echo "</pre>";
            $tmp1   = array_unique($arrayData);
            $tmp2   = array_values($tmp1);
            $hitung = count($tmp2);
        ?>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px" rowspan="2" class="text-center">TERM</th>
                  <th colspan="<?= $hitSql+1 ?>" class="text-center">TF</th>
                  <th rowspan="2">DF</th>
                  <th rowspan="2">IDF</th>
                  <th colspan="<?= $hitSql+1 ?>" class="text-center">WDT = TF.IDF</th>
                </tr>
                <tr>
                  <?php 
                    for($c=1;$c<=$hitSql;$c++) {
                      echo "<th>D".$c."</th>";
                    }
                    echo "<th>Q</th>";
                  ?>
                  <?php 
                    for($c=1;$c<=$hitSql;$c++) {
                      echo "<th>D".$c."</th>";
                    }
                    echo "<th>Q</th>";
                  ?>
                </tr>
              </thead>
              <tbody>
                <?php
                  
                  $sumBawah = array();
                  for ($d=0;$d<count($push);$d++) {
                    $sumBawah[$d] = 0;
                  }

                  for ($a=0;$a<$hitung;$a++) {
                    
                    echo "<tr>";
                    echo "<td>".$tmp2[$a]."</td>";
                    $sumNilb = 0;
                    $isi = [];
                    
                    for ($b=0;$b<count($push);$b++) {
                      echo "<td>";
                      if (in_array($tmp2[$a],$push[$b])) {
                        $isi[$a][$b] = 1;
                        echo $isi[$a][$b];
                      } else {
                        $isi[$a][$b] = 0;
                        echo $isi[$a][$b];
                      }
                      $sumBawah[$b] += $isi[$a][$b];
                    }
                    echo "</td>";
                  } 

                  echo "<tr>";
                  echo "<td>a</td>";
                  for ($c=0;$c<count($push);$c++) {
                    echo "<td>".$sumBawah[$c]."</td>";
                  }
                  
                ?>
              </tbody>
            </table>
          </div>
        </div>

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

