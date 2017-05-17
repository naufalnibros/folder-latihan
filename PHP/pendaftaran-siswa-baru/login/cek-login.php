<?php

require_once '../connection.php';

$query = "SELECT * FROM admin WHERE username='$_POST[username]' AND password='$_POST[password]'";
$data = mysqli_query($koneksi, $query);

$var = mysqli_fetch_assoc($data);

if (!empty($_POST['username']) && !empty($_POST['password'])) {
  if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $var['username'] && $_POST['password'] == $var['password']) {
      session_start();
      $_SESSION['data_user'] = $var['nama_admin'];
      header('Location:../lihat-psb.php');

    } else {
      $_GET['salah'] = "Maaf, username dan password yang anda masukkan salah!";
      header('Location: login.php?pesan='.$_GET['salah']);
    }
  }
} else {
  $_GET['salah'] = "username dan password tidak boleh kosong";
  header('Location: login.php?pesan='.$_GET['salah']);
}



 ?>
