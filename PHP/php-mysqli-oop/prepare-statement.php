<?php

require_once 'koneksi.php';

//excape- untuk mencegah mysql injection

// $nama = $mysqli->real_escape_string($_GET['namabuku']);
// $sql = "INSERT INTO buku (nama_buku, jumlah_buku) VALUES ($nama, 9)";

//prepare statement
$statement = $mysqli->prepare('INSERT INTO buku (judul_buku, jumlah_buku) VALUES (?, ?)');
$statement->bind_param('si', $judul, $jumlah); // bind_param() ==> menggabungkan param | si ==> string dan integer

//mengisi nilai param + mengeksekusi --> bisa di isi lebih dari satu
$judul = 'buku tebal baca';
$jumlah = 5;
$statement->execute();

$judul = 'buku bacaan anak';
$jumlah = 7;
$statement->execute();


$mysqli->close();

 ?>
