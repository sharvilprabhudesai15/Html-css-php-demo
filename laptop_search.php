<!-- Laptop Search php -->
<head>
	<title> Device List </title>
</head>

<table>
	<tr><th> Name
		<th> SerialNumber
		<th> Price
		<th> Ram
		<th> Storage

</tr>



<?php

$conn=mysqli_connect("localhost","root","","user_info");


$search=$_POST["search"];
if($conn)
{
	
}
else 
{
	
	exit();
}

$q1="SELECT * FROM laptops WHERE names LIKE '$search%' ";
$r1=mysqli_query($conn,$q1);



$count=mysqli_num_rows($r1);


if($r1)
{   if($count>0)
    {
    echo "<br>number of records are ".$count ;
    while($info=mysqli_fetch_array($r1))
    {
        echo "<tr><td>".$name=$info['names'];
        echo "<td>".$serialnumber=$info['serialnumber'];
        echo "<td>".$price=$info['price'];
        echo "<td>".$ram=$info['ram'];
        echo "<td>".$storage=$info['storage'];
    }
    }
    else 
    {
        echo "<br> No records found";
    }
}
else{
    echo "<br> error in search operation";
}
mysqli_close($conn);


?>



</table>









