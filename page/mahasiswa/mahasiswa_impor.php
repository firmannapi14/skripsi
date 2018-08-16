<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>DATA</b> | MAHASISWA - IMPORT DATA</h3>
      <div class="pull-right">
      </div>
    </div>

    <div class="box-body">

    <form name="tambah" action="?tampil=mahasiswa_imporpro" method="post" enctype="multipart/form-data"
            class="form-horizontal">

            <div class="col-md-12">

            <div class="callout callout-info">
              <p> Gunakan File Excel dengan format Microsoft Excel 2003</p>
            </div>

            <div class="form-group">
                <label class="label-control col-md-2">IMPORT FILE</label>
                <div class="col-md-6">
                <input type="file" name="file_excel" class="form-control">
                </div>
            </div>

            </div>
        </div>

            <div class="box-footer">
            <div class="form-group">
                <label class="col-md-2"></label>
                <div class="col-md-4">
                <button type="Submit" name="tambah" class="btn btn-primary">
                    <span class="fa fa-refresh"></span> Proses</button>
                <a href="?tampil=mahasiswa" class="btn btn-danger"><span class="fa fa-remove"></span> Tutup</a>
                </div>
            </div>
            </div>

            </form>
      
    </div>

  </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>

<script src="lib/mahasiswa.js"></script>
