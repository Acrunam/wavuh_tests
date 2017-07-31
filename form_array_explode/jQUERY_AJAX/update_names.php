<?php

include "constants.php";

$name_count = count($_POST["new_name"]);

$iterator=0;

while($iterator<=$name_count){
	
	$edited_name = array_pop($_POST["new_name"]);
	
	$name_ident = array_pop($_POST['id_of_name']);
	
$strQuery_3 = " UPDATE tbl_random_names SET actual_name = '$edited_name' WHERE name_id = '$name_ident' ";

$result_3 = mysqli_query($connection, $strQuery_3) or Exit("Query execution failed");

$iterator++;

} 

?>