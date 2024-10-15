<?php
$dbname="visitorsrecordsdb";
$dbhost ="127.0.0.1";
$dbuser ="root";
$dbpass ="";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass) ;
$sel= mysqli_select_db($conn,$dbname);
if ($conn){
	//echo 'successfull';
	}

	?>