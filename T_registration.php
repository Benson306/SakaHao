<!DOCTYPE html>
<html>
<head>
	<title>Sakahao</title>

<!-- bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- icons -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<!-- End of bootsrap -->

<div class="container" >
<?php
require("connection.php");
?>

</head>
<center>
	<h4>New user registration Panel </h4>
</center>
	

                    <!-- navigation bar -->
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
			<!-- logo -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand">SH</a>
			</div>
			<!-- Menu items -->
			<div class="collapse navbar-collapse" id="mainNavBar">
					<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>	

							<!-- Drop down menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contacts<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li>
										<a href="https://www.facebook.com/SakaHao" data-toggle="tooltip" title="Like" class="btn btn-muted btn-icon btn-round">
	                    					<i class="fa fa-facebook-square"></i>
				                		</a>
				                	</li>
									<li>
										<a href="https://twitter.com/SakaHao" data-toggle="tooltip" title="Follow us" class="btn btn-primary btn-icon btn-round">
						                    <i class="fa fa-twitter"></i>
						                </a>
									</li>
									<li>
										<a href="https://www.instagram.com/Saka_Hao" data-toggle="tooltip" title="Follow us" class="btn btn-success btn-icon btn-round">
		                     				<i class="fa fa-instagram"></i>
		               					 </a>
									</li>
								</ul>
							</li>
					</ul>
					<!-- Right align-->
					<ul class="nav navbar-nav navbar-right">
						<li><a href="developer.html">Developers Bio</a></li>
					</ul>
			</div>
	</div>
</nav>
<!-- end of navigation bar -->

<hr>
<br>
<br>
<div class="col-md-9">
	<div class="col-md-offset-3 well well-sm">
		<form method="post">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Username" name="username" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Phone Number(Format: 07XXXXXXXX)" name="phone_number" required="yes">
		</div>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Email - optional" name="email">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Password" name="password" required="yes">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required="yes">
		</div>
		<div class="form-group">
			<input type="checkbox" name="TC" required="yes"> I Agree to the terms and conditions .. <a href="#" data-toggle="modal" data-target="#popupwindow"><code>Click here to read</code></a>
		</div>

		<input type="submit" class="btn btn-danger" name="register">
		<h3> After successfully Filling this form please Login again with the details that you have filled</h3>
		</form>
	</div>
	
<!-- Pop up window -->

<div class="modal fade" id="popupwindow">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- header -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" >&times;</button>
					<h4 class="modal-title">Terms and conditions</h4>
				</div>
			<!-- body -->
				<div class="modal-body">
					<p>1. Payement received in the oncoming stages will not be refunded </p>
					<p>2. Payement is done only through M-Pesa </p>
					<p>3. Normal M-Pesa transactions fees will apply during payement </p>
					<p>3. Any attempts to access the servers illegally will be punished by the full force of the law </p>
				</div>
			<!-- footer -->
				<div class="modal-footer">
					<button class="btn btn-success btn-block" data-dismiss="modal">ok</button>
				</div>

		</div>
	</div>
</div>
<!-- end of Pop up window -->
</div>

<!-- submit to server -->
<?php 
if(isset($_POST['register'])){

	$username = mysqli_real_escape_string($conn,strip_tags($_POST['username']));
	$phone_number = mysqli_real_escape_string($conn,strip_tags($_POST['phone_number']));
	$email = mysqli_real_escape_string($conn,strip_tags($_POST['email']));
	$password = mysqli_real_escape_string($conn,strip_tags($_POST['password']));
	$TC = mysqli_real_escape_string($conn,strip_tags($_POST['TC']));
	$confirm_password = mysqli_real_escape_string($conn,strip_tags($_POST['confirm_password']));

	$check_sql = "SELECT * FROM tenant_registration WHERE  phone_number = '$phone_number' ";
	$result = mysqli_query($conn, $check_sql); 
	$count= mysqli_num_rows($result);

	$ins_sql = "INSERT INTO tenant_registration (username, phone_number, email, password, TCs )  VALUES('$username', '$phone_number', '$email', '$password', '$TC') ";
	
	if($password==$confirm_password){
		if ($count > 0){
			?>
			<script>
				window.alert("Phone Number already exists. Try with another number.");
			</script>
			<?php } else if(mysqli_query($conn, $ins_sql) ){ ?>				?>
					<script>window.location="T_dashboard.php"</script>
				<?php }
			} else { ?>

			<script>
				window.alert("Password does not match. Try again");
			</script>
			<?php }
		}
?>


<div class="col-md-12">
 <center>
	<footer>
        <div>
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
        </div>
    </footer>

</center>
</div>



</div>
</html>