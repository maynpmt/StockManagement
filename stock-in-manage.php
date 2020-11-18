<?php 
    
    require_once 'includes/db_connection.php';
    $conn = OpenCon();

    $errors = array();

   
    $update = false;
    $date = '';
    $productId = '';
    $amount = '';
    

    if(isset($_POST['add_stock'])){
        $date = mysqli_real_escape_string($conn, $_POST['date']); 
        $productId = mysqli_real_escape_string($conn, $_POST['productId']); 
        $amount = mysqli_real_escape_string($conn, $_POST['amount']); 

        if (count($errors) == 0){ //if not error -> insert data to db 
            $sql= "INSERT INTO godzilla_store.stockin (date, productId, amount) VALUES ('$date', '$productId', '$amount')";
            $result = mysqli_query($conn ,$sql);

            $_SESSION['messagee'] = "Record has been saved!";
            $_SESSION['msg_type'] = "success";

            header("location: stock-in.php");
    
       }  else {
            
            // header("location: stock-in.php");
       }
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "DELETE FROM godzilla_store.stockin WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        $_SESSION['messagee'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";

        // header("location: stock-in.php");
    } 

    $id = 0;

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $sql = "SELECT * FROM godzilla_store.stockin WHERE id = $id";
        $update = true;
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows){
            $row = mysqli_fetch_array($result);
            $date = $row['date'];
            $productId = $row['productId'];
            $amount = $row['amount'];
        }
    }

    if (isset($_POST['update_stock'])){
        $id = $_POST['id'];
        $date = $_POST['date'];
        $productId = $_POST['productId'];
        $amount = $_POST['amount'];

        echo $id." ".$date." ".$productId." ".$amount;

        $sql = "UPDATE godzilla_store.stockin SET date = '$date', productId = '$productId', amount = '$amount' WHERE id = $id " ;
        $result = mysqli_query($conn, $sql);

        header("location: stock-in.php");

    }


    
    

?>