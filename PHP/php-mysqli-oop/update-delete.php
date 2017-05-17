<?php

require_once 'koneksi.php';

//meng-hapus data
// $sql = "DELETE FROM buku WHERE jumlah_buku=20";

//mengedit data/meng-update data
$sql = "UPDATE buku SET judul_buku='Belajar PHP Mudah', jumlah_buku=50 WHERE judul_buku='buku tebal baca'";

if ( $mysqli->query($sql) === TRUE ) {
  echo "berhasil";
} else {
  echo "gagal";
}
 ?>
