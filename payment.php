<?php
    require('top.inc.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css" >

    <!-- mystyle CSS -->
    <link rel="stylesheet" href="css/style.css">
   

    <title>payment</title>
  </head>
  <body>

    <?php
    require_once 'includes/db_connection.php';
    $conn = OpenCon();

    $sql = '
        SELECT * 
        FROM payments
        order by paymentDate DESC 
        ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

    mysqli_close($conn); 

    ?>
    
    
    <!-- navbar 
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">GODzillA </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        </ul>
    </div>
    </nav> -->

    <!-- insert -->
    <form class="form-inline" id="fi" action="insertpayment.php" method="post" name="payments">
    <label class="sr-only" for="inlineFormInputName2">Name</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Customer Number" name="customerNumber">
    
    <label class="sr-only" for="inlineFormInputName2">Name</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Check Number" name="checkNumber">

    <label class="sr-only" for="inlineFormInputName2">Name</label>
    <input type="date" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Payment Date" name="paymentDate">

    <label class="sr-only" for="inlineFormInputName2">Name</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Amount" name="amount">

    <button type="submit" class="btn btn-danger" id="bt" value="Insert Data">add</button>
    </form>
    


    <!-- table -->
    <table class="table" id="tb">
    <thead class="thead-dark">
        <tr>
        <th>Customer Number</th>
        <th>Check Number</th>
        <th>Payment Date</th>
        <th>Amount</th>
        </tr>
    </thead>
    <tbody>
    </tr>
    <?php
    
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        
        <td><?php echo $objResult["customerNumber"]; ?></td>
        <td><?php echo $objResult["checkNumber"]; ?></td>
        <td><?php echo $objResult["paymentDate"]; ?></td>
        <td><?php echo $objResult["amount"]; ?></td>
        
      </tr>
    <?php
    }
    ?>
    </tbody>
  
    </table>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
    require('footer.inc.php');
?>