<?php

require_once 'koneksi.php';

$names = "apapun' OR '1'='1 "; // >>> sql injection

$sql  = "SELECT * FROM karyawan WHERE nama = '$names' "; // >>> dia terkena sql injection karena tidak menggunakan 'Prepare Statement'
var_dump($koneksi->query($sql)->fetch(PDO::FETCH_ASSOC));

echo "<br><br>Diatas adalah contoh sql injection<br><br>";

// cara mencegah 'sql injection' bisa menggunakan 'prepare statement'

// test dg memasukkan sql injection
$query = $koneksi->prepare("SELECT * FROM karyawan WHERE nama = :name ");
$param = array( ':name' => $names );
$query->execute($param);

var_dump($query->fetch(PDO::FETCH_ASSOC));

echo "<br><br>";

// test tanpa sql injection v.1
$names2 = "nibros";
$query2 = $koneksi->prepare("SELECT * FROM karyawan WHERE nama = :name");
$param2 = array( ':name' => $names2 );
$query2->execute($param2);

var_dump($query2->fetch(PDO::FETCH_ASSOC));

echo "<br><br>";

// test tanpa sql injection v.2
$names3 = "robi";
$tlp    = 367845;
$query3 = $koneksi->prepare("SELECT * FROM karyawan WHERE nama = ? AND telepon = ?");
$param3 = array( $names3, $tlp );
$query3->execute($param3);

var_dump($query3->fetch(PDO::FETCH_ASSOC));


 ?>
