<?php

$server   = 'localhost';
$user   = 'root';
$pass   = '';
$db     = 'belajar_pdo';

// $koneksi = new PDO("mysql:host=$server;dbname=$db", $user, $pass);

try {
  $koneksi = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
  $koneksi->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo 'error nya tuh disini ==> '.  $e->getMessage();
}


 ?>
