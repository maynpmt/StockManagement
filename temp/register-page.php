<?php
    session_start();
    
    require_once 'includes/db_connection.php';
    $conn = OpenCon();

    if( isset($_POST['submit']) ){

        // $username = $_POST['username'];
        // $password = $_POST['password'];
        $username = mysqli_escape_string($conn, $_POST['username']);
        $password = mysqli_escape_string($conn, $_POST['password']);
        
        
        $user_check = "SELECT * FROM godzilla_store.users WHERE employeeNumber = '$username' LIMIT 1";
        // query (เก็บใน $result)
        $result = mysqli_query($conn, $user_check);
        // fetch มา
        $user = mysqli_fetch_assoc($result);
        
        
        if($user['employeeNumber'] === $username){ //if user exists
            echo "<script>alert('Username already exists');</script>";
        }else {
            $passwordenc= md5($password);

            $query = "INSERT INTO godzilla_store.users (employeeNumber, password) VALUE('$username', '$passwordenc')";
            $result = mysqli_query($conn,$query);


            if($result){ 
                $_SESSION['success'] = "Insert user successfully";
                header("Location: index.php");
            }else {
                $_SESSION['error'] = "Something went wrong";
                // header("Location: login-page.php");
                echo($_SESSION['error']);
            }
        }

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
    <form action="register-db.php" method="post">
        <label for="username">Employee ID</label>
        <input type="text" name="username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        <input type="submit" name="submit" value="Register">

    </form>


</body>
</html>