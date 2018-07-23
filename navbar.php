<?php

$user = $_SESSION['username'];

$admin = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username='$user'");
$hit = mysqli_num_rows($admin);

if ($hit > 0) {
  $arr = mysqli_fetch_array($admin);
  $role = $arr['email'];
} else {
  $mhs = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE username='$user'");
  $arr = mysqli_fetch_array($mhs);
  $role = $arr['email'];
}

?>
<ul class="nav navbar-nav">

    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Hey, <b><?php echo strtoupper($role); ?></b></span>
            </a>
    </li>

</ul>