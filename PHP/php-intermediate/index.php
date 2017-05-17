<?php

// include 'template/header.php';
// require('template/header.php');
// require 'template/header.php';

require_once 'template/header.php'; // mencegah mengulang template

 ?>

    <main>
      Selamat datang di "Belajar Koding"
      Solusi belajar mudah tanpa belajar

      <h3>Implode dan Explode</h3>

      <?php

        // merubah array ke string dan
        // merubah string ke array

        //implode(separator, array); ==> merubah array ke string
        $pekerjaan = ['menulis', 'membaca', 'berbicara', 'berkelahi'];
        echo implode(" | ", $pekerjaan);

        echo "<br><br>";

        //explode(separator, string, jumlahArray); ==> merubah string ke array
        //explode(separator, string); -> secara otomatis mengambil array nya
        $pelajaran = "matematika fisika biologi kimia ppkn";
        print_r(explode(" ", $pelajaran, 3));
        echo "<br>";
        print_r(explode(" ", $pelajaran));

        echo "<br><br>";
       ?>

      <h3>Fungsi Date</h3>
      <?php echo date('d - M - Y'); // tanggal bulan tahun == otomatis  ?>
      <br><br>

      <h3>trim dan strip_tags</h3>
      <?php

        //trim(); ==>  menghilangkan white space
        //rtrim() right
        //ltrim() left

        $teks = " makan sayur ";
        echo "hari ini" . $teks . "dirumah";
        echo "<br>";
        echo "besok" . trim($teks) . "dimana?";
        echo "<br><br>";

        $teks2 = "<script>alert('Jangan SPAM!!')</script>";
        $teks3 = "<b>Selamat</b> datang";
        // echo $teks2;
        echo strip_tags($teks2);
        echo "<br>";
        echo $teks3; // tanpa strip_tags()
        echo "<br>";
        echo strip_tags($teks3); // menggunakan strip_tags()
        echo "<br>";
        echo strip_tags($teks3, '<b>'); //menggunakan strip_tags(var, tag_yg_diizinkan);
       ?>

    </main>

<?php
// require 'template/footer.php';
require_once 'template/footer.php'; // mencegah mengulang template
?>
