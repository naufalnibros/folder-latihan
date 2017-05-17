<?php

require_once 'koneksi.php';

$jumlah_param = 20;

$statement = $mysqli->prepare("SELECT judul_buku, jumlah_buku FROM buku WHERE jumlah_buku=? ");
$statement->bind_param('s', $jumlah_param);
$statement->execute();

$statement->bind_result($judul, $jumlah); //variabel baru untuk pengembalian judul_buku dan jumlah_buku

while ($statement->fetch()) {
  echo $judul." - ".$jumlah."<br>";
}


 ?>
