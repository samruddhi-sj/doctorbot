<?php
	$GRNO = "11920021";
	$Name = "Pooja";
	$DOB = "03-09-2001";
	$Address = "Baramati";
	$Mobileno = "9657495165";
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
		echo " Sucessful connection";
		$query = "INSERT INTO `personalinfo`(`GRNO`, `Name`, `DOB`, `Address`, `Mobileno`) VALUES ('$GRNO','$Name','$DOB','$Address','$Mobileno')";
		$run = mysqli_query($conn, $query);
		if($run)
		echo " record inserted";
		else
		echo " failed";
	}
	else
	{
		echo "conn Failed";
	}
	$sql = "SELECT * FROM personalinfo";
	$result = mysqli_query($conn, $sql);

	 if($result->num_rows>0)
	{ 
	 while($row=$result->fetch_assoc())
   
   { echo nl2br("\n");
	 echo $row ["GRNO"];    echo "\t\t";
     echo $row ["Name"];    echo "\t\t"; 
     echo $row ["DOB"];     echo "\t\t"; 
     echo $row ["Address"]; echo "\t\t"; 
     echo $row ["Mobileno"];
   }
	}
	else
	{ echo "Table is empty";}

?>