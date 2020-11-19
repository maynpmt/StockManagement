<?php 
    session_start();
    include('includes/db_connection.php');
    $conn = OpenCon();

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    }

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM godzilla_store.users WHERE id = '$username' AND password = '$password'" or die("Error:" . mysqli_connect_error());
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['message'] = "You are now logged in";

            $query = "SELECT * FROM godzilla_store.users WHERE id = '$username' AND password = '$password' AND jobtitle LIKE '%sale%'" or die("Error:" . mysqli_connect_error());
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) == 1){
                $_SESSION['sale'] = "Sale";
            }

            header("location: index.php");
        }else {
            array_push($errors, "Wrong username/password combination");
            $_SESSION['error'] = "Wrong username or password try again !!!";
            header("location: login.php");
        }

    }
?>