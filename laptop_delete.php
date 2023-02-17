<!-- Laptop Delete php-->
<?php
    $serial=$_POST["serialno"];


$conn=mysqli_connect("localhost","root","","user_info");


if($conn)
{
	echo"successfully connected to the database";
}
else 
{
	echo"coonnection to database failed ";
	exit();
}

$q1="DELETE FROM laptops where serialnumber='$serial'";
$r1=mysqli_query($conn,$q1);


if($r1)
{
	echo "<br> Deletion successfully  ";
}
else 
{
	echo "<br> Deletion unsuccessful" ;
}
mysqli_close($conn);

?>