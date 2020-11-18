<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1>Employee Login</h1>
    <form action="login.php" method="post">
    <label for="username">Employee Number</label>
    <input type="text" name="username" placeholder="Employee number" required>
    <br>
    <label for="username">Password</label>
    <input type="password" name="password" placeholder="Password" required>
    <br>
    <input type="submit" name="submit" value="Login">
    
    </form>
    <a href="register-page.php">Go to register page</a>

</body>
</html>