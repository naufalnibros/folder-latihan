<?php
require_once  'config.php';
require_once 'class-book.php';

$book = new book($conn);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>DATA BOOK</title>
     <link rel="stylesheet" href="bootstrap.min.css">
   </head>
   <body>
     <div class="container">
       <?php
           if (isset($_GET['alert'])) {

             $al = $_GET['alert'];

               if ($al == 'delete') {
                 $alert = '<div class="alert alert-success">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times; </a>
                             <strong> Success! </strong> Data telah dihapus
                           </div>';
                 $book->alert($alert);
               } elseif ( $al == 'update') {
                 $alert = '<div class="alert alert-success">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times; </a>
                             <strong> Success! </strong> Data telah diupdate
                           </div>';
                 $book->alert($alert);
               } elseif ( $al == 'insert') {
                 $alert = '<div class="alert alert-success">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times; </a>
                             <strong> Success! </strong> Data telah ditambah
                           </div>';
                 $book->alert($alert);
               } elseif ( $al == 'null') {
                 $alert = '<div class="alert alert-success">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times; </a>
                             <strong> Failed! </strong> Isi semua kolom!
                           </div>';
                 $book->alert($alert);
               }
           }

        ?>
       <h2 align="center">DATA BOOK</h2>
       <a class="btn btn-info bt-sm" href="tambah.php">ADD DATA</a>
       <table class="table table-striped">
         <thead>
           <tr>
             <th>No.</th>
             <th>Book Name</th>
             <th>Price</th>
             <th>Stock</th>
             <th>Opsi</th>
           </tr>
         </thead>
         <tbody>
           <?php
              //view table book
              $query = "SELECT * FROM book ORDER BY id DESC";
              $book->viewBook($query);
            ?>
         </tbody>
       </table>
     </div>
   </body>
 </html>
