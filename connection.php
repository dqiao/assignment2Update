<?php

	$hn = 'www.it354.com';
	$db = 'it354_students';
	$un = 'it354_students';
	$pw = 'steinway';

	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);

?>