<?php

	$servername = "localhost";
	$dBUsername = "root";
	$dBPassword = "";
	$dBName = "userinformation";


	$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

	if (!$conn) {
		die("connection Failed: " . mysqli_connect_error());
	}