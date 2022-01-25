<?php //To set database membership registration
	$servername = "localhost"; //Server for xampp is localhost
	$username = "root"; //Default xampp is root
	$password = ""; //Use the pass
	$dbname = "273688_final";

	//To create the connection
	$con = mysqli_connect("localhost","root","","273688_final");

    //To check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
     }
?>