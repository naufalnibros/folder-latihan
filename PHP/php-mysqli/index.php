<?php

  //menyambungkan database
  // mysqli_connect(host, username, password, name_database);
  $link = mysqli_connect('localhost', 'root', '', 'sekolah');

  //menguji Error
  if ( !$link ) {
    die('ada error'. mysqli_connect_error());
  }

  //query adalah perintah" yg diberikan kepada mysqli nya. spt: ambil-tambah-hapus-edit data

  //membuat database dengan query di file php
  $query = "CREATE DATABASE buat_database_di_php";

  if (mysqli_query($link, $query)) {
    echo "database berhasil dibuat";
  } else {
    echo "database gagal dibuat!!";
  }

  //menutup koneksi
  mysqli_close($link);

 ?>
