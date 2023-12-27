<?php
	$names=array("Swathy","Priya","Amala","Anagha","Sreya");
	echo "<b><br>Normal Array : <br></b>";
	print_r($names);
	echo "<b><br><br>Ascending Sort : <br></b>";
	asort($names);
	print_r($names);
	echo "<b><br><br>Descending Sort : <br></b>";
	arsort($names);
	print_r($names);
	
?>