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