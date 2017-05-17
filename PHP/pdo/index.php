<?php 

require_once "koneksi.php";

$sql = "SELECT * FROM user";
$stmt = $pdo->prepare($sql);
$stmt -> execute();

$user = $stmt->fetchAll(PDO::FETCH_BOTH);
?>

<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>Data User</title>
</head>
<body>
<a href="create.php">Tambah</a>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>PASSWORD</th>
		</tr>
	<?php foreach ($user as $users) :?>
		<tr>
			<td><?= $users['id']?></td>
			<td><?= $users['user_name']?></td>
			<td><?= $users['password']?></td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>