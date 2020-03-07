
<?php   
    include 'koneksi.php';
    $name = $_POST['name'];
    $category_id = $_POST['category_id'];
    $writer_id = $_POST['writer_id'];
    $Publicaion_year = $_POST['Publicaion_year'];
    $input = mysql_query("INSERT INTO book_tb VALUES('','$name','$category_id','$writer_id','$Publicaion_year')");

    // header("location:index.php?pesan=input");
var_dump($input);
?>