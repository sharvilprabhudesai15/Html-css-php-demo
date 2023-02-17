<!-- Information Update php -->
<?php
    $phone=$_POST["pnumber"];
    $names=$_POST["fname"];
    $gender=$_POST["gender"];
    $profession=$_POST["profession"];
    $email=$_POST["email"];


$conn=mysqli_connect("localhost","root","","user_info");


if($conn)
{
	echo"successfully connected to the database";
}
else 
{
	echo"connection to database failed ";
	exit();
}

$q1=" UPDATE information SET names='$names', phone='$phone', gender='$gender' WHERE email='$email'";
$r1=mysqli_query($conn,$q1);


if($r1)
{
	echo "<br> Updation successfully  ";
}
else 
{
	echo "<br> Updation unsuccessful" ;
}
mysqli_close($conn);








    // echo "<br> serialnumber:".$number;
    // echo "<br> Name :".$name;
    // echo "<br> price :".$price;
    // echo "<br> ref model:".$refmodel;
    // echo "<br> Ratings:".$ratings;


?>