<?php
    require('top.inc.php');
?>

    <h1>Index</h1>

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