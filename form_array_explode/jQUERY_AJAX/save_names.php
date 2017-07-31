<?php

require "constants.php";

$all_names = $_POST["names"];
	
$strQuery_2 = "INSERT into tbl_random_names (actual_name) values('$all_names')";

$result_2 = mysqli_query($connection, $strQuery_2) or Exit("Query execution failed");

?>