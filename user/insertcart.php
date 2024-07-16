<?php

session_start();

if(isset($_POST["addCart"])){
    $product_name = $_POST['P_Name'];
    $product_price = $_POST['P_Price'];
    $product_quantity = $_POST['P_Quantity'];

    $_SESSION['cart'][] = array(
                              'productName' => $product_name, 
                              'productPrice' => $product_price, 
                              'productQuantity' => $product_quantity);
                              print_r($_SESSION['cart']);
}
?>