<?php

require_once 'connection.php';

$query = "INSERT INTO siswa (no_pendaftaran, nama, alamat, jenis_kelamin, agama, email, sekolah_asal, kd_jurusan)
          VALUES (
            '$_POST[no_pendaftaran]',
            '$_POST[nama]',
            '$_POST[alamat]',
            '$_POST[jenis_kelamin]',
            '$_POST[agama]',
            '$_POST[email]',
            '$_POST[sekolah_asal]',
            '$_POST[kd_jurusan]') ";

if ($data = mysqli_query($koneksi, $query)) {
  header('Location: lihat-psb.php');
}


 ?>
