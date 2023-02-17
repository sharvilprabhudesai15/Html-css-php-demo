<!-- Message Display php -->
<head>
	<title> Device List </title>
</head>

<table>
	<tr><th> Names
		<th> Email

</tr>
<?php

	$conn=mysqli_connect("localhost","root","","user_info");


	if($conn)
	{
	
	}
	else 
	{
		exit();
	}

	$q1="SELECT * FROM messages";
	$r1=mysqli_query($conn,$q1);

$count=mysqli_num_rows($r1);
echo "<br>number of records are ".$count ;

while($info=mysqli_fetch_array($r1))
{
    echo "<tr><td>".$name=$info['names'];
    echo "<td>".$email=$info['email'];

}
mysqli_close($conn);


?>









</table>



