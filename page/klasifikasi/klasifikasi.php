<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title"><b>DATA</b> | KLASIFIKASI</h3>
    </div>

    <div class="box-body">
      <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>NO</th>
          <th>KODE KLASIFIKASI</th>
          <th>KLASIFIKASI</th>
          <th>DESKRIPSI</th>
        </tr>
        </thead>
        <tbody>

          <?php

              $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM tb_klasifikasi") 
                or die(mysqli_error($conn));
                while($data = mysqli_fetch_array($sql)){
               
          ?>
            <tr>
              <td><?php echo $no; ?>.</td>
              <td><a class="btn btn-warning btn-xs"><?php echo $data['kode_klasifikasi']; ?></a></td>
              <td><?php echo $data['klasifikasi']; ?></td>
              <td><?php echo $data['deskripsi']; ?></td>
            </tr>

            <?php
              $no++;
            }
            ?>

        </tbody>
      </table>
    </div>
  </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
