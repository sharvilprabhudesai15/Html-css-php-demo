<!-- Laptop Table Creation -->
<?php
$conn=mysqli_connect("localhost","root","","user_info");


if($conn)
{
	echo"successfully connected to the Database";
}
else 
{
	echo"coonnection to Database failed ";
	exit();
}


$q1="CREATE TABLE laptops(names VARCHAR(20) NOT NULL,
						serialnumber VARCHAR(20) NOT NULL,
						price VARCHAR(15) NOT NULL,
						ram VARCHAR(10) NOT NULL,
						storage VARCHAR(10) NOT NULL,
						PRIMARY KEY(serialnumber)
						)";
						
						
$r1=mysqli_query($conn,$q1);


if($r1)
{
	echo "<br> table created successfully  ";
}
else 
{
	echo "<br> table creation unsuccessful" ;
}
mysqli_close($conn);


?>