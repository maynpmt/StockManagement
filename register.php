<?php 
 require_once 'includes/db_connection.php';
 $conn = OpenCon();
 session_start();

?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="css/regstyle.css">

	<title>register</title>
</head>
<body>
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

	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row ">
			<div class="col-md-4 text-center company__info">
            <span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
				<h4 class="company_title"></h4>
			</div>
			<div class="gg">
				<div class="container-fluid">
					<div class="row">
						<h2>Register</h2>
					</div>
					<div class="row">
                        <!--form-->
						<form control="" class="form-group" action="register-db.php" method="post">
                        <?php include('errors.php'); ?>
							<div class="row">
								<input type="text" name="username" id="username" class="form__input" placeholder="Username">
                            </div>
                            
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="text" name="firstname" id="username" class="form__input" placeholder="Firstname">
                            </div>

                            <div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="text" name="lastname" id="username" class="form__input" placeholder="Lastname">
                            </div>

                            <div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="email" name="email" id="" class="form__input" placeholder="Email">
                            </div>

                            <div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Password">
                            </div>
                            
                            

							<div class="row">
								<input type="submit" name="submit" value="Register" class="btn">
                            </div>
                            
                            

						</form>
                        </div>
				</div>
			</div>
		</div>
	</div>
    <!-- Footer -->
    <br><br>
	<div class="gg">
		Coded with &hearts; by <a href=" ">GODzillA</a></p>
	</div>
</body>
