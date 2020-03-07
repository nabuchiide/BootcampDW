<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light float-left">
      <a class="navbar-brand" href="#">Dumb Library</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse float-right">
        <!-- <ul class="navbar-nav"> -->
          <li class="nav ">
            <a class="btn btn-primary btn-sm mr-4" href="add_book.php">Add Book <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav">
            <a class="btn btn-primary btn-sm mr-4" href="add_writer.php">Add Writter</a>
          </li>
          <li class="nav">
            <a class="btn btn-primary btn-sm mr-4" href="add_categor.php">Add Category</a>
          </li>
        <!-- </ul> -->
      </div>
    </nav>
  </div>
  <div class="row mt-5">
      <?php  
          include "koneksi.php";
          $query_mysql = mysql_query("SELECT * FROM book_tb")or die(mysql_error());
          while($data = mysql_fetch_array($query_mysql)){
      ?>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo $data['img']; ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['name']; ?></h5> <!-- judul buku ganti dattabaase -->
          <a href="detail_buku.php" class="btn btn-primary">Detail</a>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>