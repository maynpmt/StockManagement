<?php 

    require_once 'includes/db_connection.php';
    $conn = OpenCon();
    $errors = array();

?>

<!-- place order button is pressed -->
<?php 
    if( isset($_POST['add_order'])){
        $productId = mysqli_real_escape_string($conn, $_POST['productId']); 
        // $qty = mysqli_real_escape_string($conn, $_POST['qty']); 
        $customerId = mysqli_real_escape_string($conn, $_POST['customerId']); 
        $status = "in progress";

        if (count($errors) == 0){ //if not error -> insert data to db 
            $sql= "INSERT INTO godzilla_store.orders (productId, ) VALUES ('$date', '$productId', '$amount')";
            $result = mysqli_query($conn ,$sql);

            $_SESSION['messagee'] = "Record has been saved!";
            $_SESSION['msg_type'] = "success";

            header("location: order.php");
    
       }  else {
            
            header("location: order.php");
       }
    }



?>