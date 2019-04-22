<?php
	$config = parse_ini_file('../noaccess/config.ini');
	$connection = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);

	if (mysqli_connect_errno()) {
 	 echo "Failed to connect to Database: " . mysqli_connect_error();
  	}
?>