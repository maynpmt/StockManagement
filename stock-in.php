<?php
    require_once 'top.inc.php';
    require_once 'stock-in-manage.php';

    if (!isset($_SESSION['sale'])){
        $_SESSION['msg'] = "Only SALE can access stock-in page";
        header('location: index.php');
    }

?>

    <!-- <?php if( isset($_SESSION['messagee']) ) : ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php 
            echo $_SESSION['messagee'];
            unset($_SESSION['msg_type']);
        ?>
    </div>
    <?php endif ?> -->

    <h1>Stock-in system</h1>

    

    <form action="stock-in-manage.php" class="form-inline" method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="form-group">
            <label for="">Date</label>
            <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
        </div>
        <div class="form-group">
            <label for="">Product ID</label>
            <input type="text" class="form-control" name="productId" value="<?php echo $productId; ?>">
        </div>
        <div class="form-group">
        <label for="">Amount</label>
        <input type="text" class="form-control" name="amount" value="<?php echo $amount; ?>">
        </div>

        <?php if($update ==  true): ?>
            <button type="submit" class="btn btn-info" name="update_stock">Update</button>
        <?php else: ?>
        <button type="submit" class="btn btn-success" name="add_stock">Add</button>
        <?php endif; ?>

    </form>



    <?php 
        $sql = "SELECT * FROM godzilla_store.stockin ORDER BY date DESC";
        $result = mysqli_query($conn, $sql); 
    ?>

    <h3>Stock-in table</h3>
    <div class="">
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Product ID</th>
                <th>Amount of product</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <?php  while($row=mysqli_fetch_assoc($result)) : ?>
       <tr>
            <td><?php echo $row['date'] ?></td>
            <td><?php echo $row['productId'] ?></td>
            <td><?php echo $row['amount'] ?></td>
            <td>
                <a href="stock-in.php?edit= <?php echo $row['id']; ?>" class = "btn btn-info">Edit</a>
                <a href="stock-in.php?delete= <?php echo $row['id']; ?>" class = "btn btn-danger">Delete</a>
            </td>
       </tr>
     <?php endwhile?>
    
    </table>
    
    
    </div>
    
    <?php
    require('footer.inc.php');
?>

