<?php
	//connects to the db
	include "connection.php";

	$query = "SELECT * FROM customers";
	$result = $conn->query($query);
	if (!$result) die($conn->error);

	$rows = $result->num_rows;

	//displays the info
	for ($j = 0 ; $j < $rows ; ++$j)
	{
	  $result->data_seek($j);
	  $row = $result->fetch_array(MYSQLI_ASSOC);
	  
	    echo $row['firstName'] . '<br>';
	    echo $row['lastName'] . '<br>';
		echo $row['address'] . '<br>';
	    echo $row['city'] . '<br>';
		echo $row['state'] . '<br>';
		echo $row['zip'] . '<br>';
		echo $row['email'] . '<br>';
		echo $row['phone'] . '<br><br>';
	}

	$result->close();
	$conn->close();
?>

