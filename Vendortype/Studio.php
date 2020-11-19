<?php
    require_once '../top.inc.php';
    require_once '../includes/db_connection.php';
    $conn = OpenCon();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- link to each vendor -->
    <h1>productVendor</h1>
    <a href="/godzilla-store/Vendortype/Autoart.php">Autoart Studio Design</a> <br/>
    <a href="/godzilla-store/Vendortype/Carousel.php">Carousel DieCast Legends</a><br/>
    <a href="/godzilla-store/Vendortype/Classic.php">Classic Metal Creations</a><br/>
    <a href="/godzilla-store/Vendortype/Exoto.php">Exoto Designs</a><br/>
    <a href="/godzilla-store/Vendortype/Gearbox.php">Gearbox Collectibles</a><br/>
    <a href="/godzilla-store/Vendortype/Highway.php">Highway 66 Mini Classics</a><br/>
    <a href="/godzilla-store/Vendortype/Min.php">Min Lin Diecast</a><br/>
    <a href="/godzilla-store/Vendortype/Motor.php">Motor City Art Classics</a><br/>
    <a href="/godzilla-store/Vendortype/Red.php">Red Start Diecast</a><br/>
    <a href="/godzilla-store/Vendortype/Second.php">Second Gear Diecast</a><br/>
    <a href="/godzilla-store/Vendortype/Studio.php">Studio M Art Models</a><br/>
    <a href="/godzilla-store/Vendortype/Welly.php">Welly Diecast Productions</a><br/>

    <a href="../index.php">Home</a>
    <!-------------------------->
    <!-- ตาราง -->
    <h1>Product</h1>

     

<?php 
        $query = "SELECT * FROM products where productVendor ='Studio M Art Models' " or die("Error:" . mysqli_connect_error()); 
        $result = mysqli_query($conn, $query); 
    ?>
    <table class="table">
    <thead>
        <tr>
            <th>Vendor</th>
            <th>Scale</th>
            <th>Code</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
    </thead>

    <?php while($row = mysqli_fetch_array($result)) :  ?>
        <tr>
            <td><?php echo $row["productVendor"] ?></td>
            <td><?php echo $row["productScale"] ?></td>
            <td><?php echo $row["productCode"] ?></td>
            <td><?php echo $row["productName"] ?></td>
            <td><?php echo $row["buyPrice"] ?></td>
            
        </tr>
    <?php endwhile ?>

    <!-------------------------->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>