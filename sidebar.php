<ul class="sidebar-menu" data-widget="tree">

 <li class="header">MAIN SIDEBAR</li>

 <?php if($role == 0) { ?>
  <li class="<?php if ($_GET['tampil'] == 'home'){ echo "active"; }?>">
    <a href="?tampil=home">
      <i class="fa fa-dashboard"></i> <span>Home</span>
    </a>
  </li>


  <li class="<?php if ($_GET['tampil'] == 'mahasiswa' || $_GET['tampil'] == 'mahasiswa_tambahpro' ||
                       $_GET['tampil'] == 'mahasiswa_edit' || $_GET['tampil'] == 'mahasiswa_editpro' ||
                       $_GET['tampil'] == 'mahasiswa_hapus'){ echo "active"; }?>">
    <a href="?tampil=mahasiswa">
      <i class="fa fa-users"></i> <span>Mahasiswa</span>
    </a>
  </li>

  <li class="<?php if ($_GET['tampil'] == 'dataolah'){ echo "active"; }?>">
    <a href="?tampil=dataolah">
      <i class="fa fa-database"></i> <span>Data Olah</span>
    </a>
  </li>

  <li class="<?php if ($_GET['tampil'] == 'klasifikasi'){ echo "active"; }?>">
    <a href="?tampil=klasifikasi">
      <i class="fa fa-list"></i> <span>Klasifikasi</span>
    </a>
  </li>

  <li class="<?php if ($_GET['tampil'] == 'proses'){ echo "active"; }?>">
    <a href="?tampil=proses">
      <i class="fa fa-refresh"></i> <span>PROSES TF-IDF</span>
    </a>
  </li>

  <?php } else { ?>

  <li class="<?php if ($_GET['tampil'] == 'proses_user'){ echo "active"; }?>">
    <a href="?tampil=proses_user">
      <i class="fa fa-download"></i> <span>INPUT JUDUL</span>
    </a>
  </li>

  <?php } ?>

  <li class="<?php if ($_GET['tampil'] == 'konfirmasi'){ echo "active"; }?>">
    <a href="?tampil=konfirmasi">
      <i class="fa fa-file-text"></i> <span>KONFIRMASI</span>
    </a>
  </li>

</ul>
