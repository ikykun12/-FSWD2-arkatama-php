<?php

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
// Koneksi ke database
include_once("koneksi.php");

$conn = mysqli_connect($hostname,$username,$password,$database);

// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika tombol Submit ditekan
if (isset($_POST['submit'])) {
    // Ambil nilai dari inputan form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Proses upload file
    $nama_file = $_FILES['avatar']['name'];
    $ukuran_file = $_FILES['avatar']['size'];
    $tipe_file = $_FILES['avatar']['type'];
    $tmp_file = $_FILES['avatar']['tmp_name'];

    // Set path folder tempat menyimpan file
    $path = "uploads/";

    // Membuat direktori jika tidak ada
    if (!is_dir($path)) {
        mkdir($path);
    }

    // Set nama file sesuai dengan nama asli
    $nama_file_baru = $path . $nama_file;

    // Proses upload file ke server
    if (move_uploaded_file($tmp_file, $nama_file_baru)) {
        // Masukkan data ke dalam tabel users
        $sql = "INSERT INTO users (nama, email, role, phone, username, password, avatar) VALUES ('$nama', '$email', '$role', '$phone','$username','$password', '$nama_file_baru')";

        if (mysqli_query($conn, $sql)) {
           
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Gagal upload file";
    }

    // Tutup koneksi database
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Pengguna</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select class="form-control" id="role" name="role">
                    <option value="Admin">Admin</option>
                    <option value="Staf">Staf</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="avatar">Avatar:</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="New Password">New Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </form>
        <br>
        <a href="index.php" class="btn btn-secondary">Kembali ke Daftar Pengguna</a>
        <a href="logout.php" class="btn btn-secondary">Logout</a>

    </div>
</body>

</html>