<?php
//testing 

	$link = mysqli_connect("www.it354.com", "it354_students", "steinway", "it354_students");
 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	// Escape user inputs for security
	$first_name = mysqli_real_escape_string($link, $_POST['fname']);
	$last_name = mysqli_real_escape_string($link, $_POST['lName']);
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

