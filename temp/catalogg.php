<?php
    session_start();
   
    require_once 'includes/db_connection.php';
    $conn = OpenCon();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godzilla Store</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

</head>
<body>

    <h1>Product Catalog</h1>
    <?php 
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);

        if($result){
            while($record = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                echo $record['productCode']." ". $record['productName']." ". $record['productVendor'];  ?> <br> <?php
            }
        }else {
            
        }
    ?>

    <!-- <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> -->
</body>
</html>