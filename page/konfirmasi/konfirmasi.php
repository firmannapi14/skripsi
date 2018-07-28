<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>DATA</b> | KONFIRMASI</h3>
      <div class="pull-right">

        <?php if ($role != 0) { ?>

          <a href="cetak/cetak.php?role=<?= $role ?>&id=<?= $id ?>" target="_blank" class="btn btn-danger">
          <span class="fa fa-print" aria-hidden="true"></span> Cetak</a>

        <?php } else { ?>

        <form action="cetak/cetak.php?role=<?= $role ?>&id=0" target="_blank" method="post">
          <div class="col-md-12">
            <div class="col-md-8">
                <select class="form-control" name="nimhs">
                  <option value="">-- pilih nim --</option>
                  <?php
                  $nim = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");
                  while ($row = mysqli_fetch_array($nim)){
                    echo "<option value=$row[nim]>$row[nim]</option> \n";
                  }
                  ?>
                </select>
              </div>
              <div class="col-md-2">
                </i><input type="submit" class="btn btn-danger btn-submit" name="cek" value="Cetak">
            </div>
          </div>        
        </form>

        <?php } ?>

      </div>
    </div>

    <div class="box-body">
    <?php if ($role != 0) { ?>
      <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>NO</th>
          <th>KLASIFIKASI</th>
          <th>JUDUL</th>
          <th>TANGGAL TERBIT</th>
          <th>INSTANSI PENYELENGGARA</th>
          <th>KOTA/NEGARA</th>
          <th>PERIODE</th>
          <th>STATUS</th>
        </tr>
        </thead>
        <tbody>

          <?php

              $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM tb_report
                                            JOIN tb_klasifikasi ON tb_report.kode_klasifikasi=tb_klasifikasi.kode_klasifikasi
                                            WHERE tb_report.nim=$id") 
                                          or die(mysqli_error($conn));
                while($data = mysqli_fetch_array($sql)){
               
          ?>
            <tr>
              <td><?php echo $no; ?>.</td>
              <td><a class="btn btn-danger btn-xs"><?php echo $data['klasifikasi']; ?></a></td>
              <td><?php echo $data['judul_indonesia']; ?></td>
              <td><?php echo $data['tgl_terbit']; ?></td>
              <td><?php echo $data['instansi_penyelenggara']; ?></td>
              <td><?php echo $data['nama_kota']."/".$data['nama_negara']; ?></td>
              <td><?php echo date('d-M-Y', strtotime($data['periode_awal']))." sampai ".date('d-M-Y', strtotime($data['periode_akhir'])); ?></td>
              <td><a class="btn btn-success btn-xs"><?php if ($data['status_report'] == 1) { echo "<i class='fa fa-check-square'></i> DITERIMA"; }?></td></a></td>
            </tr>

            <?php
              $no++;
            }
            ?>

        </tbody>
      </table>
    </div>
    <?php } else { ?>

    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>NO</th>
          <th>NIM</th>
          <th>NAMA</th>
          <th>KLASIFIKASI</th>
          <th>JUDUL</th>
          <th>TANGGAL TERBIT</th>
          <th>INSTANSI PENYELENGGARA</th>
          <th>KOTA/NEGARA</th>
          <th>PERIODE</th>
          <th>STATUS</th>
        </tr>
        </thead>
        <tbody>

          <?php

              $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM tb_report
                                            JOIN tb_klasifikasi ON tb_report.kode_klasifikasi=tb_klasifikasi.kode_klasifikasi
                                            JOIN tb_mahasiswa ON tb_report.nim=tb_mahasiswa.nim") 
                                          or die(mysqli_error($conn));
                while($data = mysqli_fetch_array($sql)){
               
          ?>
            <tr>
              <td><?php echo $no; ?>.</td>
              <td><?php echo $data['nim']; ?></td>
              <td><?php echo $data['nama_mahasiswa']; ?></td>
              <td><a class="btn btn-danger btn-xs"><?php echo $data['klasifikasi']; ?></a></td>
              <td><?php echo $data['judul_indonesia']; ?></td>
              <td><?php echo $data['tgl_terbit']; ?></td>
              <td><?php echo $data['instansi_penyelenggara']; ?></td>
              <td><?php echo $data['nama_kota']."/".$data['nama_negara']; ?></td>
              <td><?php echo date('d-M-Y', strtotime($data['periode_awal']))." sampai ".date('d-M-Y', strtotime($data['periode_akhir'])); ?></td>
              <td><a class="btn btn-success btn-xs"><?php if ($data['status_report'] == 1) { echo "<i class='fa fa-check-square'></i> DITERIMA"; }?></td></a></td>
            </tr>

            <?php
              $no++;
            }
            ?>

        </tbody>
      </table>
    </div>
    <?php } ?>
  </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>

<script src="lib/mahasiswa.js"></script>
