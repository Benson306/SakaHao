<?php
ob_start();
session_start();
require("connection.php");
?>
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
</head>

<!-- implementation of login -->

<center>
	<h4>Post Property</h4>
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
						<li><a href="l_dashboard.php">Log-out</a></li>
					</ul>
			</div>
	</div>
</nav>
<!-- end of navigation bar -->
		
		<!-- pop up -->
<div class="modal fade" id="popupwindow">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<!-- body -->
				<div class="modal-body">
					<div>
						<h4>You have succesfully posted the property</h4>
					</div>
				</div>
			<!-- footer -->
				<div class="modal-footer">
					<button class="btn btn-success btn-block" data-dismiss="modal">Ok</button>
				</div>

		</div>
	</div>
</div>
<!-- end of pop up -->

<hr>

<div class="row">
	<div class="col-md-offset-11">
		<a href="l_uni_gateway.php" class="btn btn-danger">Back</a>
	</div>
</div>
<br>

<?php 
if(isset($_POST['ok_uni'])) {
	$uni = mysqli_real_escape_string($conn,strip_tags($_POST['uni']));
	if( $uni == 'multimedia university of kenya' ){
	 ?>
	 	<div class="col-md-9">
	<div class="col-md-offset-3 well well-sm">
		<form method="post" enctype="multipart/form-data">

		<div class="form-group">
			<input type="text" class="form-control" placeholder="Appartment name - optional" name="apart">
		</div>

		<div class="form-group">
			<label>House type:</label>
			<select class="form-control" name="house" required="yes">
			<option></option>
			<option>Single room</option>
			<option>Double room</option>
			<option>Bedsitter</option>
			<option>1-bedroom</option>
			<option>2-bedroom</option>
			<option>3-bedroom</option>
			<option>4-bedroom</option>
			</select>
		</div>
		<p>
		<div class="form-group">
			<label>Location:</label>
			<select class="form-control" name="location" required="yes">
			<option></option>
			<option>Masai Lodge</option>
			<option>Mayor Road</option>
			<option>Tumaini</option>
			<option>Gataka Road</option>
			<option>Mandazi Road</option>
			<option>Kobil</option>
			<option>Ole_Pussey Road</option>
			<option>Trojan</option>
			<option>Police station</option>
			<option>Nyotu</option>
			<option>Kenol</option>
			<option>Tuskys</option>
			</select>
		</div>
		<?php 
			$phone_number = $_SESSION['phone_number'];
		?>
		<div class="form-group">
		<label>Phone Number:</label>
			<input type="text" class="form-control" Value="<?php echo $phone_number; ?>" name="phone_number" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Phone Number 2 - optional" name="phone_number2">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Rent Amount (kshs.) e.g 6500" name="rent_amount" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Rent Deposit (kshs.)" name="rent_deposit" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Water Deposit (kshs.)" name="water_deposit" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Electricity Deposit (kshs.)" name="elec_deposit">
		</div>
		<label><u>Other Monthly charges(Kshs.)</u></label>
		<p>Garbage:</p>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="e.g 200 " name="garbage">
		</div>
		<p>Security:</p>
		<div class="form-group">
			<input type="text" class="form-control"  placeholder="e.g 300 " name="security">
		</div>
		<div class="form-group">
			<label>Water Availability:</label>
			<select class="form-control" name="water_avai" required="yes">
			<option></option>
			<option>Constant</option>
			<option>Partially available</option>
			</select>
		</div>
		<p>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Approx distance from the main road(Metres)" name="distance">
		</div>
		<div class="form-group">
		<textarea name="directions" class="form-control" cols="40" rows="4" placeholder="Give detailed directions"></textarea>
		</div>
		
		<div class="form-group">
		<label>photo:</label>
		<input type="file" class="form-control" name="image"  >
		</div>
		<div class="form-group">
			<label>Photo 2:</label>
			<input type="file" class="form-control" name="image2"  >
		</div>
		
		<div class="form-group">
			<label>Photo 3:</label>
			<input type="file" class="form-control" name="image3"  >
		</div>
		<div class="form-group">
			<label>Photo 4:</label>
			<input type="file" class="form-control" name="image4"  >
		</div>
			<input type="submit" class="btn btn-danger" name="post">
		</form>
	</div>

<?php } else if($uni == 'moi university'){ ?>
		
		<div class="col-md-9">
	<div class="col-md-offset-3 well well-sm">
		<form method="post" enctype="multipart/form-data">

		<div class="form-group">
			<input type="text" class="form-control" placeholder="Appartment name - optional" name="apart">
		</div>

		<div class="form-group">
			<label>House type:</label>
			<select class="form-control" name="house" required="yes">
			<option></option>
			<option>Single room</option>
			<option>Double room</option>
			<option>Bedsitter</option>
			<option>1-bedroom</option>
			<option>2-bedroom</option>
			<option>3-bedroom</option>
			<option>4-bedroom</option>
			</select>
		</div>
		<p>
		<div class="form-group">
			<label>Location:</label>
			<select class="form-control" name="location" required="yes">
			<option></option>
			<option>Kesses</option>
			<option>Stage</option>
			<option>Mabatini</option>
			<option>Cheptiret</option>
			</select>
		</div>
		<?php 
			$phone_number = $_SESSION['phone_number'];
		?>
		<div class="form-group">
		<label>Phone Number:</label>
			<input type="text" class="form-control" Value="<?php echo $phone_number; ?>" name="phone_number" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Phone Number 2 - optional" name="phone_number2">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Rent Amount (kshs.) e.g 6500" name="rent_amount" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Rent Deposit (kshs.)" name="rent_deposit" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Water Deposit (kshs.)" name="water_deposit" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Electricity Deposit (kshs.)" name="elec_deposit">
		</div>
		<label><u>Other Monthly charges(Kshs.)</u></label>
		<p>Garbage:</p>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="e.g 200 " name="garbage">
		</div>
		<p>Security:</p>
		<div class="form-group">
			<input type="text" class="form-control"  placeholder="e.g 300 " name="security">
		</div>
		<div class="form-group">
			<label>Water Availability:</label>
			<select class="form-control" name="water_avai" required="yes">
			<option></option>
			<option>Constant</option>
			<option>Partially available</option>
			</select>
		</div>
		<p>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Approx distance from the main road(Metres)" name="distance">
		</div>
		<div class="form-group">
		<textarea name="directions" class="form-control" cols="40" rows="4" placeholder="Give detailed directions"></textarea>
		</div>
		
		<div class="form-group">
		<label>photo:</label>
		<input type="file" class="form-control" name="image"  >
		</div>
		<div class="form-group">
			<label>Photo 2:</label>
			<input type="file" class="form-control" name="image2"  >
		</div>
		
		<div class="form-group">
			<label>Photo 3:</label>
			<input type="file" class="form-control" name="image3"  >
		</div>
		<div class="form-group">
			<label>Photo 4:</label>
			<input type="file" class="form-control" name="image4"  >
		</div>
			<input type="submit" class="btn btn-danger" name="post">
		</form>
	</div>

<?php } else if($uni == 'KU'){ ?>
		<div class="col-md-9">
	<div class="col-md-offset-3 well well-sm">
		<form method="post" enctype="multipart/form-data">

		<div class="form-group">
			<input type="text" class="form-control" placeholder="Appartment name - optional" name="apart">
		</div>

		<div class="form-group">
			<label>House type:</label>
			<select class="form-control" name="house" required="yes">
			<option></option>
			<option>Single room</option>
			<option>Double room</option>
			<option>Bedsitter</option>
			<option>1-bedroom</option>
			<option>2-bedroom</option>
			<option>3-bedroom</option>
			<option>4-bedroom</option>
			</select>
		</div>
		<p>
		<div class="form-group">
			<label>Location:</label>
			<select class="form-control" name="location" required="yes">
			<option></option>
			<option>Kahawa Wendani</option>
			<option>Kahawa Sukari</option>
			<option>Ruiru</option>
			<option>Ruiru Ndani</option>
			<option>Membley</option>
			</select>
			</select>
		</div>
		<?php 
			$phone_number = $_SESSION['phone_number'];
		?>
		<div class="form-group">
		<label>Phone Number:</label>
			<input type="text" class="form-control" Value="<?php echo $phone_number; ?>" name="phone_number" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Phone Number 2 - optional" name="phone_number2">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Rent Amount (kshs.) e.g 6500" name="rent_amount" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Rent Deposit (kshs.)" name="rent_deposit" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Water Deposit (kshs.)" name="water_deposit" required="yes">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Electricity Deposit (kshs.)" name="elec_deposit">
		</div>
		<label><u>Other Monthly charges(Kshs.)</u></label>
		<p>Garbage:</p>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="e.g 200 " name="garbage">
		</div>
		<p>Security:</p>
		<div class="form-group">
			<input type="text" class="form-control"  placeholder="e.g 300 " name="security">
		</div>
		<div class="form-group">
			<label>Water Availability:</label>
			<select class="form-control" name="water_avai" required="yes">
			<option></option>
			<option>Constant</option>
			<option>Partially available</option>
			</select>
		</div>
		<p>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Approx distance from the main road(Metres)" name="distance">
		</div>
		<div class="form-group">
		<textarea name="directions" class="form-control" cols="40" rows="4" placeholder="Give detailed directions"></textarea>
		</div>
		
		<div class="form-group">
		<label>photo:</label>
		<input type="file" class="form-control" name="image"  >
		</div>
		<div class="form-group">
			<label>Photo 2:</label>
			<input type="file" class="form-control" name="image2"  >
		</div>
		
		<div class="form-group">
			<label>Photo 3:</label>
			<input type="file" class="form-control" name="image3"  >
		</div>
		<div class="form-group">
			<label>Photo 4:</label>
			<input type="file" class="form-control" name="image4"  >
		</div>
			<input type="submit" class="btn btn-danger" name="post">
		</form>
	</div>



<?php }

}

