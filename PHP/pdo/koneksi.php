<?php 

$hostname	= 'localhost';
$dbname		= 'pdo';
$username	= 'root';
$password	= '';

try {
	$pdo = new PDO("mysql:host={$hostname};dbname={$dbname}", $username, $password);
} catch (PDOException $e) {
	echo "connection failed". $e->getMassage();
} 
