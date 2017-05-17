<?php

require_once 'connection.php';

$query = "SELECT * FROM siswa WHERE no_pendaftaran = '$_GET[id]'";
$data  = mysqli_query($koneksi, $query);

$nilai = mysqli_fetch_assoc($data);

//Query tabel jurusan

$q = "SELECT * FROM jurusan";
$d = mysqli_query($koneksi, $q);



 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Edit Pendaftaran</title>
  </head>
  <body>
    <h1>Edit Data</h1>
    <form action="update-psb.php" method="post">
      <input type="hidden" name="id" value="<?= $nilai['no_pendaftaran'] ?>">
      <table>
        <tr>
          <td>No. Pendaftaran</td><td>:</td>
          <td><input type="text" name=no_pendaftaran value="<?= $nilai['no_pendaftaran'] ?>"></td>
        </tr>


        <tr>
          <td>Nama Lengkap</td><td>:</td>
          <td><input type=text name=nama value="<?= $nilai['nama'] ?>"></td>
        </tr>

        <tr>
          <td>Jurusan</td><td>:</td>
          <td>
            <select name="kd_jurusan">
              <?php
                while ($hasil = mysqli_fetch_assoc($d)) {
                  if ($hasil['kd_jurusan'] == $nilai['kd_jurusan']) {
                    echo "<option value=$hasil[kd_jurusan] selected>$hasil[nama_jurusan]</option>";
                  } else {
                    echo "<option value=$hasil[kd_jurusan]>$hasil[nama_jurusan]</option>";
                  }
                }
               ?>
            </select>
          </td>
        </tr>
      </table>
      <input type="submit" value="UPDATE">
    </form>
  </body>
</html>
