<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'perpustakaan';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
  echo "gagal konek ke database mysql ".$mysqli->connect_error;
}

 ?>
