<?php

//cara mengecek dan apa nilai file nya

if (isset($_POST['submit'])) {
  print_r($_FILES['gambar']); //untuk mengambil informasi file

  $nama   = $_FILES['gambar']['name'];
  $asal = $_FILES['gambar']['tmp_name'];

  // move_uploaded_file(asal, tujuan);
  move_uploaded_file($asal, 'upload/'.$nama); //method untuk mengupload file
                                              //'upload/'.$nama ==> disimpan di folder upload dengan mengikuti nama pada var_ $nama
  
  }

 ?>

<!-- enctype="form-data" ==> atribut ini digunakan untuk meng-upload file -->
 <form action="index.php" method="post" enctype="multipart/form-data">
   <input type="file" name="gambar">
   <input type="submit" name="submit" value="upload">
 </form>
