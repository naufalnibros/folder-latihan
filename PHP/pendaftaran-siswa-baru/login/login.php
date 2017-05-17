<?php
session_start();
session_destroy();

require_once '../template/header.php';


if (isset($_GET['pesan'])) {
  echo $_GET['pesan'];
}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Login</title>
     <link rel="stylesheet" href="../template/style.css">
   </head>
   <body>
     <form action="cek-login.php" method="post">
        <table>
          <tr>
            <td>Username</td><td>:</td>
            <td><input type="text" name="username"></td>
          </tr>
          <tr>
            <td>Password</td><td>:</td>
            <td><input type="password" name="password"></td>
          </tr>
        </table>
        <input type="submit" name="submit" value="LOGIN">
     </form>
   </body>
 </html>


<?php require_once '../template/footer.php'; ?>
