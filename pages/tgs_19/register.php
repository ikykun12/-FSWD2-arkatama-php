<?php 

include 'koneksi.php';
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    
    $path = "uploads/";
    $nama_file = $_FILES['avatar']['name'];
    $ukuran_file = $_FILES['avatar']['size'];
    $tipe_file = $_FILES['avatar']['type'];
    $tmp_file = $_FILES['avatar']['tmp_name'];
    
     // Membuat direktori jika tidak ada
     if (!is_dir($path)) {
        mkdir($path);
    }
    
    // Set nama file sesuai dengan nama asli
    $nama_file_baru = $path . $nama_file;
    
    if (move_uploaded_file($tmp_file, $nama_file_baru)) {
        // Masukkan data ke dalam tabel users
        $sql = "INSERT INTO users (nama, email, role, phone, username, password, avatar) 
                VALUES ('$nama', '$email', '$role', '$phone', '$username', '$password', '$nama_file_baru')";
 
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('DATA DI TAMBAHKAN!')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "GAGAL FILE UPD";
    }

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (nama, username, email, phone, role, password, avatar)
                    VALUES ('$nama', '$username', '$email', '$phone', '$role', '$password', 'default.png')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $phone = "";
                $role = "";
                $avatar="";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('SALAH DATA')</script>";
            }
        } else {
            echo "<script>alert('DATA SUKSES')</script>";
        }

    } else {
        echo "<script>alert('PASS SALAH ATAU KURANG COCOK')</script>";
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register User </title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="form-group">
                <label for="name">Name : </label>
                <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $nama; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="Username">Username : </label>
                <input type="text" class="form-control" placeholder="Username" name="username"
                    value="<?php echo $username; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email : </label>
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="phone">Phone : </label>
                <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo $phone; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select class="form-control" id="role" name="role">
                    <option value="Admin">Admin</option>
                    <option value="Staf">Staf</option>
                </select>
            </div>
            <div class="form-group">
                <label for="avatar">Avatar:</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" placeholder="Password" name="password"
                    value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="form-group">
                <label for="confirm password">Confirm Password :</label>
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword"
                    value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn btn-success">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php"
                    class="btn btn-primary btn-lg">Login </a></p>
        </form>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>