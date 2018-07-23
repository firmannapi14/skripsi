<?php

  if (isset($_GET['tampil'])) $tampil=$_GET['tampil'];
  else $tampil="beranda";

  if ($tampil == "beranda") include("beranda.php");
  else if ($tampil == "logout") include("logout.php");
  else if ($tampil == "beranda") include("beranda.php");

  // ------------------------ MAHASISWA ------------------------
  elseif ($tampil == "mahasiswa") include("page/mahasiswa/mahasiswa.php");
  elseif ($tampil == "mahasiswa_tambahpro") include("page/mahasiswa/mahasiswa_tambahpro.php");
  elseif ($tampil == "mahasiswa_edit") include("page/mahasiswa/mahasiswa_edit.php");
  elseif ($tampil == "mahasiswa_editpro") include("page/mahasiswa/mahasiswa_editpro.php");
  elseif ($tampil == "mahasiswa_hapus") include("page/mahasiswa/mahasiswa_hapus.php");
  
  // ------------------------ ADMIN ------------------------
  elseif ($tampil == "admin") include("page/admin/admin.php");

    // ------------------------ MAHASISWA ------------------------
    elseif ($tampil == "mahasiswa") include("page/mahasiswa/mahasiswa.php");

  // ------------------------ DATA OLAH------------------------
  elseif ($tampil == "dataolah") include("page/dataolah/dataolah.php");

    // ------------------------ KLASIFIKASI ------------------------
    elseif ($tampil == "klasifikasi") include("page/klasifikasi/klasifikasi.php");

      // ------------------------ SERTIFIKAT ------------------------
  elseif ($tampil == "sertifikat") include("page/sertifikat/sertifikat.php");



  
else echo"Konten tidak ada";

?>
