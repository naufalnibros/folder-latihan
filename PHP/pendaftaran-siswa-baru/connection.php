<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'pendaftaran_siswa_baru');

if (!$koneksi) {
  die('ada error'. mysqli_connect_error());
}

 ?>
