<?php

require_once 'config.php';
require_once 'class-book.php';

$book = new book($conn);

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  if ($book->deleteBook($id)) {
    header('Location: index.php?alert=delete');
  }
}

 ?>
