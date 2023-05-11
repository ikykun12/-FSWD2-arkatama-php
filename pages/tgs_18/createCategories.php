<?php
include 'database.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
}


function insertCategories($id,$nama){
   
    $query = "INSERT INTO categories (id, name) values ('$id','$nama')"; 
    return $query;
}
mysqli_close($conn); 
?>

<button class="btn btn-primary"><a href="form.php">Back Form</a></button>