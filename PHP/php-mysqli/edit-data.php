<?php

// Mengedit data

require_once 'koneksi.php';

$query = "UPDATE siswa SET nama='darmaji', umur=90 WHERE id=2";

if (mysqli_query($koneksi, $query)) {
  echo "data id=2 berhasil di edit";
}

mysqli_close($koneksi);
 ?>
