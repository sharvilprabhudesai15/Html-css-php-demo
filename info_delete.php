<!-- information Delete php -->
<?php
    $email=$_POST["email"];


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

$q1="DELETE FROM information where email='$email'";
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