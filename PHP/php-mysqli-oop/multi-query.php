<?php

require_once 'koneksi.php';

$sql = "INSERT INTO buku (judul_buku, jumlah_buku) VALUES ('Belajar CSS 1 Hari', 12);"; //jangan lupa beri titik koma u/ multi query
$sql .= "INSERT INTO buku (judul_buku, jumlah_buku) VALUES ('Belajar HTML 1 Hari', 3)";

if ( $mysqli->multi_query($sql) === TRUE) {
  echo "berhasil";
} else {
  echo "gagal ". $mysqli->error;
}

 ?>
