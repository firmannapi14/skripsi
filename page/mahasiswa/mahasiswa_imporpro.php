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

    <?php 

        require "lib/excel_reader.php";

        chmod($_FILES['file_excel']['name'],777);

        $data   = new Spreadsheet_Excel_Reader($_FILES['file_excel']['name'],false);
        $baris  = $data->rowcount($sheet_index=0);
        
        
        echo $baris;

    ?>
      
    </div>

  </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>

<script src="lib/mahasiswa.js"></script>
