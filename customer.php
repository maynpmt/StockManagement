<?php 
    require_once 'top.inc.php';
    require 'includes/db_connection.php';
    $conn = OpenCon();

 ?>

 <!-- retrieve order -->

<?php 
     $sql = "SELECT * FROM godzilla_store.customers ORDER BY customerNumber DESC";
     $result = mysqli_query($conn, $sql); 
?>

<h1 style="margin-top:50px;">Customer table</h1>
<table class="table">
    <thead>
        <tr>
            <th>customerNumber</th>
            <th>customerName</th>
            <th>contactLastName</th>
            <th>contactFirstName</th>
            <th>phone</th>
            <th>addressLine1</th>
            <th>addressLine2</th>
            <th>city</th>
            <th>state</th>
            <th>postalCode</th>
            <th>country</th>
            <!-- <th>salesRepEmployeeNumber</th> -->
            <th>Action</th>
        </tr>
    </thead>

    <?php  while($row=mysqli_fetch_assoc($result)) : ?>
       <tr>
            <td><?php echo $row['customerNumber'] ?></td>
            <td><?php echo $row['customerName'] ?></td>
            <td><?php echo $row['contactLastName'] ?></td>
            <td><?php echo $row['contactFirstName'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['addressLine1'] ?></td>
            <td><?php echo $row['addressLine2'] ?></td>
            <td><?php echo $row['city'] ?></td>
            <td><?php echo $row['state'] ?></td>
            <td><?php echo $row['postalCode'] ?></td>
            <td><?php echo $row['country'] ?></td>
            <!-- <td><?php echo $row['salesRepEmployeeNumber'] ?></td> -->
            <td><?php  ?></td>
            <td>
                <a href="customer.php?edit= <?php echo $row['id']; ?>" class = "btn btn-info">Edit</a>
                <a href="./customerOrder.php?vieworder= <?php echo $row['id']; ?>" class = "btn btn-primary">View order</a>
            </td>
       </tr>
     <?php endwhile?>

</table>

<!-- end of retrieve order -->


<?php require('footer.inc.php'); ?>