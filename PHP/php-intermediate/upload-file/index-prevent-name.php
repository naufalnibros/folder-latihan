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
  $namafile = 'upload/'.$nama;
  $time     = time();

    if ($error == 0) {
      if ($size < 1000000) {
        if ($format == 'image/jpeg') {
          if (file_exists($namafile)) {    //==> mengecek apakah ada $namafile yang sama?
            $namafile = str_replace(".jpg", "", $namafile);
            $namafile = $namafile. "_" .$time. ".jpg";
          }
          //meng-upload gambar ke--> folder upload
          move_uploaded_file($asal, $namafile);
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
 <form action="index-prevent-name.php" method="post" enctype="multipart/form-data">
   <input type="file" name="gambar">
   <input type="submit" name="submit" value="upload">
 </form>
