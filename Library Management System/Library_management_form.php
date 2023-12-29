<?php
	$con=mysqli_connect("localhost","root","","athulya");
	if(!$con)
	{
	echo"connection error";
	}
	$acc_no=$title=$author=$editon=$publication="";
	$success=false;
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	$acc_no=$_POST["acc_no"];
	$title=$_POST["title"];
	$author=$_POST["author"];
	$edition=$_POST["edition"];
	$publication=$_POST["publication"];
     	$query="INSERT INTO book(acc_no,title,author,edition,publication)VALUES('$acc_no','$title','$author','$edition','$publication')";
	if(mysqli_query($con,$query)){
	$success=true;
	}else{
	echo"Error:".$query."<br>".mysqli_error($con);}
}
?>
<!DOCTYPE>
<html>
<body bgcolor="cyan">
<a href="search.php"><button style="float:right;">search</button></a>
<center><h1>Library Management System</h1></center>
<form action="#" method="POST">
<table border="2" align="center" cellpadding="5" cellspacing="5">
	<tr>
		<td>Accession Number : </td>
		<td><input type="text" name="acc_no" size="45" style="width:400px;height:25px;"></td>
	</tr>
	<tr>
		<td>Enter Title : </td>
		<td><input type="text" name="title" size="45" style="width:400px;height:25px;"></td>

	</tr>
	<tr>
		<td>Enter Author : </td>
		<td><input type="text" name="author" size="45" style="width:400px;height:25px;"></td>
	</tr>
	<tr>
		<td>Enter Edition : </td>
		<td><input type="text" name="edition" size="45" style="width:400px;height:25px;"></td>
	</tr>
	<tr>
		<td>Enter Publication : </td>
		<td><input type="text" name="publication" size="45" style="width:400px;height:25px;"></td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input class="button "type="submit" value="Submit">
			<input class="button "type="reset" value="Reset">
		</td>
	</tr>
</table>
</form>
<center>
<?php
if($success){ 
	echo "<h1>Book data inserted successfully...!</h1>";
} 
?>
</center>
</boby>
</html>
