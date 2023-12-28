<?php
	$cricketers=array();
	$cricketers=
	array("a"=>"Virat Kholi",
	"b"=>"Rohith Sharma",
	"c"=>"Ms Dhoni",
	"d"=>"Suresh Raina",
	"e"=>"Ravindra Jadeja",
	"f"=>"Yuvraj Singh",
	"g"=>"Sachin Thendulkar");
	
?>
<html>
<body>
	<table border="2" width="500" height="500" align="center">
		<tr bgcolor="cyan">
			<th>Name of Cricketers</th>
		</tr>
		<tr>
			<td align="center"><?php echo $cricketers["a"];?></td>
		</tr>
		<tr>
			<td align="center"><?php echo $cricketers["b"];?></td>
		</tr>
		<tr>
			<td align="center"><?php echo $cricketers["c"];?></td>
		</tr>
		<tr>
			<td align="center"><?php echo $cricketers["d"]?></td>
		</tr>
		<tr>
			<td align="center"><?php echo $cricketers["e"]?></td>
		</tr>
		<tr>
			<td align="center"><?php echo $cricketers["f"]?></td>
		</tr>
		<tr>
			<td align="center"><?php echo $cricketers["g"]?></td>
		</tr>
	</table>
</body>
</html>