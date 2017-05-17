<?php

require_once 'koneksi.php';

$sql = "SELECT judul_buku, jumlah_buku FROM buku";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_object()) { //bisa menggunakan fetch_assoc ==> $row['judul_buku']
    echo $row->judul_buku." ".$row->jumlah_buku . "<br>";
  }
} else {
  echo "tidak ada data!";
}

$mysqli->close();
 ?>
