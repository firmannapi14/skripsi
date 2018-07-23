<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Data</b> | List</h3>
    </div>

    <div class="box-body">
        <div class="col-md-12">

          <form name="tambah" action="?tampil=dataolah_tambahpro" method="post" enctype="multipart/form-data"
            class="form-horizontal">

              <div class="form-group">
                <label class="label-control col-md-2">JUDUL</label>
                <div class="col-md-6">
                  <input class="form-control" type="text" name="judul" placeholder="isikan judul ..." required>
                </div>
              </div>

              <div class="form-group">
                <label class="label-control col-md-2">TANGGAL TERBIT</label>
                <div class="col-md-6">
                  <input type="text" name="tgl_terbit"class="form-control pull-right" id="datepicker">
                </div>
              </div>

              <div class="form-group">
                <label class="label-control col-md-2">KLASIFIKASI</label>
                <div class="col-md-6">
                  <select class="form-control" name="klasifikasi">
                    <option value="">-- pilih salah satu --</option>
                    <?php
                    $kontrak = mysqli_query($conn, "SELECT * FROM tb_klasifikasi ORDER BY kode_klasifikasi ASC");
                    while ($rowkon = mysqli_fetch_array($kontrak)){
                      echo "<option value=$rowkon[kode_klasifikasi]>$rowkon[klasifikasi]</option> \n";
                    }
                    ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="label-control col-md-2">CATATAN</label>
                <div class="col-md-6">
                  <textarea name="catatan" class="form-control" rows="3" placeholder="isikan catatan ..." required></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="label-control col-md-2"></label>
                <div class="col-md-6">
                  <button type="Submit" name="tambah" class="btn btn-primary">
                    <span class="fa fa-plus-circle"></span> Tambah</button>
                </div>
              </div>

          </form>

        <div class="col-md-12">
         
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#dua">
                        Data Olah Bahasa Internasional
                      </a>
                    </h4>
                  </div>
                  <div id="dua" class="panel-collapse collapse in">
                    <div class="box-body">
                      <div class="table-responsive">
                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                              <th>NO</th>
                              <th>JUDUL</th>
                              <th>TANGGAL TERBIT</th>
                              <th>CATATAN</th>
                              <th>AKSI</th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php

                                  $no = 1;
                                      $sql = mysqli_query($conn, "SELECT * FROM tb_dataolah
                                                                  JOIN tb_klasifikasi ON tb_klasifikasi.kode_klasifikasi=tb_dataolah.kode_klasifikasi
                                                                  WHERE tb_klasifikasi.kode_klasifikasi='KLS1807001'") 
                                      or die(mysqli_error($conn));
                                      while($data = mysqli_fetch_array($sql)){
                                  
                              ?>
                                  <tr>
                                  <td><?php echo $no; ?></td>
                                  <td><?php echo $data['judul_indonesia']; ?></td>
                                  <td><?php echo $data['tanggal_terbit']; ?></td>
                                  <td><?php echo $data['catatan']; ?></td>
                                  <td>
                                      <a href="?tampil=dataolah_edit&id=<?php echo $data['kode_dataolah']; ?>" class="btn btn-primary btn-xs" title="edit">edit</a>
                                      <a href="javascript:;" data-id="<?php echo $data['kode_dataolah'] ?>" data-toggle="modal" data-target="#dataolah_hapus"
                                              class="btn btn-danger btn-xs" title="hapus">hapus</a>
                                  </td>
                                  </tr>

                                  <?php
                                  $no++;
                                  }
                                  ?>

                              </tbody>
                          </table>
                      </div>


                    </div>
                  </div>
                </div>
                <div class="panel box box-warning">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#tiga">
                       Data Olah Magang Industri
                      </a>
                    </h4>
                  </div>
                  <div id="tiga" class="panel-collapse collapse">
                    <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>NO</th>
                            <th>JUDUL</th>
                            <th>TANGGAL TERBIT</th>
                            <th>CATATAN</th>
                            <th>AKSI</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                                $no = 1;
                                    $sql = mysqli_query($conn, "SELECT * FROM tb_dataolah
                                                                JOIN tb_klasifikasi ON tb_klasifikasi.kode_klasifikasi=tb_dataolah.kode_klasifikasi
                                                                WHERE tb_klasifikasi.kode_klasifikasi='KLS1807002'") 
                                    or die(mysqli_error($conn));
                                    while($data = mysqli_fetch_array($sql)){
                                
                            ?>
                                <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['judul_indonesia']; ?></td>
                                <td><?php echo $data['tanggal_terbit']; ?></td>
                                <td><?php echo $data['catatan']; ?></td>
                                <td>
                                      <a href="?tampil=dataolah_edit&id=<?php echo $data['kode_dataolah']; ?>" class="btn btn-primary btn-xs" title="edit">edit</a>
                                      <a href="javascript:;" data-id="<?php echo $data['kode_dataolah'] ?>" data-toggle="modal" data-target="#dataolah_hapus"
                                              class="btn btn-danger btn-xs" title="hapus">hapus</a>
                                </td>
                                </tr>

                                <?php
                                $no++;
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                  

                  </div>
                  </div>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#empat">
                       Data Olah Pendidikan Karakter
                      </a>
                    </h4>
                  </div>
                  <div id="empat" class="panel-collapse collapse">
                    <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>NO</th>
                            <th>JUDUL</th>
                            <th>TANGGAL TERBIT</th>
                            <th>CATATAN</th>
                            <th>AKSI</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                                $no = 1;
                                    $sql = mysqli_query($conn, "SELECT * FROM tb_dataolah
                                                                JOIN tb_klasifikasi ON tb_klasifikasi.kode_klasifikasi=tb_dataolah.kode_klasifikasi
                                                                WHERE tb_klasifikasi.kode_klasifikasi='KLS1807003'") 
                                    or die(mysqli_error($conn));
                                    while($data = mysqli_fetch_array($sql)){
                                
                            ?>
                                <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['judul_indonesia']; ?></td>
                                <td><?php echo $data['tanggal_terbit']; ?></td>
                                <td><?php echo $data['catatan']; ?></td>
                                <td>
                                      <a href="?tampil=dataolah_edit&id=<?php echo $data['kode_dataolah']; ?>" class="btn btn-primary btn-xs" title="edit">edit</a>
                                      <a href="javascript:;" data-id="<?php echo $data['kode_dataolah'] ?>" data-toggle="modal" data-target="#dataolah_hapus"
                                              class="btn btn-danger btn-xs" title="hapus">hapus</a>
                                </td>
                                </tr>
 
                                <?php
                                $no++;
                                }
                                ?>


                            </tbody>
                        </table>
                    </div>
                  

                  </div>
                  </div>
                </div>
                <div class="panel box box-info">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#lima">
                       Data Olah Pengalaman Organisasi
                      </a>
                    </h4>
                  </div>
                  <div id="lima" class="panel-collapse collapse">
                    <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>NO</th>
                            <th>JUDUL</th>
                            <th>TANGGAL TERBIT</th>
                            <th>CATATAN</th>
                            <th>AKSI</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                                $no = 1;
                                    $sql = mysqli_query($conn, "SELECT * FROM tb_dataolah
                                                                JOIN tb_klasifikasi ON tb_klasifikasi.kode_klasifikasi=tb_dataolah.kode_klasifikasi
                                                                WHERE tb_klasifikasi.kode_klasifikasi='KLS1807004'") 
                                    or die(mysqli_error($conn));
                                    while($data = mysqli_fetch_array($sql)){
                                
                            ?>
                                <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['judul_indonesia']; ?></td>
                                <td><?php echo $data['tanggal_terbit']; ?></td>
                                <td><?php echo $data['catatan']; ?></td>
                                <td>
                                      <a href="?tampil=dataolah_edit&id=<?php echo $data['kode_dataolah']; ?>" class="btn btn-primary btn-xs" title="edit">edit</a>
                                      <a href="javascript:;" data-id="<?php echo $data['kode_dataolah'] ?>" data-toggle="modal" data-target="#dataolah_hapus"
                                              class="btn btn-danger btn-xs" title="hapus">hapus</a>
                                </td>
                                </tr>

                                <?php
                                $no++;
                                }
                                ?>

                              </tbody>
                        </table>
                    </div>
                  

                  </div>
                  </div>
                </div>
                <div class="panel box box-warning">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#enam">
                       Data Olah Tugas Akhir / Skripsi
                      </a>
                    </h4>
                  </div>
                  <div id="enam" class="panel-collapse collapse">
                    <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>NO</th>
                            <th>JUDUL</th>
                            <th>TANGGAL TERBIT</th>
                            <th>CATATAN</th>
                            <th>AKSI</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                                $no = 1;
                                    $sql = mysqli_query($conn, "SELECT * FROM tb_dataolah
                                                                JOIN tb_klasifikasi ON tb_klasifikasi.kode_klasifikasi=tb_dataolah.kode_klasifikasi
                                                                WHERE tb_klasifikasi.kode_klasifikasi='KLS1807005'") 
                                    or die(mysqli_error($conn));
                                    while($data = mysqli_fetch_array($sql)){
                                
                            ?>
                                <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['judul_indonesia']; ?></td>
                                <td><?php echo $data['tanggal_terbit']; ?></td>
                                <td><?php echo $data['catatan']; ?></td>
                                <td>
                                      <a href="?tampil=dataolah_edit&id=<?php echo $data['kode_dataolah']; ?>" class="btn btn-primary btn-xs" title="edit">edit</a>
                                      <a href="javascript:;" data-id="<?php echo $data['kode_dataolah'] ?>" data-toggle="modal" data-target="#dataolah_hapus"
                                              class="btn btn-danger btn-xs" title="hapus">hapus</a>
                                </td>
                                </tr>

                                <?php
                                $no++;
                                }
                                ?>


                                    </tbody>
                        </table>
                    </div>
                  

                  </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#tujuh">
                       Data Olah Penghargaan Kejuaraan
                      </a>
                    </h4>
                  </div>
                  <div id="tujuh" class="panel-collapse collapse">
                    <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>NO</th>
                            <th>JUDUL</th>
                            <th>TANGGAL TERBIT</th>
                            <th>CATATAN</th>
                            <th>AKSI</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                                $no = 1;
                                    $sql = mysqli_query($conn, "SELECT * FROM tb_dataolah
                                                                JOIN tb_klasifikasi ON tb_klasifikasi.kode_klasifikasi=tb_dataolah.kode_klasifikasi
                                                                WHERE tb_klasifikasi.kode_klasifikasi='KLS1807006'") 
                                    or die(mysqli_error($conn));
                                    while($data = mysqli_fetch_array($sql)){
                                
                            ?>
                                <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['judul_indonesia']; ?></td>
                                <td><?php echo $data['tanggal_terbit']; ?></td>
                                <td><?php echo $data['catatan']; ?></td>
                                <td>
                                      <a href="?tampil=dataolah_edit&id=<?php echo $data['kode_dataolah']; ?>" class="btn btn-primary btn-xs" title="edit">edit</a>
                                      <a href="javascript:;" data-id="<?php echo $data['kode_dataolah'] ?>" data-toggle="modal" data-target="#dataolah_hapus"
                                              class="btn btn-danger btn-xs" title="hapus">hapus</a>
                                </td>
                                </tr>

                                <?php
                                $no++;
                                }
                                ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
