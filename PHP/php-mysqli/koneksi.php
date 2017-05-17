<?php

//menyambungkan database
// mysqli_connect(host, username, password, name_database);
$koneksi = mysqli_connect('localhost', 'root', '', 'sekolah');

//menguji Error
if ( !$koneksi ) {
  die('ada error'. mysqli_connect_error());
}

 ?>
