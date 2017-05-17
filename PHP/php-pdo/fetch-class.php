<?php

require_once 'koneksi.php';

//=========== setFetchMode(PDO::FETCH_CLASS, 'nameClass')
// Secara otomatis menjadi objek + membutuhkan class sebagai argument nya

class Data
{
  // properti bisa disamakan dengan nama row nya
  public $nama, $telepon, $tambahan;
  // mengisi properti '$tambahan' dengan function __construct()
  public function __construct() {
    $this->tambahan = "Nama karyawan ". $this->nama ." nomer telpon nya ". $this->telepon;
  }

  public function BuatLink() {
    return $this->linknya = '<a href="nama-folder/'.$this->nama.'">'. $this->nama .'</a>';
  }
}

$sql = $koneksi->query("SELECT * FROM karyawan");
$sql->setFetchMode(PDO::FETCH_CLASS, 'Data');

while ($row = $sql->fetch()) {
  // echo $row->nama."<br>";
  // var_dump($row);
  echo $row->BuatLink().'<br>';
}

 ?>
