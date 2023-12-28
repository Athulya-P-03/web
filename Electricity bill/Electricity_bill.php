<html>
<body>
	<center>
	<h1>Registration Form</h1>
	<form action="#" method="POST">
		<table>
			<tr>
				<td>Consumer name</td>
				<td>:<input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Consumer number</td>
				<td>:<input type="text" name="cnum"></td>
				
			</tr>
			<tr>
				<td>Units consumed</td>
				<td>:<input type="number" name="units"></td>
			</tr>
			<tr>
			</tr>

			<tr>
				<td><input type="Submit"></td>
			</tr>
		</table>
	</form>
	</center>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	extract($_POST);
	function calculate_bill($units)
	{
		$unit_first = 4;
		$unit_second = 5;
		$unit_third = 6;
		$bill = 0;
	if($units<=100){
		$bill = $units * $unit_first;
	}
	elseif($units>100 && $units<=200){
		$temp = 100 * $unit_first;
		$rem_unit = $units-100;
		$bill = $temp + ($rem_unit*$unit_second);
	}
	else{
		$temp = (100*4)+(100*$unit_second)+(100*$unit_first);
		$rem_unit = $units-200;
		$bill = $temp+($rem_unit * $unit_third);
	}
	return number_format((float) $bill, 2, '.', '');
    }
	echo ".............................................................";
	echo "<h3>Kerala State Electricity Board (KSEB)</h3>";
	echo "<br>";
	echo "Consumer name : " .$name. "<br>";
	echo "Consumer number : "  .$cnum. "<br>";
        echo "Units consumed : "  .$units. "<br>";
	$result = calculate_bill($units); 
	echo "<h4>Total : Rs "  .$result. "</h4>";
	echo ".............................................................";
	}
	
?>
</body>
</html>
