<?php
if(isset($_POST['submit'])){

    include('config.php');

    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_location = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $image_des = "Uploadimage/" . $image_name;
    move_uploaded_file($image_location,"Uploadimage/" . $image_name);
    $product_category = $_POST['Pages'];

    //insert query
    mysqli_query($connect,"INSERT INTO `tbl_product`(`P_Name`, `P_Price`, `P_img`, `P_Category`) 
    VALUES ('$product_name','$product_price','$image_des','$product_category')");

    header("location:index.php");
}

?>

