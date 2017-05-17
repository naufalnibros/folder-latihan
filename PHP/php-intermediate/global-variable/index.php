<?php

//---------------------
// --- GET dan POST ---
//---------------------
// get dan post adalah sejenis request untuk mengolah atau memindah data

//pada method get nilai key nya muncul di Url
// sedangkan method post nilai key nya tidak akan muncul di url ==> biasanya digunakan untuk login, form regitrsi, dll

//metode isset() u/ menguji apakah nilainya sudah di set atau belum

//contoh GET
// if (isset($_GET['password'])) {
//   echo $_GET['password'];
// }else {
//   echo "Data password belum di masukkan!!";
// }

if (isset($_GET['password'])) {
  echo $_GET['password'];
}

echo "<br><br>";

if (isset($_POST['password'])) {
  echo $_POST['password'];
}

 ?>
 <p>ini form get</p>
 <form action="index.php" method="get"> <!-- Method ini sangat berpengaruh pada url -->
   <input type="text" name="nama">
   <input type="password" name="password">
   <input type="submit" name="submit">
 </form>

<br><br>

<p>ini form post</p>
<form action="" method="post"> <!-- Method ini sangat berpengaruh pada url -->
  <input type="text" name="nama">
  <input type="password" name="password">
  <input type="submit" name="submit">
</form>

<br><br>

<p>form ini mengarah ke profile.php</p>
<!-- Method ini sangat berpengaruh pada url : samakan dengan method yg ada pada action=" " -->
<form action="profile.php" method="get">
  <input type="text" name="nama">
  <input type="password" name="password">
  <input type="submit" name="submit">
</form>
