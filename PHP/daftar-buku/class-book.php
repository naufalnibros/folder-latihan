<?php

  class book {

    private $db;

    function __construct($conn)
    {
      $this->db = $conn;
    }
    //INSERT NEW BOOK
    public function newBook($book_name, $price, $stock)
    {
      $data = $this->db->prepare("INSERT INTO book (book_name, price, stock) VALUES (:book_name, :price, :stock)");
      $data->execute( array( ':book_name' => $book_name,
                             ':price'     => $price,
                             ':stock'     => $stock ) );
      return $data;
    }
    //UPDATE BOOK`
    public function updateBook($book_name, $price, $stock, $id)
    {
      try {
        $data = $this->db->prepare("UPDATE book SET book_name=:book_name, price=:price, stock=:stock WHERE id=:id");
        $data->execute( array( ':book_name' => $book_name ,
                               ':price'  => $price,
                               ':stock' => $stock,
                               ':id'  => $id ) );
        return $data;
      } catch (Exception $e) {

      }
    }
    //DELETE BOOK
    public function deleteBook($id)
    {
      $data = $this->db->prepare("DELETE FROM book WHERE id=:id");
      $data->execute(array(':id' => $id));
      return $data;
    }
    //GET ID BOOK
    public function getIDbook($id)
    {
      $data = $this->db->prepare("SELECT * FROM book WHERE id=:id");
      $data->execute( array( ':id' => $id ));
      return $data;
    }
    //EDIT BOOK
    public function editBook($id)
    {
      $data = $this->db->prepare("SELECT * FROM book WHERE id=:id");
      $data->execute( array(':id' => $id ));
      $result = $data->fetch(PDO::FETCH_LAZY);
      ?>
        <form method="post">
          <table width="360px">
            <td><input type="text" name="id" value="<?= $result[0]; ?>" hidden></td>
            <tr>
              <td>Book Name</td>
              <td><input type="text" name="book_name" value="<?= $result[1]; ?>"></td>
            </tr>
            <tr>
              <td>Price</td>
              <td><input type="text" name="price" value="<?= $result[2]; ?>"></td>
            </tr>
            <tr>
              <td>Stock</td>
              <td><input type="text" name="stock" value="<?= $result[3]; ?>"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="update" value="UPDATE"></td>
            </tr>
          </table>
        </form>
      <?php
    }
    //VIEW BOOK
    public function viewBook($query)
    {
      $data = $this->db->prepare($query);
      $data->execute();
      $no = 1;

      if ($data->rowCount() > 0) {
        while ($result = $data->fetch(PDO::FETCH_LAZY))
        {
          ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $result->book_name; ?></td>
            <td><?= $result->price; ?></td>
            <td><?= $result->stock; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $result->id; ?>">EDIT | </a>
              <a href="delete.php?id=<?php echo $result->id; ?>"> HAPUS</a>
            </td>
          </tr>
          <?php
          $no++;
        }
      } else {
        echo "<h2>NO DATA</h2>";
      }
    }
    //ALERT
    public function alert($alert)
    {
      echo $alert;
    }
  }
