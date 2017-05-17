<?php

require_once 'koneksi.php';

$sql = "INSERT INTO buku (judul_buku, jumlah_buku) VALUES ('Belajar Koding 1 Hari', 20) ";

// $mysqli->query($sqli);

if ( $mysqli->query($sql) === TRUE ) { //menguji apakah data berhasil dimasukkan ke db
  echo " berhasil ";
} else {
  echo "gagal ". $mysqli->error;
}

$mysqli->close();

 ?>
