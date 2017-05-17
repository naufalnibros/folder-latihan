<?php

require_once 'connection.php';

$query = "SELECT*FROM siswa, jurusan WHERE siswa.kd_jurusan=jurusan.kd_jurusan ORDER BY no_pendaftaran DESC";
$data  = mysqli_query($koneksi, $query);

$no = 1;
while ($hasil = mysqli_fetch_assoc($data)) {
  echo "
  <table>
    <tr>
      <td>$no.</td>
      <td>$hasil[no_pendaftaran]</td>
      <td>$hasil[nama]</td>
      <td>$hasil[nama_jurusan]</td>
      <td>
        <a href=edit_psb.php?id=$hasil[no_pendaftaran]>Edit</a> | <a href=\"hapus_psb.php?id=[no_pendaftaran]\" onclick=\"return confirm('Yakin hapus $hasil[nama] ?')\">hapus</a>
      </td>
    </tr>
  </table>
  ";
  $no++;
}

 ?>
