<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Login</title>
</head>

<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="form-group">
                <label for="phone">Email:</label>
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="avatar">Password Pertama:</label>
                <input type="password" class="form-control" placeholder="Password" name="password"
                    value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn btn-success">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php"
                    class="btn btn-primary btn-lg">Register</a></p>
        </form>
    </div>
</body>

</html>