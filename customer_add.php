<!DOCTYPE html>
<html>
<head>
	<title>Adding Customer To DB</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<!--Bootstrap Navbar-->	
	<nav class="navbar navbar-default">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="#">Assignment 2</a>
		</div>

		<!-- Nav Bar Links-->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<!--Need to change to customer_view.html but find a way to link the customer_view.php to customer_view.html-->
				<li><a href="customer_view.php">View</a></li>
				<li class="active"><a href="#">Add<span class="sr-only">(current)</span></a></li>
			</ul>
		</div> <!--End of 2 links-->
	</nav> <!--End of nav bar-->

<?php
//testing 
//newTesting

	$link = mysqli_connect("www.it354.com", "it354_students", "steinway", "it354_students");
 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	// Escape user inputs for security
	$first_name = mysqli_real_escape_string($link, $_POST['firstName']);
	$last_name = mysqli_real_escape_string($link, $_POST['lastName']);
	$address = mysqli_real_escape_string($link, $_POST['address']);
	$city = mysqli_real_escape_string($link, $_POST['city']);
	$state = mysqli_real_escape_string($link, $_POST['state']);
	$zip = mysqli_real_escape_string($link, $_POST['zip']);
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$phone = mysqli_real_escape_string($link, $_POST['phone']);
	
	// attempt insert query execution
	$sql = "INSERT INTO customers (firstName,lastName,address,city,state,zip,email,phone) VALUES ('$first_name', '$last_name', '$address','$city','$state','$zip','$email','$phone')";
	
	if(mysqli_query($link, $sql)){
		echo "Records added successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
 
 
	// close connection
	mysqli_close($link);
	
?>

</body>
</html>