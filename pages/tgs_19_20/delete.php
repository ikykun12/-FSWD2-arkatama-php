<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Daftar Pengguna</h1>
        <?php
		// buat koneksi ke database
        include_once("koneksi.php");

        $conn = mysqli_connect($hostname,$username,$password,$database);
        

		// cek apakah ada permintaan penghapusan data pengguna
		if(isset($_GET["id"])) {
			$id = $_GET["id"];

			// hapus data pengguna dari tabel
			$sql = "DELETE FROM users WHERE id = $id";

			if(mysqli_query($conn, $sql)) {
				echo '<div class="alert alert-success" role="alert">Data pengguna berhasil dihapus dari tabel users</div>';
			} else {
				echo '<div class="alert alert-danger" role="alert">Data pengguna gagal dihapus dari tabel users: ' . mysqli_error($conn) . '</div>';
			}
		}

		// ambil data pengguna dari tabel
		$sql = "SELECT * FROM users";
		$result = mysqli_query($conn, $sql);

		// tampilkan data pengguna dalam tabel
		echo '<table class="table mt-4">';
		echo '<thead>';
		echo '<tr>';
		echo '<th>ID</th>';
		echo '<th>Nama</th>';
		echo '<th>Email</th>';
		echo '<th>Role</th>';
		echo '<th>Phone</th>';
		echo '<th>Avatar</th>';
		echo '<th>Aksi</th>';
		echo '<th>Username</th>';
		echo '<th>Password</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';

		while($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>' . $row["id"] . '</td>';
			echo '<td>' . $row["nama"] . '</td>';
			echo '<td>' . $row["email"] . '</td>';
			echo '<td>' . $row["role"] . '</td>';
			echo '<td>' . $row["phone"] . '</td>';
			echo '<td><img src="' . $row["avatar"] . '" width="50"></td>';
			echo '<td><a href="index.php?delete=' . $row["id"] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus pengguna ini?\')">Hapus</a></td>';
			echo "<td>" . $row['username']."</td>";
			echo "<td>" . $row['password']. "</td>";
			echo '</tr>';
		}

		echo '</tbody>';
		echo '</table>';
        header("Location:index.php");

		mysqli_close($conn);
		?>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>