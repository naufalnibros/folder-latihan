<?php

require_once 'config.php';
require_once 'class-book.php';

$book = new book($conn);

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $edit = $book->editBook($id);
}

if (isset($_POST['update'])) {
  $book_name = $_POST['book_name'];
  $price     = $_POST['price'];
  $stock     = $_POST['stock'];
  $id        = $_POST['id'];
  if (empty($book_name) && empty($price) && empty($stock)) {
    header("Location: index.php?alert=null");
  } else {
    if ($book->updateBook($book_name, $price, $stock, $id)) {
      header("Location: index.php?alert=update");
    }
  }
}


 ?>
