<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-secondary">

<div class="container">
            <div class="row">
                <div class="col-md-6 font-monospace  shadow bg-white p-3 border m-auto border-primary mt-3">
                <form action="login1.php" method="post" >
                <div class="mb-3">
                <p class="text-center fw-bold fs-3 text-warning">Login:</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Name:</label>
            <input type="text" name="username" class="form-control" placeholder="Enter user name">
            </div>

            <div class="mb-3">
                <label class="form-label">Password:</label>
            <input type="password" name="userpassword" class="form-control" placeholder="Enter password">
            </div>

            <button class="bg-danger my-3 form-control fs-4 fw-bold text-white">Login</button>

                </form>
                </div>
            </div>
        </div>

</body>
</html>