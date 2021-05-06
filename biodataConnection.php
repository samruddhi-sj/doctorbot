<?php
 $conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"biodata");
	if($db)
	{
		echo " DB connected";
	}
	else
	{
		echo "DB Failed";
	}
	if($conn)
	{
		echo "  Connection sucessfull";
	}
	else
	{
		echo "  connection failed";
	}
?>