<?php
// deklarasi variabel dengan nilai biodata 
$nama = "Risky Pranata";
$umur = 20;
$tempat_lahir = "Belitang";
$tanggal_lahir = "20 April 2001";
$jenis_kelamin = "Pria";
$alamat = "Jalan Ki Merogan Kertapati";
$hobi = array("main game, tidur, ngoding");
$jurusan = "Teknik Informatika";
$universitas = "Indo Global Mandiri";
$email = "Pranatarizky858@gmail.com";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Biodata Diri</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
    /* CSS untuk styling tambahan */
    body {
        padding-top: 50px;
    }

    .starter-template {
        padding: 40px 15px;
        text-align: center;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Biodata Diri</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="starter-template">
            <img src="image/iky.jpg" alt="Foto Profil" class="img-circle" height="450px">
            <h1><?php echo $nama; ?></h1>
            <p class="lead"><?php echo $universitas; ?> </p>
            <ul class="list-unstyled">
                <li><strong>Jurusan:</strong><?php echo $jurusan; ?></li>
                <li><strong>Email:</strong> <?php echo $email; ?></li>
                <li><strong>Alamat:</strong><?php echo $alamat;?></li>
                <li><strong>Umur:</strong> <?php echo $umur; ?></li>
                <li><strong>Umur:</strong> <?php echo $jenis_kelamin; ?></li>
                <li><strong>Tempat tanggal lahir:</strong><?php echo $tempat_lahir . ', ' . $tanggal_lahir;?></li>
                <li><strong>Hobi:</strong> <?php echo implode(", ", $hobi); ?></li>

            </ul>
        </div>
    </div>

    <!-- JavaScript Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>