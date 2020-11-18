<?php

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
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM products where productVendor ='Welly Diecast Productions' " or die("Error:" . mysqli_connect_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($conn, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
 
echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>vendor</td><td>Scale</td><td>Code</td><td>Name</td><td>Price</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["productVendor"] .  "</td> "; 
  echo "<td>" .$row["productScale"] .  "</td> ";  
  echo "<td>" .$row["productCode"] .  "</td> ";
  echo "<td>" .$row["productName"] .  "</td> ";
  echo "<td>" .$row["buyPrice"] .  "</td> ";

}
echo "</table>";
//5. close connection.
?>
     <!-- ---------------------->

     
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>