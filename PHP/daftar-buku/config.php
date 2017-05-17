<?php

  $host   = 'localhost';
  $db     = 'toko_buku';
  $user   = 'root';
  $pass   = '';


  try {
    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
    $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    $e->getMessage();
  }
