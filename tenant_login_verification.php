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

<!-- implementation of login -->

<?php 
if(isset($_POST['submit'])){

	$phone_number = mysqli_real_escape_string($conn,strip_tags($_POST['phone_number']));
	$password = mysqli_real_escape_string($conn,strip_tags($_POST['password']));

	$sql = "SELECT * FROM tenant_registration WHERE phone_number = '$phone_number' ";
	$run = mysqli_query($conn, $sql); 
	$rows = mysqli_fetch_assoc($run);
	$pass = $rows['password'];
	$count= mysqli_num_rows($run);
	if($count > 0){
		if($password==$pass){

		$ins_sql = "INSERT INTO t_login_history (phone_number)  VALUES('$phone_number')";
		mysqli_query($conn, $ins_sql) ; ?>
		<script>window.location="uni_gateway.php"</script>

	<?php } else { 
				echo "<center><h4 class='col-md-12 bg-danger'>Password does not match. Try again</h4></center>";
				echo "<center><a href='T_dashboard.php' class='btn btn-primary'>Back</a></center>";
			}
		}else{
			echo "<center><h4 class='col-md-12 bg-danger'>Account does not exist. Please register</h4></center>";
			echo "<center><a href='T_registration.php' class='btn btn-danger'>Register</a></center>";
			echo "<br>";
			echo "<center><a href='T_dashboard.php' class='btn btn-primary'>Back</a></center>";
		}
	
	 }
?>
