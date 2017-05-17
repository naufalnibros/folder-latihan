<?php

require_once 'koneksi.php';

// >>> Menampilkan data
$result = $koneksi->query("SELECT * FROM karyawan");
// die(var_dump($result->fetch()));

// while ($row = $result->fetch()) {
//   echo $row['nama'];
// }

while ($row = $result->fetch(PDO::FETCH_OBJ)) {
  echo $row->nama." ".$row->telepon."<br>";
}

$total = $koneksi->query("SELECT * FROM karyawan")->rowCount();
echo "<br>total ". $total;

?>
