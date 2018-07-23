<?php

$user = $_SESSION['username'];

$admin = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username='$user'");
$hit = mysqli_num_rows($admin);

if ($hit > 0) {
  $arr      = mysqli_fetch_array($admin);
  $id       = $arr['kode_admin'];
  $nama     = $arr['email'];
  $email    = $arr['email'];
  $status   = $arr['status'];
  $telepon  = $arr['telepon'];
  $username = $arr['username'];
  $password = $arr['password'];
  $role     = 0;
} else {
  $mhs      = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE username='$user'");
  $arr      = mysqli_fetch_array($mhs);
  $id       = $arr['nim'];
  $nama     = $arr['nama_mahasiswa'];
  $email    = $arr['email'];
  $status   = $arr['status'];
  $telepon  = $arr['telepon'];
  $jur      = $arr['jurusan'];
  $username = $arr['username'];
  $password = $arr['password'];
  $role     = 1;
}

?>
<ul class="nav navbar-nav">

    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="fa fa-user"></span>
              <span class="hidden-xs">Hey, <b><?php echo strtoupper($email); ?></b></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p><?php echo $nama; ?></p>
                <p><i class="fa fa-check-square"></i> <?php echo $status; ?></p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="?tampil=profil" class="btn btn-default btn-flat">
                    <span class="fa fa-cog"></span> 
                    Profil</a>
                </div>
                <div class="pull-right">
                  <a href="?tampil=logout" class="btn btn-default btn-flat">
                    <span class="fa fa-sign-out"></span>
                    Keluar</a>
                </div>
              </li>
            </ul>
    </li>

</ul>