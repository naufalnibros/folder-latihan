<?php

session_start();

require_once 'connection.php';
require_once 'template/header.php';

if (isset($_SESSION['data_user'])) {
  echo "nama admin : ". $_SESSION['data_user']; }
// } else {
//   $_GET['salah'] = "Maaf anda belum login";
//   header('Location:login/login.php?pesan='.$_GET['salah']);
// }

 ?>

 <!DOCTYPE html>

     <link rel="stylesheet" href="template/style.css">
     <h1>Tabel Calon Siswa Baru</h1>


     <table border="1">
       <tr>
         <th>No. </th>
         <th>No. Pendaftaran</th>
         <th>Nama Lengkap</th>
         <th>Jurusan</th>
         <?php if (isset($_SESSION['data_user'])): ?>
           <th>Opsi</th>
         <?php endif; ?>
       </tr>

       <?php

         $no = 1;
         $query = "SELECT * FROM siswa, jurusan WHERE siswa.kd_jurusan = jurusan.kd_jurusan ORDER BY no_pendaftaran DESC";
         $data = mysqli_query($koneksi, $query);
       ?>


        <?php while ($hasil = mysqli_fetch_assoc($data)): ?>

           <tr>
             <td><?= $no ?>.</td>
             <td><?= $hasil['no_pendaftaran'] ?></td>
             <td><?= $hasil['nama'] ?></td>
             <td><?= $hasil['nama_jurusan'] ?></td>
            <?php if (isset($_SESSION['data_user'])): ?>
             <td>
            <?php echo"  <a href=edit-psb.php?id=$hasil[no_pendaftaran]> Edit</a> | <a href=\"hapus-psb.php?id=$hasil[no_pendaftaran]\" onclick=\"return confirm('Yakin hapus $hasil[nama] ?')\">hapus </a>"; ?>
             </td>
            <?php endif; ?>
          </tr>

          <?php $no++; ?>
        <?php endwhile; ?>

      </table>



     <form action="form-psb.php" method="post">
       <input type="submit" name="" value="DAFTAR SISWA BARU">
     </form>



<?php require_once 'template/footer.php';  ?>
