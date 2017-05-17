<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <header>
      <div id="menu">
        <ul>
          <li><a href="lihat-psb.php">Home</a></li>
          <li><a href="form-psb.php">Daftar Calon Siswa</a></li>
          <?php if (!isset($_SESSION['data_user'])): ?>
            <li><a href="login/login.php">LOGIN</a></li>
          <?php else: ?>
            <li><a href="login/logout.php">LOGOUT</a></li>
          <?php endif; ?>

        </ul>
      </div>
      <div id="main">
