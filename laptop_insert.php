<!-- Laptop Insert php -->
<?php
    $names=$_POST["lname"];
    $serial=$_POST["serialno"];
    $ram=$_POST["ram"];
    $storage=$_POST["storage"];
    $price=$_POST["price"];


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

$q1="INSERT INTO laptops(names,serialnumber,price,ram,storage) VALUES ('$names','$serial','$price','$ram','$storage')";
$r1=mysqli_query($conn,$q1);


if($r1)
{
	echo "<br> Insertion successfully  ";
}
else 
{
	echo "<br> Insertion unsuccessful" ;
}
mysqli_close($conn);


?>