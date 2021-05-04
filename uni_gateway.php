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
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- End of bootsrap -->
<?php
require("connection.php");
?>

<div class="container" >
</head>

<!-- implementation of login -->

<center>
	<h4>Search for a house</h4>
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
						<li><a href="T_dashboard.php">Log-out</a></li>
					</ul>
			</div>
	</div>
</nav>
<!-- end of navigation bar -->
<div class="col-md-9">
	<div class="col-md-offset-3 well well-sm">
		<form method="post" action="tenant_search.php">
		<center><h4 class='bg bg-danger'>Search for house around which university:</h4></center>
		<div class="form-group">
						<label>University:</label>
						<select class="form-control" name="uni" required="yes">
						<option></option>
						<option>multimedia university of kenya</option>
						<option>moi university</option>
						<option>KU</option>
						</select>
			</div>
		<input type ="submit" class="btn btn-success" name="ok">
	</form>
	</div>
	</div>
</div>
