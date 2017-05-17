<?php

require_once 'koneksi.php';

$query = "DELETE FROM siswa WHERE nama='naila' "; //menghapus satu data
// $query = "DELETE FROM siswa WHERE id IN (2, 4, 3)"; //--> Menghapus data secara spesifik
// $query = "DELETE FROM siswa WHERE id BETWEEN 2 AND 6"; //--> menghapus data mulai dari 2 s/d 6

if (mysqli_query($koneksi, $query)) {
  echo "Data berhasil dihapus";
}

mysqli_close($koneksi);
 ?>
