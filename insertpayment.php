<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- mystyle CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Error</title>
</head>
<body>
    <?php
    require_once 'includes/db_connection.php';
    $conn = OpenCon();

    $customerNumber  = $_REQUEST['customerNumber'];
    $checkNumber		  = $_REQUEST['checkNumber'];
    $paymentDate	  = $_REQUEST['paymentDate'];
    $amount		  = $_REQUEST['amount'];


    $sql = "
        INSERT INTO payments
        VALUES ('$customerNumber','$checkNumber','$paymentDate','$amount');
        ";

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

    /*if ($objQuery) {
        echo "New record Inserted successfully";
    } else {
        echo "Error : Input";
    }*/

    mysqli_close($conn); // ปิดฐานข้อมูล


    require('payment.php');

    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
