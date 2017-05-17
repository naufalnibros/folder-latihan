<?php

require_once 'connection.php';

$query = "UPDATE siswa SET no_pendaftaran = '$_POST[no_pendaftaran]', nama = '$_POST[nama]', kd_jurusan = '$_POST[kd_jurusan]' WHERE no_pendaftaran = $_POST[id]";
$data = mysqli_query($koneksi, $query);

if (isset($data)){
  header('Location: lihat-psb.php');
} else {
  echo "data tidak boleh kosong";
}
 ?>
