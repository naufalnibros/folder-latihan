<?php
    require_once "koneksi.php";

    if(isset($_POST['submit'])){
        try {

            $params  = [
                'user_name'   => $_POST['user_name'],
                'password' => $_POST['password'],
             ];

            $sql = "INSERT INTO user (user_name,password) VALUES  (:user_name,:password)";
            $stmt= $pdo->prepare($sql);
            $stmt->execute($params);


            header("location: index.php");
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Tambah Data</h1>
	<form action="create.php" method="post">
		<p>Nama</p>
		<input type="text" name="user_name">
		<p>Password</p>
		<input type="text" name="password"> <br><br>

		<input type="submit" name="tambah" value="Tambah">
	</form>
</body>
</html>