<?php

session_start();

$user = "naufal";
$password = "8963744";

if (isset($_POST['submit'])) {
  if ($_POST['nama'] == $user && $_POST['password'] == $password) {
    // echo "Login Berhasil";

    //otomatis memindah halaman
    header('Location: profile.php');

    // memindah halaman dan otomatis mengambil nilai dari key nama
    // header('Location: profile.php?nama='. $_POST['nama']);

    //---- cookie ==> adalah cara menyimpan data pada browser client
    //setcookie('key', nilai, expire);
    setcookie('nama_user', $_POST['nama'], time()+120);
    //       ('nama_key', nilai_yg_di_oper, waktu()120s)

    //---- session ==> cara menyimpan data user pada server (biasa digunakan pada "logout")
    $_SESSION['data_user'] = $_POST['nama'];

  } else {
    echo "Login Gagal";
  }

}

 ?>

 <form action="" method="post">
   <input type="text" name="nama">
   <input type="password" name="password">
   <input type="submit" name="submit">
 </form>
