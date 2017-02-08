<?php
	$host = "localhost";
	$usern = "root";
	$passw = "toor";
	$database = "pemograman3";
	
	$con = mysqli_connect($host,$usern,$passw,$database);

	// Check connection
	if (mysqli_connect_errno()){
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	} else {
  		echo "Sukses";
  	}
?>