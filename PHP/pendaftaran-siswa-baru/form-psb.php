<?php
session_start();

require_once 'connection.php';
require_once 'template/header.php';



// $query = "SELECT * FROM jurusan ORDER BY kd_jurusan";
// $data = mysqli_query($koneksi, $query);
// while ($hasil = mysqli_fetch_assoc($data)) {
//   echo $hasil['kd_jurusan']." ".$hasil['nama_jurusan']."<br>";
//   }

// if (isset($_SESSION['data_user'])) {
//   echo "nama admin : ". $_SESSION['data_user'];
// } else {
//   $_GET['salah'] = "Maaf anda belum login";
//   header('Location:login/login.php?pesan='.$_GET['salah']);
// }


 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Form Pendaftaran</title>
   </head>
   <link rel="stylesheet" href="template/style.css">
   <body>
     <h1>Form Pendaftaran Siswa Baru</h1>

     <form action="input.php" method="post">
       <table>
         <tr>
           <td>No. Pendaftaran</td> <td>:</td>
           <td><input type="text" name="no_pendaftaran"></td>
         </tr>
         <tr>
           <td>Nama Lengkap</td><td>:</td>
           <td><input type="text" name="nama"></td>
         </tr>
         <tr>
           <td>Alamat</td><td>:</td>
           <td><input type="text" name="alamat"></td>
         </tr>
         <tr>
           <td>Jenis Kelamin</td><td>:</td>
          <td>
             <select name="jenis_kelamin">
               <option value="Laki-laki">Laki-laki</option>
               <option value="Perempuan">Perempuan</option>
             </select>
           </td>
         </tr>
         <tr>
           <td>Agama</td><td>:</td>
           <td>
             <select name="agama">
               <option value="Islam">Islam</option>
               <option value="Hindu">Hindu</option>
               <option value="Budha">Budha</option>
               <option value="Kristen">Kristen</option>
               <option value="Katolik">Katolik</option>
               <option value="Protestan">Protestan</option>
               <option value="Konghuchu">Konghuchu</option>
             </select>
           </td>
         </tr>
         <tr>
           <td>Email</td><td>:</td>
           <td><input type="text" name="email"></td>
         </tr>
         <tr>
           <td>Sekolah Asal</td><td>:</td>
           <td><input type="text" name="sekolah_asal"></td>
         </tr>
         <tr>
           <td>Jurusan</td><td>:</td>
           <td>
             <?php
             echo "<select name='kd_jurusan'>";
               $query = "SELECT * FROM jurusan ORDER BY kd_jurusan";
               $data = mysqli_query($koneksi, $query);
               while ($hasil = mysqli_fetch_assoc($data)) {
                 echo"<option value='$hasil[kd_jurusan]'>$hasil[nama_jurusan]</option>";
                 }
              echo "</select>";
                ?>
           </td>
         </tr>
       </table>
       <input type="submit" value="SIMPAN">
     </form>

   </body>
 </html>

 <?php require_once 'template/footer.php'; ?>
