<?php
include 'koneksi.php';
$id = $_POST['idP'];
$nama = $_POST['namaP'];
$kategori_id = $_POST['kategori'];
$desc = $_POST['description'];
$price = $_POST['price'];
$status = $_POST['status'];
$created = $_POST['created'];
$verified = $_POST['verified'];

function insertproducts($id,$kategori_id,$nama,$desc,$price,$status,$created,$verified){
    global $conn; 
    $query = "INSERT INTO products (id, category_id, name, description, price, status, created_at, updated_at, created_by, verified_at, verified_by ) 
    values ('$id', '$kategori_id','$nama', '$desc', '$price', '$status', now(), now(), '$created', now(), '$verified')"; 
    return $query;
    if (mysqli_query($conn, insertproducts($id,$kategori_id,$nama,$desc,$price,$status,$created,$verified))) {
        echo 'Data berhasil ditambahkan';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

mysqli_close($conn); 
?>

<button><a href="form.php">Back</a></button>