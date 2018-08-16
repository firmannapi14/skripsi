<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>DATA</b> | KONFIRMASI <?php if ($role == 0) {echo "- DRAFT USULAN";} ?></h3>
      <div class="pull-right">

        <?php if ($role == 0) { ?>

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
          <th>ID</th>
          <th>KLASIFIKASI</th>
          <th>JUDUL</th>
          <th>TANGGAL TERBIT</th>
          <th>INSTANSI PENYELENGGARA</th>
          <th>KOTA/NEGARA</th>
          <th>PERIODE</th>
          <th>STATUS</th>
          <th>AKSI</th>
        </tr>
        </thead>
        <tbody>

          <?php

              $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM tb_report
                                            JOIN tb_klasifikasi ON tb_report.kode_klasifikasi=tb_klasifikasi.kode_klasifikasi
                                            WHERE tb_report.nim=$id AND tb_report.deleted_at IS NULL") 
                                          or die(mysqli_error($conn));
                while($data = mysqli_fetch_array($sql)){
               
          ?>
            <tr>
              <td><?php echo $no; ?>.</td>
              <td><a class="btn btn-primary btn-xs"><?php echo $data['id_report']; ?></a></td>
              <td><a class="btn btn-danger btn-xs"><?php echo $data['klasifikasi']; ?></a></td>
              <td>
                <?php 
                echo $data['judul_indonesia']."</br>";
                echo "<i>".$data['judul_inggris']."</i>"; 
                ?>
              </td>
              <td><?php echo $data['tgl_terbit']; ?></td>
              <td><?php echo $data['instansi_penyelenggara']; ?></td>
              <td><?php echo $data['nama_kota']."/".$data['nama_negara']; ?></td>
              <td><?php echo date('d-M-Y', strtotime($data['periode_awal']))." sampai ".date('d-M-Y', strtotime($data['periode_akhir'])); ?></td>
              <td>
              <?php 
                if ($data['status_report'] == 0) {
                  echo "<a class='btn btn-info btn-sm'><i class='fa fa-hourglass-2'></i> Draft/Usulan</a>";
                } else if ($data['status_report'] == 1) {
                  echo "<a class='btn btn-success btn-sm'><i class='fa fa-check-square'></i> Diterima</a>";
                } else {
                  echo "<a class='btn btn-danger btn-sm'><i class='fa fa-remove'></i> Ditolak</a>";
                }
              ?>
              </td>
              <td>
              <?php if ($data['status_report'] == 0) { ?>
              <a href="?tampil=konfirmasi_edit&id=<?php echo $data['id_report']; ?>" class="btn btn-primary btn-xs" title="edit">edit</a>
                <a href="javascript:;" data-id="<?php echo $data['id_report'] ?>" data-toggle="modal" data-target="#report_hapus"
                        class="btn btn-danger btn-xs" title="hapus">hapus</a>
              <?php } ?>
              </td>
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
          <th>AKSI</th>
        </tr>
        </thead>
        <tbody>

          <?php

              $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM tb_report
                                            JOIN tb_klasifikasi ON tb_report.kode_klasifikasi=tb_klasifikasi.kode_klasifikasi
                                            JOIN tb_mahasiswa ON tb_report.nim=tb_mahasiswa.nim
                                            WHERE tb_report.deleted_at IS NULL") 
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
              <td>
              <?php 
                if ($data['status_report'] == 0) {
                  echo "<a href='?tampil=konfirmasi_usulan&id=$data[id_report]' class='btn btn-info btn-sm'><i class='fa fa-hourglass-2'></i> Draft/Usulan Sesuai</a>";
                  echo "<a href='?tampil=konfirmasi_tolak&id=$data[id_report]' class='btn btn-danger btn-sm'><i class='fa fa-remove'></i> Draft/Usulan Tidak Sesuai</a>";
                } else if ($data['status_report'] == 1) {
                  echo "<a class='btn btn-success btn-sm'><i class='fa fa-check-square'></i> Diterima</a>";
                } else {
                  echo "<a class='btn btn-danger btn-sm'><i class='fa fa-remove'></i> Ditolak</a>";
                }
              ?>
              </td>
              <td>
              <?php if ($data['status_report'] == 0) { ?>
              <a href="?tampil=konfirmasi_edit&id=<?php echo $data['id_report']; ?>" class="btn btn-primary btn-xs" title="edit">edit</a>
                <a href="javascript:;" data-id="<?php echo $data['id_report'] ?>" data-toggle="modal" data-target="#report_hapus"
                        class="btn btn-danger btn-xs" title="hapus">hapus</a>
              <?php } ?>
              </td>
            </tr>

            <?php
              $no++;
            }
            ?>

        </tbody>
      </table>
    </div>
    <?php } ?>
    
    <!-- modal Hapus-->
    <div id="report_hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <span class="glyphicon glyphicon-exclamation-sign"></span> Konfirmasi</h4>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-info" id="hapus-report"><i class="glyphicon glyphicon-ok"></i> Ya</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Tidak</button>
            </div>

            </div>
        </div>
    </div>

  </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>

<script src="lib/konfirmasi.js"></script>
