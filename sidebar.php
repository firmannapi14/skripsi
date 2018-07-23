<ul class="sidebar-menu" data-widget="tree">

 <li class="header">MAIN SIDEBAR</li>

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

  <li class="<?php if ($_GET['tampil'] == 'sertifikat'){ echo "active"; }?>">
    <a href="?tampil=sertifikat">
      <i class="fa fa-file-text"></i> <span>Sertifikat</span>
    </a>
  </li>
  

</ul>
