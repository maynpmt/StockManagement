
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="css/sty.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
<?php
    require('top.inc.php');
?>

    <h1></h1>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="content">

    <!-- notification message -->
    <?php if(isset($_SESSION['success'])) : ?>
        <div class="success">
            <h3>
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']); //refresh -> unset
                 ?> 
            </h3>
        </div>
    <?php endif ?>
    
    </div>
    <!-- end of content -->
    
<?php
    require('footer.inc.php');
?>
</body>
</html>