?>



<?php 
if(isset($_POST['post'])){

	$apart = mysqli_real_escape_string($conn, strip_tags($_POST['apart']));
	$house_type = mysqli_real_escape_string($conn, strip_tags($_POST['house']));
	$location = mysqli_real_escape_string($conn, strip_tags($_POST['location']));
	$phone_number = mysqli_real_escape_string($conn, strip_tags($_POST['phone_number']));
	$phone_number2 = mysqli_real_escape_string($conn, strip_tags($_POST['phone_number2']));
	$vacancy = mysqli_real_escape_string($conn, strip_tags($_POST['vacancy']));
	$rent_amount = mysqli_real_escape_string($conn, strip_tags($_POST['rent_amount']));
	$rent_deposit = mysqli_real_escape_string($conn, strip_tags($_POST['rent_deposit']));
	$water_deposit = mysqli_real_escape_string($conn, strip_tags($_POST['water_deposit']));
	$elec_deposit = mysqli_real_escape_string($conn, strip_tags($_POST['elec_deposit']));
	$garbage = mysqli_real_escape_string($conn, strip_tags($_POST['garbage']));
	$security = mysqli_real_escape_string($conn, strip_tags($_POST['security']));
	$water_avai = mysqli_real_escape_string($conn, strip_tags($_POST['water_avai']));
	$distance = mysqli_real_escape_string($conn, strip_tags($_POST['distance']));
	$directions = mysqli_real_escape_string($conn, strip_tags($_POST['directions']));

	/* images sent to db */
		$imageName = mysqli_real_escape_string($conn,strip_tags($_FILES['image']["name"]) );
		$imageData = mysqli_real_escape_string($conn,file_get_contents($_FILES["image"]["tmp_name"])); //image itself
			//PATH TO STORE IMAGE
		$target = "images/db/".basename($_FILES['image']["name"]);

		$image2Name = mysqli_real_escape_string($conn,strip_tags($_FILES['image2']["name"]) );
		$image2Data = mysqli_real_escape_string($conn,file_get_contents($_FILES["image2"]["tmp_name"])); //image itself

		$target2 = "images/db/".basename($_FILES['image2']["name"]);

		$image3Name = mysqli_real_escape_string($conn,strip_tags($_FILES['image3']["name"]) );
		$image3Data = mysqli_real_escape_string($conn,file_get_contents($_FILES["image3"]["tmp_name"])); //image itself

		$target3 = "images/db/".basename($_FILES['image3']["name"]);

		$image4Name = mysqli_real_escape_string($conn,strip_tags($_FILES['image4']["name"]) );
		$image4Data = mysqli_real_escape_string($conn,file_get_contents($_FILES["image4"]["tmp_name"])); //image itself

		$target4 = "images/db/".basename($_FILES['image4']["name"]);


	$image_sql = "INSERT INTO landlord_post (apartment_name, house_type, location, phone_number, phone_number2, vacancy, rent_amount, rent_deposit, water_deposit, elec_deposit, garbage, security, water_avai, distance, directions, image1_name, image1, image2_name, image2, image3_name, image3, image4_name, image4)  VALUES('$apart', '$house_type', '$location', '$phone_number', '$phone_number2', '$vacancy', '$rent_amount', '$rent_deposit', '$water_deposit', '$elec_deposit', '$garbage', '$security', '$water_avai', '$distance', '$directions', '$imageName', '$imageData', '$image2Name', '$image2Data', '$image3Name', '$image3Data', '$image4Name', '$image4Data') "; 
	// to be able to submit these files incase of failure go to "C:\xampp\mysql\bin" and find file named "my" ..open and modify max_allowed_packet to 20M
	mysqli_query($conn,move_uploaded_file($_FILES["image"]["tmp_name"], $target)) ;
	mysqli_query($conn,move_uploaded_file($_FILES["image2"]["tmp_name"], $target2)) ;
	mysqli_query($conn,move_uploaded_file($_FILES["image3"]["tmp_name"], $target3)) ;
	mysqli_query($conn,move_uploaded_file($_FILES["image4"]["tmp_name"], $target4)) ;

	if(mysqli_query($conn, $image_sql)) { ?>

				<script>
				window.alert("You have posted succesfully");
				window.location="L_dashboard.php";
				</script>
		<?php }
		

}

// end of page contenst

?>


