<?php
	include "connection.php";

	//query - variables must match those in database
	$query = "INSERT INTO customers(firstName, lastName, address, city, state, zip, email, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

	//String = ssssssss    -->to represent every input variable
	if($statement = $conn->prepare($query))
	{
		$statement->bind_param("ssssssss",
			$_POST['firstName'],
			$_POST['lastName'],
			$_POST['address'],
			$_POST['city'],
			$_POST['state'],
			$_POST['zip'],
			$_POST['email'],
			$_POST['phone'] 
			);

		if($statement->execute())
		{
			echo "Successful register!";
			$statement->close();
		}

		else
		{
			echo "Failure!";
		}
	}
	else
	{
		die("Unable to save");
	}

	$conn->close();
?>