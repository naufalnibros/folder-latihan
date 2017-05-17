<?php

require_once 'connection.php';

$query = "DELETE FROM siswa WHERE no_pendaftaran = '$_GET[id]'";
$data = mysqli_query($koneksi, $query);

header('Location: lihat-psb.php');

 ?>
