<?php

require_once 'koneksi.php';

// >> Prepare Statement

$name     = 'robi';
$telphon  = 367845;

$sql = "INSERT INTO karyawan (nama, telepon) VALUES (:names, :tlp)";
$query = $koneksi->prepare($sql);

$param = array(
  ':names' => $name ,
  ':tlp'   => $telphon
);

$param2 = array(
  ':names' => 'percobaan' ,
  ':tlp'   => 34534234
 );

$query->execute($param);
$query->execute($param2);

echo "<br>ID Terakhir >> ". $koneksi->lastInsertId();
 ?>
