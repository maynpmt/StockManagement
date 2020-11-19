<?php 
     session_start();
    require_once 'includes/db_connection.php';
    $conn = OpenCon();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- test css -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/mystyle.css">


    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</head>
<body>
   
    
<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
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

                <h3>Login</h3>
               <div class="row">
                    <div class="col-md-12">
                        
                    

                        <div class="form-group">
                            <label for="username" >Username</label>
                            <input type="password" name="username" id="" class="form-control" placeholder="username" value="" >
                        </div>

                        <div class="form-group">
                            <label for="password" >Password</label>
                            <input type="password" name="password" id="" class="form-control" placeholder="password" value="" >
                        </div>


                        <div class="form-group">
                            <button type="submit" name="login_user" class="btnContact" id="">Login</button>
                        </div>

                        <p><a href="register.php">Register</p>
                    
            </form>
</div>
    

    
</body>
</html>