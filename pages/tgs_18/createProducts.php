<?php
include 'database.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
} 

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
} 

if (isset($_POST['category_id'])){
    $category_id = $_POST['category_id'];
}

if (isset($_POST['description'])){
    $description = $_POST['description'];
}

if (isset($_POST['status'])) {
    $status = $_POST['status'];
} 
if (isset($_POST['price'])) {
    $price = $_POST['price'];
} 

function insertproducts($id,$nama,$category_id,$description,$status,$price){
    global $conn; 
    $query = "INSERT INTO products (id,name,category_id, description, price, status) 
    VALUES  ('$id', '$category_id','$nama', '$description', '$price', '$status')"; 
    return $query;
    if (mysqli_query($conn, insertproducts($id,$nama,$category_id,$description,$status,$price))) {
        echo 'Data berhasil ditambahkan';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

mysqli_close($conn); 
?>

<button><a href="form.php">Back Form</a></button>