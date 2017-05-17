<?php

  session_start();

  //contoh dari header('Location: index.php?nama='.$_POST['nama']);
  // echo "ini adalah halaman profile ".$_GET['nama'];

  //contoh setcookie('nama_user', $_POST['nama'], time()+120);
  // echo "ini adalah halaman profile => ".$_COOKIE['nama_user'];

  //contoh menampilkan $_SESSION[] = nilai;
  // echo "ini adalah halaman profile " . $_SESSION['data_user'];

  if (isset($_SESSION['data_user'])) {
    echo "ini adalah halaman profil ". $_SESSION['data_user'];
  }else {
    echo "Anda belum Login";
  }

?>

<br>
<a href="logout.php">Logout</a>
<br>
<a href="index.php">Login</a>
