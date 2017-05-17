<?php

require_once 'koneksi.php';

//query adalah perintah" yg diberikan kepada mysqli nya. spt: ambil-tambah-hapus-edit data

//menampilkan dan memilih data
$query = "SELECT * FROM siswa";
$data = mysqli_query($koneksi, $query);

if ( mysqli_num_rows($data) > 0) {

  while ($hasil = mysqli_fetch_assoc($data)) {
    echo $hasil['nama']." ".$hasil['alamat']." ".$hasil['umur']."<br>";
  }
}

mysqli_close($koneksi);

 ?>
