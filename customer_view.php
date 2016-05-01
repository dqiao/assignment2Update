<!DOCTYPE html>
<html>
<head>
	<title>View Customers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row" style="margin-top:80px">
		<div class="col-sm-12">
		<h2>View Customer Details</h2>
		<!-- create a bootstrap table -->
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Address</th>
					<th>City</th>
					<th>State</th>
					<th>Zip</th>
					<th>Email</th>
					<th>Phone</th>
					</tr>

<?php // query.php

	// require_once 'login.php';

	// login.php
	$hn = 'www.it354.com';
	$db = 'it354_students';
	$un = 'it354_students';
	$pw = 'steinway';

	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);

	$query = "SELECT * FROM customers";
	$result = $conn->query($query);
	if (!$result) die($conn->error);

	$rows = $result->num_rows;

	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$result-> data_seek($j);
		$row = $result->fetch_array(MYSQLI_ASSOC);

		echo '<tr><td>' . $row['firstName'] . '</td>';
		echo '<td>' . $row['lastName'] . '</td>';
		echo '<td>' . $row['address'] . '</td>';
		echo '<td>' . $row['city'] . '</td>';
		echo '<td>' . $row['state'] . '</td>';
		echo '<td>' . $row['zip'] . '</td>';
		echo '<td>' . $row['email'] . '</td>';
		echo '<td>' . $row['phone'] . '</td></tr>';
	 }

	$result->close();
	$conn->close();
?>


				</table><!-- end table -->
			</div><!-- end table-responsive -->
		</div> <!-- End col -->
	</div>	<!-- end row -->
</div> <!-- End of Container -->

</body>
</html>
