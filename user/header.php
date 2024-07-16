<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- favicon CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <style>
        .navbar-brand img {
            height: 60px; /* Adjust the height as needed */
            width: auto;  /* Maintain aspect ratio */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <!-- <a class="navbar-brand"><img src="ecommerce.jpg" alt=""></a> -->
    <a class="navbar-brand" href="#">
                <img src="ecommerce.jpg" alt="Logo">
    </a>
    <div class="d-flex">
    <a href="index.php" class="text-warning text-decoration-none pe-2 "><i class="fas fa-home"></i>Home</a>
    <a href="" class="text-warning text-decoration-none pe-2 "><i class="fas fa-shopping-cart"></i>Cart (0) |</a>

    <span class="text-warning pe-2">
    <i class="fas fa-user-shield text-warning"></i>Hello, |
    <a href="" class="text-warning text-decoration-none pe-2 ">Login</a>
    <a href="../admin/mystore.php" class="text-warning text-decoration-none pe-2 ">Admin</a>
    </span>
    </nav>
    </div>

    <div class="bg-danger font-monospace">
        <ul class="list-unstyled d-flex justify-content-center">
            <li><a href="laptop.php" class="text-decoration-none fw-bold fs-4 px-5 text-white">LAPTOPS</a></li>
            <li><a href="mobile.php" class="text-decoration-none fw-bold fs-4 px-5 text-white">MOBILES</a></li>
            <li><a href="bag.php" class="text-decoration-none fw-bold fs-4 px-5 text-white">BAGS</a></li>
        </ul>
    </div>

</body>
</html>