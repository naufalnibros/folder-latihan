<?php

require_once 'koneksi.php';

//Memasukkan 1 data
$query = "INSERT INTO siswa (nama, alamat, umur)
          VALUES ('naila', 'buduran', 18)";
if (mysqli_query($koneksi, $query)) {
  echo "Memasukkan 1 data berhasil..!!";
}

//---------------------------------------------
echo "<br><br><br>";

//Memasukkan 2 data 
$query2 = "INSERT INTO siswa (nama, alamat, umur)
          VALUES ('rahma', 'nganjuk', 11); "; //--> untuk multi_query berikan ';' pada parameter VALUES

$query2 .= "INSERT INTO siswa (nama, alamat, umur)
            VALUES ('andika', 'gresik', 29)";  // .= sama dengan $query2 = $query2 . $query2;

if (mysqli_multi_query($koneksi, $query2)) {
  echo "Memasukkan multi_query berhasil...!!";
}


mysqli_close($koneksi);
 ?>
