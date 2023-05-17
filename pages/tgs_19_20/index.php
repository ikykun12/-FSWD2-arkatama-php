<?php
// Koneksi ke database
include_once("koneksi.php");

$conn = mysqli_connect($hostname,$username,$password,$database);

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // redirect ke halaman login jika pengguna belum login
}
 
// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data pengguna dari tabel add_users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Tutup koneksi database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h2>Daftar Pengguna</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Phone</th>
                    <th>Avatar</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php
                // Jika ada data pengguna, tampilkan dalam tabel
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['username']."</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['role'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td><img src='" . $row['avatar'] . "' height='100' width='100'></td>";
                        echo "<td><a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a> <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a></td>";
                       
                      
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada pengguna</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="add.php" class="btn btn-success">Tambah Pengguna</a>
        <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>
</body>

</html>