<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home-Page</title>

    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- favicon CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

</head>
<?php
session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");
}
?>
<body>

<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="text-decoration-none navbar-brandc text-white"><h1>MyStore</h1></a>

    <span>
    <i class="fas fa-user-shield"></i>
    Hello, <?php echo $_SESSION['admin']; ?>
    <i class="fas fa-sign-out-alt"></i>

    <a href="form/logout.php " class="text-decoration-none text-white">LogOut</a>
    <a href="" class="text-decoration-none text-white">UserPanel</a>
    </span>

  </div>
</nav>   

<div>
    <h2 class="text-center ">Dashboard</h2>
</div>

<div class="col-md-6 m-auto bg-danger text-center">
    <a href="product/index.php" class="px-5 text-white text-decoration-none fs-4 fw-bold">Add Post</a>
    <a href="" class="px-5 text-white text-decoration-none fs-4 fw-bold">Users</a>
</div>

</body>
</html>