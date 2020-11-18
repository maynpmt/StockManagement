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
    <title>Register</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
    <h1>Register</h1>

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

    <form action="register-db.php" method="post">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label for="username" >Username</label>
            <input type="text" name="username" id="">
        </div>
        <div class="input-group">
            <label for="firstname" >Firstname</label>
            <input type="text" name="firstname" id="">
        </div>
        <div class="input-group">
            <label for="lastname" >Lastname</label>
            <input type="text" name="lastname" id="">
        </div>
        <div class="input-group">
            <label for="email" >Email</label>
            <input type="email" name="email" id="">
        </div>
        <div class="input-group">
            <label for="password" >Password</label>
            <input type="password" name="password" id="">
        </div>

        <div class="form-group input-group">
            <label for="jobtitle">Job Title:</label>
            <select class="form-control" name="jobtitle" id="jobtitle">
                <option>President</option>
                <option>Sales Manager (EMEA)</option>
                <option>Sales MAnager (APAC)</option>
                <option>Sales Manager (NA)</option>
                <option>Sales Rep</option>
                <option>VP Marketing</option>
                <option>VP Sales</option>
            </select>
        </div>

        <div class="input-group">
        <input type="submit" name="submit" value="Register">
        </div>

        <p>Already a member ? <a href="login.php">Sign in</p>

    </form>
    
</body>
</html>