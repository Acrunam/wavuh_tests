<?php

$names = array("Patrick","Raymond","George","Hosea","Samuel","Alan","June","Edwin","Yvonne","John","Paul",
		"Ruto","Uhuru","Raila","Kalonzo","Sonko","Joho","Wetangula","Mudavadi","Matiang'i");

echo "<table width='250' border='1' >";

//Let's create a variable $count that will represent a count
//to guide us in iterating through the array

$count=0;

foreach($names as $name){
	
//open new tr if $count is 0, thus negating the foreach from forcing through more than 1 tr as it defaults to print 20 trs

	if($count==0){  

	echo "<tr>";
	}

    echo "<td>".$name."</td>";

//close the tr if $count has reached 3; because 3 in a numeric array means the 4th element in the array
//thus the 4th column is reached
	
	if($count==3){  

	echo "</tr>";

//when -1 is incremented to 0, it will trigger the loop just after for each so that the rest of the 
//list is iterated through and printed out

	$count=-1;  	
 
	}

$count++;

}

echo "<table>";

?>