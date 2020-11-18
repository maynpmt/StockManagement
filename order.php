<?php 
    require_once 'top.inc.php';
    require_once 'includes/db_connection.php';
    $conn = OpenCon();

 ?>

 <h1>Add Order</h1>
 <!-- form -->
<form action="order-manage.php" class="form" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="form-group">
    <label for="">Product ID</label>
    <input type="text" class="form-control" name="prodectId" value="">
</div>

<div class="form-group">
<label for="">Customer ID</label>
<input type="text" class="form-control" name="customerId" value="">
</div>
<div class="form-group">


<button type="submit" class="btn btn-success" name="add_order">Place order</button>

</form>
<!-- end of form -->


<!-- query order -->

<?php 
     $sql = "SELECT * FROM godzilla_store.orders ORDER BY orderNumber DESC";
     $result = mysqli_query($conn, $sql); 
?>

<h1>order table</h1>
<table class="table">
    <thead>
        <tr>
            <th>OrderNumber</th>
            <th>OrderDate</th>
            <th>RequiredDate</th>
            <th>ShippedDate</th>
            <th>Status</th>
            <th>Comments</th>
            <th>Customer ID</th>
            <th>Action</th>
        </tr>
    </thead>

    <?php  while($row=mysqli_fetch_assoc($result)) : ?>
       <tr>
            <td><?php echo $row['orderNumber'] ?></td>
            <td><?php echo $row['orderDate'] ?></td>
            <td><?php echo $row['requiredDate'] ?></td>
            <td><?php echo $row['shippedDate'] ?></td>
            <td><?php echo $row['status'] ?></td>
            <td><?php echo $row['comments'] ?></td>
            <td><?php echo $row['customerNumber'] ?></td>
            <td>
                <a href="customerOrder.php?edit= <?php echo $row['id']; ?>" class = "btn btn-info">Edit</a>
            </td>
       </tr>
     <?php endwhile?>

</table>

<!-- end of query order -->


<?php require('footer.inc.php'); ?>
