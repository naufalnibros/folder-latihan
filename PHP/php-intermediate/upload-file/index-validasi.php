<?php

//cara mengecek dan apa nilai file nya

if (isset($_POST['submit'])) {
  // print_r($_FILES['gambar']); //untuk mengambil informasi file

  $nama     = $_FILES['gambar']['name'];
  $error    = $_FILES['gambar']['error'];
  $size     = $_FILES['gambar']['size'];
  $asal     = $_FILES['gambar']['tmp_name'];
  $format   = $_FILES['gambar']['type'];
  // $format2  = pathinfo($nama, PATHINFO_EXTENSION); ==> method u/ mengetahui format file

    if ($error == 0) {
      if ($size < 1000000) {
        if ($format == 'image/jpeg') {
          //meng-upload gambar ke--> folder upload
          move_uploaded_file($asal, 'upload/'.$nama);
          echo "berhasil di upload";
        }else{
          echo "format harus jpeg";
        }
      }else{
        echo "size gambar kegedean";
      }
    }else{
      echo "ada error";
    }

  }

 ?>

<!-- enctype="form-data" ==> atribut ini digunakan untuk meng-upload file -->
 <form action="index-validasi.php" method="post" enctype="multipart/form-data">
   <input type="file" name="gambar">
   <input type="submit" name="submit" value="upload">
 </form>
