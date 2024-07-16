<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <?php include 'header.php'; 
    ?>
</head>
<body>
  <div class="container-fluid">
    <div class="col-md-12">
   <div class="row">

    <h1 class="text-warning font-monospace text-center my-3">Bag</h1>
    <?php
    include 'config.php';
    $record = mysqli_query($connect , "select * from tbl_product");
    while($row = mysqli_fetch_array($record)){

      $checkPage = $row['P_Category'];
      if($checkPage === 'Bag'){
      
      echo "
      <div class = 'col-md-6 col-lg-4 m-auto mb-3'>
   <div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[P_img]' class='card-img-top m-auto' alt='...' style = 'width : 170px; height : 300px'>
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[P_Name]</h5>
    <p class='card-text  text-danger fs-4 fw-bold'>RS: $row[P_Price]</p>
    <input type = 'number' value = 'min = '1' max = '20'' placeholder = 'Quantity'><br><br>
    <input type = 'submit' class = 'btn btn-warning text-white w-100' value = 'Add To Cart'>
  </div>
</div>
</div>
";
}
    }
?>

</div>  
  </div>
  </div>
</body>
</html>