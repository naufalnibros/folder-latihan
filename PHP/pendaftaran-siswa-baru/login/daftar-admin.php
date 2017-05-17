<?php

require_once '../connection.php';

if (isset($_POST['password']) && isset($_POST['konfirmasi_password'])) {
  if ($_POST['password'] != $_POST['konfirmasi_password']) {
    echo "Maaf, password tidak sama";
  } else {
    $query = "INSERT INTO admin (username, password, nama_admin)
              VALUES ('$_POST[username]', '$_POST[password]', '$_POST[nama_admin]')";
    mysqli_query($koneksi, $query);
  }
}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Daftar Admin</title>
   </head>
   <body>
     <h1>Form Registrasi Admin</h1>

     <form action="" method="post">
       <table>
         <tr>
           <td>Nama</td><td>:</td>
           <td><input type="text" name="nama_admin"></td>
         </tr>
         <tr>
           <td>username</td><td>:</td>
           <td><input type="text" name="username"></td>
         </tr>
         <tr>
           <td>password</td><td>:</td>
           <td><input type="password" name="password"></td>
         </tr>
         <tr>
           <td>konfirmasi password</td><td>:</td>
           <td><input type="password" name="konfirmasi_password"></td>
         </tr>
       </table>
       <input type="submit" value="DAFTAR">
     </form>
   </body>
 </html>
