<?php 

    require_once 'includes/db_connection.php';
    $conn = OpenCon();
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</head>
<body>
    <h1>Login</h1>

    <form action="login-db.php" method="post">
     
        <!-- notification message -->
        <?php if(isset($_SESSION['error'])) : ?>
            <div class="error">
                <h5>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']); //refresh -> unset
                    ?> 
                </h5>
            </div>
        <?php endif ?>

        <div class="input-group">
            <label for="username" >Username</label>
            <input type="text" name="username" id="">
        </div>

        <div class="input-group">
            <label for="password" >Password</label>
            <input type="password" name="password" id="">
        </div>

        <div class="input-group">
            <button type="submit" name="login_user" class="btn" id="">Login</button>
        </div>

        <p>Not yet a member ? <a href="register.php">Sign Up</p>

    </form>

    
</body>
</html>