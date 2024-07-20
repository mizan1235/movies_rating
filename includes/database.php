<?php
	//define parameters
	$host = "localhost";
	
	$login = "root";
	$password = '';
	$database = "movies_database";
	$tblMovies = "movies";
	$tblUsers = "users";
	$tblReviews = "reviews";
  
	//Connect to the mysql server
	$conn =  mysqli_connect($host, $login, $password, $database);

	//Handle connection errors 
	if (mysqli_connect_errno() != 0) {
	    $errno = mysqli_connect_errno();
	    $errmsg = mysqli_connect_error();
	    die("Connect Failed with: ($errno) $errmsg<br/>\n");
	}
?>

