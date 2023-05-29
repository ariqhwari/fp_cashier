<?php include '../conn.php';
//jika tidak ada session user maka ke login
if (!isset($_SESSION['user'])) {
    echo "<script>alert('Anda harus login!')</script>";
    echo "<script>location='../index.php'</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../src/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-danger navbar-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="#">$MALL CASHIER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer_cashier.php">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="penjualan.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="laporan.php">Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus quaerat reiciendis omnis
                        nemo id et nostrum magni doloremque, adipisci odio alias praesentium quo ipsa? Provident
                        repellat impedit rem ad nostrum.
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus quaerat reiciendis omnis
                        nemo id et nostrum magni doloremque, adipisci odio alias praesentium quo ipsa? Provident
                        repellat impedit rem ad nostrum.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="src/js/bootstrap.bundle.min.js"></script>
</body>

</html>