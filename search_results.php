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
	<h4>Search Results</h4>
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
						<li><a href="T_dashboard.php">Log-out</a></li>
					</ul>
			</div>
	</div>
</nav>
<!-- end of navigation bar -->

<hr>


<?php
if(isset($_POST['submit_search'])) {
	$house_type = mysqli_real_escape_string($conn,strip_tags($_POST['house']));
	$rent_max = mysqli_real_escape_string($conn,strip_tags($_POST['rent_max']));
	$location = mysqli_real_escape_string($conn,strip_tags($_POST['location']));

	$sql = "SELECT * FROM landlord_post WHERE house_type = '$house_type' AND location = '$location' AND rent_amount <= '$rent_max' ";
	$run = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($run);

	if($count > 0 ){
	$result=1;
	 while($rows= mysqli_fetch_assoc($run)){

	 echo "
	 <center><a href='uni_gateway.php' class='btn btn-danger'>Back</a><center>
	 <br>
	 <div class='panel panel-default well well-sm'>
	 <center class='bg-primary'><h4><label>Result:</label>$result</h4></center>
	 	<div class='row'>
		 	<div class='col-md-3'>
		 		<center><label>Apartment Name: </label>$rows[apartment_name] </center>
	 			<center><label>House Type: </label>$rows[house_type] </center>
	 			<center><label>Location: </label>$rows[location] </center>
		 	</div>
		 	<div class='col-md-3'>
		 		<center><label>Phone Number 1: </label>$rows[phone_number]</center>
	 			<center><label>Phone Number 2: </label>$rows[phone_number2]</center>
	 			<center><label>Vacant units: </label>$rows[vacancy]</center>
	 			<center><label>Rent: </label>$rows[rent_amount]</center>
		 	</div>
		 	<div class='col-md-3'>
			 	<center><label>Rent Deposit: </label>$rows[rent_deposit]</center>
			 	<center><label>Water Deposit: </label>$rows[water_deposit]</center>
			 	<center><label>Power Deposit: </label>$rows[elec_deposit]</center>
			 	<center><label>Garbage Fee: </label>$rows[garbage]</center>
		 	</div>
		 	<div class='col-md-3'>
			 	<center><label>Security Fee: </label>$rows[security]</center>
			 	<center><label>Water Availability: </label>$rows[water_avai]</center>
			 	<center><label>Distance: </label>$rows[distance]</center>
			 	<center><label>Date of posting: </label>$rows[date]</center>
		 	</div>

	 	</div>
	 	<div class='row'>
	 		<center><label>Detailed Directions: </label>$rows[directions]</center>
	 	</div>
	 	<div class='row'>
	 		<div class='col-md-3'>
	 			<center><label>Image 1: </label><img src=' images/db/$rows[image1_name] ' class='img-responsive' width='200' height = '200' ></center>
	 		</div>
	 		<div class='col-md-3'>
	 			<center><label>Image 2: </label><img src=' images/db/$rows[image2_name] ' class='img-responsive' width='200' height = '200' ></center>
	 		</div>
	 		<div class='col-md-3'>
	 			<center><label>Image 3: </label><img src=' images/db/$rows[image3_name] ' class='img-responsive' width='200' height = '200' ></center>
	 		</div>
	 		<div class='col-md-3'>
	 			<center><label>Image 4: </label><img src=' images/db/$rows[image4_name] ' class='img-responsive' width='200' height = '200' ></center>
	 		</div>
	 	</div>

	 </div>
	 	
	 	<hr>

	 ";
	 		
 	$result++;
	 }
}else{
	echo "<center><h4>No results</h4></center>";
	echo "<center><a href='uni_gateway.php' class='btn btn-danger'>Back</a></center>";
}


}
?>