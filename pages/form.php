<!doctype html>
<html lang="en">

<head>
    <title>Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Form Categories</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <form method="post" action="createCategories.php">
                            <table>
                                <tr>
                                    <td><label for="id">ID</label></td>
                                    <td>:</td>
                                    <td><input type="text" id="id" name="id" required></td>
                                </tr>
                                <tr>
                                    <td><label for="nama">Nama</label></td>
                                    <td>:</td>
                                    <td><input type="text" id="nama" name="nama" required></td>
                                </tr>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Form Products</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <form method="post" action="createProducts.php">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>Form</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><label for="id">ID</label></td>
                                        <td>:</td>
                                        <td><input type="text" id="id" name="idP" required></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><label for="kategori">kategori ID</label></td>
                                        <td>:</td>
                                        <td><input type="text" id="kategori" name="kategori" required></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><label for="nama">Nama</label></td>
                                        <td>:</td>
                                        <td><input type="text" id="nama" name="namaP" required></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td><label for="description">description</label></td>
                                        <td>:</td>
                                        <td><input type="text" id="description" name="description" required></td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td><label for="price">price</label></td>
                                        <td>:</td>
                                        <td><input type="text" id="price" name="price" required></td>
                                    </tr>
                                    <tr>
                                        <th class="row">6</th>
                                        <td><label for="status">status</label></td>
                                        <td>:</td>
                                        <td>
                                            <select name="status" id="status">
                                                <option value="accepted">accepted</option>
                                                <option value="rejected">rejected</option>
                                                <option value="waiting">waiting</option>
                                            </select>
                                        <td>
                                    </tr>
                                    <tr>
                                        <th class="row">7</th>
                                        <td><label for="created">created</label></td>
                                        <td>:</td>
                                        <td><input type="text" id="created" name="created" required></td>
                                    </tr>
                                    <tr>
                                        <th class="row">8</th>
                                        <td><label for="verified">verified</label></td>
                                        <td>:</td>
                                        <td><input type="text" id="verified" name="verified" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" class="btn btn-primary"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>