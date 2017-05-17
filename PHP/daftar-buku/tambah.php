<?php

require_once 'config.php';
require_once 'class-book.php';

$book = new book($conn);

if (isset($_POST['save'])) {
  $book_name = $_POST['book_name'];
  $price     = $_POST['price'];
  $stock     = $_POST['stock'];
  if (empty($book_name) && empty($price) && empty($stock)) {
    header("Location: index.php?alert=null");
  } else {
    if ($book->newBook($book_name, $price, $stock)) {
      header("Location: index.php?alert=insert");
    }
  }
}

 ?>
<form method="post">
  <table width="360px">
    <tr>
      <td>Book Name</td>
      <td><input type="text" name="book_name"></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><input type="text" name="price"></td>
    </tr>
    <tr>
      <td>Stock</td>
      <td><input type="text" name="stock"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="save" value="save"></td>
    </tr>
  </table>
</form>
