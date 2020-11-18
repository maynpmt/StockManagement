<?php
    session_start();

    require_once 'includes/db_connection.php';
    $conn = OpenCon();

    $errors = array();

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']); //prevent special character
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $jobtitle = mysqli_real_escape_string($conn, $_POST['jobtitle']);

        //check users in database
        $user_check_query = "SELECT * FROM godzilla_store.users WHERE employeeNumber = '$username'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result) { //If user exists
            if ($result['employeeNumber'] === $username){
                array_push($errors, "Username already exists !");
            }
        }

        if (count($errors) == 0){ //if not error -> encrypt password
            $passwordenc = md5($password); 

            // insert user data to database
            $sql = "INSERT INTO godzilla_store.users (id, firstname, lastname, email, password, jobtitle) VALUES ('$username', '$firstname', '$lastname', '$email', '$passwordenc', '$jobtitle')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
       }  else {
            array_push($errors, "Username is already exists");
            $_SESSION['error'] = "Username is already exists";
            header("location: register.php");
       }
    }

  ?>
