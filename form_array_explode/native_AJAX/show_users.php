<?php

require "constants.php";

$strQuery = "SELECT * from tbl_random_names";

$result = mysqli_query($connection, $strQuery) or Exit("Query execution failed");

if($result->num_rows>0){
	
echo "<h3>View, Add & Edit Names</h3><form id='update_names_form' onsubmit='update_names();'>
<table width='250' border='1' class='pure-table'>";

$count=0;

while($row = $result->fetch_assoc()){
	
	if($count==0){  

	echo "<tr>";
	}

    echo 
	"<td>
	<input value='".$row["actual_name"]."' type='text' name='new_name[]'>
	<input hidden name='id_of_name[]' value='".$row["name_id"]."'>
	</td>";
	
	if($count==3){  

	echo "</tr>";

	$count=-1;  	
	}

$count++;
}

echo "<button class='button-xsmall pure-button' name='update_all' type='submit'>Update</button></td>
</table></form>";

}

else {
		
    print 
	"<div class='alert alert-danger fade in alert-dismissable'>
	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	<strong>Oops!</strong> No names added yet.
	</div>";
	}
	
?>