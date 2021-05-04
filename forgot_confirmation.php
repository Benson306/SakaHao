
	<!DOCTYPE html>
<html>
<head>
	<title>Sakahao</title>

<!-- bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
.
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

<body>
<center>
	<h3 class="title">Confirmation</h3>
	
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
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>	

							<!-- Drop down menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contacts<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li>
										<a href="https://web.facebook.com/Saka_Hao-307040076559137/" data-toggle="tooltip" title="Like" class="btn btn-muted btn-icon btn-round">
	                    					<i class="fa fa-facebook-square"></i>
				                		</a>
				                	</li>
									<li>
										<a href="https://twitter.com/hao_saka" data-toggle="tooltip" title="Follow us" class="btn btn-primary btn-icon btn-round">
						                    <i class="fa fa-twitter"></i>
						                </a>
									</li>
									<li>
										<a href="https://www.instagram.com/saka_hao/" data-toggle="tooltip" title="Follow us" class="btn btn-success btn-icon btn-round">
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

<div class="col-md-9">
<div class="col-md-offset-4 well well-sm">
	<form method="post" action="set_new_pass.php">
	<div class="form-group">
	<label>Input confirmation code</label>
		<input type="text" class="form-control" name="code" required="yes">	
	</div>
	
	<input type="submit" class="btn btn-primary" name="submit_code">
	</form>
</div>
</div>

<?php


if(isset($_POST['submit_forgot'])){

	$phone_number = mysqli_real_escape_string($conn,strip_tags($_POST['phone_number']));
	$email = mysqli_real_escape_string($conn,strip_tags($_POST['email']));

	//generate confirmation code

	$confirm_code = mt_rand(1000, 9999);


	$sql = "INSERT INTO forgot_pass (phone_number, email, code)  VALUES('$phone_number', '$email', '$confirm_code')";
	mysqli_query($conn, $sql);


	require 'mail/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	
	$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';

	$mail->Username='haosaka306@gmail.com';
	$mail->Password='@benson_306';

	$mail->setFrom('haosaka306@gmail.com','ben@SakaHao');
	$mail->addAddress('$email');
	$mail->AddReplyTo('haosaka306@gmail.com');
	$mail->isHTML(true);
	$mail->Subject='PHP Mailer';
	$mail->Body='<h4>Confirmaton code is:</h4><br><h5>$confirm_code</h5>';
	$sent= $mail->send();

	if($sent){
		echo "message sent!";
	}else{
		echo "Mesaage not sent";
	}
}
?>


