<?php

  if (isset($_GET['tampil'])) $tampil=$_GET['tampil'];
  else $tampil="home";

  if ($tampil == "home") include("home.php");
  else if ($tampil == "logout") include("logout.php");
  else if ($tampil == "home") include("home.php");
  else if ($tampil == "home_mhs") include("home_mhs.php");

  // ------------------------ MAHASISWA ------------------------
  elseif ($tampil == "mahasiswa") include("page/mahasiswa/mahasiswa.php");
  elseif ($tampil == "mahasiswa_tambahpro") include("page/mahasiswa/mahasiswa_tambahpro.php");
  elseif ($tampil == "mahasiswa_edit") include("page/mahasiswa/mahasiswa_edit.php");
  elseif ($tampil == "mahasiswa_editpro") include("page/mahasiswa/mahasiswa_editpro.php");
  elseif ($tampil == "mahasiswa_hapus") include("page/mahasiswa/mahasiswa_hapus.php");

  // ------------------------ SERTIFIKAT ------------------------
  elseif ($tampil == "profil") include("page/profil/profil.php");
  elseif ($tampil == "admin_editpro") include("page/profil/admin_editpro.php");
  elseif ($tampil == "mhs_editpro") include("page/profil/mhs_editpro.php");

  // ------------------------ MAHASISWA ------------------------
  elseif ($tampil == "mahasiswa") include("page/mahasiswa/mahasiswa.php");

  // ------------------------ DATA OLAH------------------------
  elseif ($tampil == "dataolah") include("page/dataolah/dataolah.php");
  elseif ($tampil == "dataolah_tambahpro") include("page/dataolah/dataolah_tambahpro.php");
  elseif ($tampil == "dataolah_edit") include("page/dataolah/dataolah_edit.php");
  elseif ($tampil == "dataolah_editpro") include("page/dataolah/dataolah_editpro.php");
  elseif ($tampil == "dataolah_hapus") include("page/dataolah/dataolah_hapus.php");

  // ------------------------ KONFIRMASI ------------------------
  elseif ($tampil == "konfirmasi") include("page/konfirmasi/konfirmasi.php");
  elseif ($tampil == "konfirmasi_edit") include("page/konfirmasi/konfirmasi_edit.php");
  elseif ($tampil == "konfirmasi_editpro") include("page/konfirmasi/konfirmasi_editpro.php");
  elseif ($tampil == "konfirmasi_hapus") include("page/konfirmasi/konfirmasi_hapus.php");
  elseif ($tampil == "konfirmasi_usulan") include("page/konfirmasi/konfirmasi_usulan.php");
  elseif ($tampil == "konfirmasi_tolak") include("page/konfirmasi/konfirmasi_tolak.php");

  // ------------------------ KLASIFIKASI ------------------------
  elseif ($tampil == "klasifikasi") include("page/klasifikasi/klasifikasi.php");
  elseif ($tampil == "klasifikasi_tambahpro") include("page/klasifikasi/klasifikasi_tambahpro.php");
  elseif ($tampil == "klasifikasi_edit") include("page/klasifikasi/klasifikasi_edit.php");
  elseif ($tampil == "klasifikasi_editpro") include("page/klasifikasi/klasifikasi_editpro.php");
  elseif ($tampil == "klasifikasi_hapus") include("page/klasifikasi/klasifikasi_hapus.php");

  // ------------------------ SERTIFIKAT ------------------------
  elseif ($tampil == "proses") include("page/proses/proses.php");
  elseif ($tampil == "proses_user") include("page/proses/proses_user.php");

else echo"Konten tidak ada";

?>
