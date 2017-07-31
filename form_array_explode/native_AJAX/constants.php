<?php

//Ideally we should encrypt such a file when using it commercially

	define("DBTYPE", "mysqli");
	define("HOSTNAME", "localhost");
	define("DBPORT", "3306");
	define("HOSTUSER", "root");
	define("HOSTPASS", "palette");
	define("DBNAME", "wavuh_practice");

$connection = mysqli_connect(HOSTNAME,HOSTUSER,HOSTPASS);
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection,DBNAME);
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

?>