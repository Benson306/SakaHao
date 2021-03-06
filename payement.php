<!DOCTYPE html>
<html>
<head>
	<title>Sakahao/Landlord</title>

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
<?php
require("connection.php");
?>

<div class="container" >
</head>

<center>
	<h4>Saka Hao</h4>
</center>
	

                    <!-- navigation bar -->
<nav class="navbar navbar-default">
	<div class="container-fluid">
			<!-- logo -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">SH</a>
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
<?php 
if(isset($_POST['submit'])){

	$phone_number = mysqli_real_escape_string($conn,strip_tags($_POST['phone_number']));
	$password = mysqli_real_escape_string($conn,strip_tags($_POST['password']));

	$sql = "SELECT * FROM landlord_registration WHERE phone_number = '$phone_number' ";
	$run = mysqli_query($conn, $sql); 
	$rows = mysqli_fetch_assoc($run);
	$pass = $rows['password'];
	if($password==$pass){

		$ins_sql = "INSERT INTO l_login_history (phone_number)  VALUES('$phone_number')";
		mysqli_query($conn, $ins_sql) ; ?>
		<hr>
		<div class="well well-sm">
		<ol>
			<li>To proceed to post your property, please make payements of 200 ksh. to the Mpesa paybill number below. These payement is meant to cater for
			advertisememt of your property.</li>
			<li>Note that there is no transaction fee to the payement.</li>
			<li>Also copy the Mpesa code e.g MQZ7FT234 from the message receive and copy it in the box below.</li>
			<li>Thank you for your support as you proceed</li>
		</ol>
			<center>
				<h3>
					<p>Mpesa</p>
					<p>Buy Goods and services</p>
					<p>Till No: 220220</p>
				</h3>
			<form action="post.php">
			<input type="text"  placeholder="Mpesa code" name="code" required="yes">
			<input type="submit" class="btn btn-primary" name="submit_p_code">
			</form>
			
			</center>
			</div>

	<?php } else { 
				echo "<center><h4 class='col-md-12 bg-danger'>Password does not match. Try again</h4></center>";
			}
		}
?>
