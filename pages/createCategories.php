<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];


function insertCategories($id,$nama){
    global $conn; 
    $query = "INSERT INTO categories (id, name, created_at, updated_at) values ('$id','$nama', now(), now())"; 
    return $query;
}


if (mysqli_query($conn, insertCategories($id,$nama))) {
    echo 'Data berhasil ditambahkan';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

mysqli_close($conn); 
?>

<button><a href="form.php">kembali</a></button>