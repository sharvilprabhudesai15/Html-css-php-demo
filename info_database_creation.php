<!--User_info Database Creation -->
<?php
$conn=mysqli_connect("localhost","root","");

if($conn)
{
	echo"successfully connected to the server";
}
else 
{
	echo"connection to server failed ";
	exit();
	
}


$q1="CREATE DATABASE user_info";
$r1=mysqli_query($conn,$q1);

if($r1)
{
	echo"<br>successfully created a database";
}
else 
{
	echo"<br>database creation failed  ";
	exit();
	
}
mysqli_close($conn);


?>