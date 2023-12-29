<DOCTYPE HTML>
<html>
<body bgcolor="violet">
<center><h1>Library Management System</h1></center>
</body>
<?php
	$con=mysqli_connect("localhost","root","","athulya");
	if(!$con){
	echo "Connection Error";
	}
	$search = isset($_REQUEST["search"]) ? $_REQUEST["search"] : '';
	$query="SELECT acc_no,title,author,edition,publication FROM book WHERE title LIKE '%$search%'";
	$result=mysqli_query($con,$query);
?>
<?php

	if(mysqli_num_rows($result)>0)
	{
?>
<center>
<table border="2" cellspacing="5" cellpadding="5">    
	<tr>
		<td>Accession_Number</td>
		<td>Title</td>
		<td>Author</td>
		<td>Edition</td>
		<td>Publication</td>
	</tr>
<?php
	while($row=mysqli_fetch_assoc($result))
	{
?>
<tr>
	<td><?php echo $row["acc_no"];?></td>
	<td><?php echo $row["title"];?></td>
	<td><?php echo $row["author"];?></td>
	<td><?php echo $row["edition"];?></td>
	<td><?php echo $row["publication"];?></td>
</tr>
<?php
	}
	}
	else
	{
		echo "<center>No book found in the library by the name $search</center>";
	}
?>
</table>
</center>
</body>
</html>