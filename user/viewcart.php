<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5 rounded">
                <h1 class="text-warning">My Cart</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-lg-9 col-md-6">
                <table class="bg-danger table table-border text-center">
                    <thead class="bg-danger text-white fs-5">
                        <th>index no.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>

                    <tbody>
                        <?php
                        session_start();
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                                echo "
                                <tr>
                                <td>$key</td>
                                <td>$value[productName]</td>
                                <td>$value[productPrice]</td>
                                <td>$value[productQuantity]</td>
                                <td>$value[productName]</td>
                                <td>$value[productName]</td>
                                <td>$value[productName]</td>
                                </tr>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>