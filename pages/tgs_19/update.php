<?php
// Koneksi ke database
include_once("koneksi.php");

$conn = mysqli_connect($hostname,$username,$password,$database);

// Mengambil data dari form edit
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$role = $_POST['role'];
$phone = $_POST['phone'];
$avatar = $_POST['avatar'];

// Query untuk memperbarui data pengguna
$sql = "UPDATE users SET nama='$nama', email='$email', role='$role', phone='$phone', avatar='$avatar' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  // Jika query berhasil dijalankan, arahkan kembali ke halaman index.php
  header('Location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi ke database
mysqli_close($conn);
?>