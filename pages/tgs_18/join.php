<?php
include 'database.php';
$query = "SELECT p.id AS product_id, p.name AS product_name, c.id AS category_id, c.name AS category_name
FROM products p
JOIN categories c ON p.category_id = c.id
";

$result = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Join</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Join</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead>
                                <th>product_id</th>
                                <th>product_name</th>
                                <th>category_id</th>
                                <th>category_name</th>
                            </thead>
                            <tbody>
                                <?php  
                                while ($row = mysqli_fetch_assoc($result)) :?>
                                <tr>
                                    <td><?= $row['product_id'] ?></td>
                                    <td><?= $row['product_name'] ?></td>
                                    <td><?= $row['category_id'] ?></td>
                                    <td><?= $row['category_name'] ?></td>
                                </tr>

                                <?php endwhile; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>

</body>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>

</html>