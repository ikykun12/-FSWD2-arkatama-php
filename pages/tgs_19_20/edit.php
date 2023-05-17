<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
// buat koneksi ke database
include_once("koneksi.php");
$conn = mysqli_connect($hostname,$username,$password,$database);


// cek apakah ada permintaan edit data pengguna
if(isset($_GET["id"])) {
    $id = $_GET["id"];

    // ambil data pengguna dari tabel
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row["nama"];
        $email = $row["email"];
        $role = $row["role"];
        $phone = $row["phone"];
        $avatar = $row["avatar"];
        $username = $row["username"];
        
    } else {
        echo '<div class="alert alert-danger" role="alert">Data pengguna tidak ditemukan.</div>';
        exit;
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Permintaan edit data pengguna tidak valid.</div>';
    exit;
}

// cek apakah ada permintaan simpan perubahan data pengguna
if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password =$_POST["password"];
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
       $sql = "INSERT INTO users (nama, email, role, phone, username, password,avatar) VALUES ('$nama', '$email', '$role', '$phone','$username','$password','$nama_file_baru')";

       if (mysqli_query($conn, $sql)) {
           echo "Data berhasil disimpan";
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
   } else {
       echo "Gagal upload file";
   }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Pengguna</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Edit Pengguna</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="">Pilih Role</option>
                    <option value="Admin" <?php if($role == "Admin") echo "selected"; ?>>Admin</option>
                    <option value="Staf" <?php if($role == "Staf") echo "selected"; ?>>Staf</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
            </div>
            <div class="form-group">
                <label for="avatar">Avatar:</label>
                <input type="file" class="form-control" id="avatar" name="avatar" value="<?php echo $avatar; ?>">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>"
                    required>
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
        <br>
        <a href="index.php" class="btn btn-secondary">Kembali ke Daftar Pengguna</a>
        <a href="logout.php" class="btn btn-secondary">Logout</a>

    </div>