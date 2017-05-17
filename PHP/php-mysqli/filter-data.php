<?php

require_once 'koneksi.php';

//men-filter data

// 1- LIMIT
$query = "SELECT * FROM siswa LIMIT 3"; //membatasi nilai
$data = mysqli_query($koneksi, $query);

if ( mysqli_num_rows($data) > 0) {

  while ($hasil = mysqli_fetch_assoc($data)) {
    echo $hasil['nama']." ".$hasil['alamat']." ".$hasil['umur']."<br>";
  }
}

//----------------------------------------
echo "<br><br><br>";

// 1- ORDER BY ASC/DESC ==> (ascending dan descending)
$query = "SELECT * FROM siswa ORDER BY id DESC"; //mengurutkan nilai menggunakan desc (membalik nilai yg akhir di atas)
$data = mysqli_query($koneksi, $query);

if ( mysqli_num_rows($data) > 0) {

  while ($hasil = mysqli_fetch_assoc($data)) {
    echo $hasil['nama']." ".$hasil['alamat']." ".$hasil['umur']."<br>";
  }
}

//----------------------------------------
echo "<br><br><br>";

// 1- WHERE ==> memilih berdasarkan kolom mana id=1 || alamat='banten' || nama='naufal'

$query = " SELECT * FROM siswa WHERE id=3 "; //arti ==> memilih semua dari tabel siswa dimana? di kolom id=3
$data = mysqli_query($koneksi, $query);

if (mysqli_num_rows($data) > 0) {
  while ($hasil = mysqli_fetch_assoc($data)) {
    echo $hasil['nama']." ".$hasil['alamat']." ".$hasil['umur']."<br>";
  }
}

mysqli_close($koneksi);
 ?>
