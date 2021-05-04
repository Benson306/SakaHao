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
<?php
require("connection.php");
?>
<div class="container" >

</head>
<center>
	<h4>Landlord Login and registration Panel </h4>
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
										<a href="https://twitter.com/Saka_Hao" data-toggle="tooltip" title="Follow us" class="btn btn-primary btn-icon btn-round">
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
		<form action="landlord_login_verification.php" method="post">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Phone Number (Format 07XXXXXXXX)" name="phone_number" required="yes">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Password" name="password" required="yes">
		</div>
		<input type="submit" name="submit" class="btn btn-success"  >
	</form>
	<br>
			<a href="forgot_password.php"><button class="btn btn-danger">Forgot Password</button></a>
			<br>
	<br>
		<a href="L_registration.php"><button class="btn btn-muted">New user?Click here!!</button></a>
	</div>
	

</div>
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

</div>



</div>
</html>