<?php
	$Name = $_POST['Name'];
	$Email_id = $_POST['Email_id'];
	$Mobile_no = $_POST['Mobile_no'];
	$Pass = $_POST['Pass'];
	$DOB = $_POST['DOB'];

	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"mydoctorbot");
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
		$query = "INSERT INTO `registration`(`Name`, `Email_id`, `Mobile_no`, `PWD`, `DOB`) VALUES ('$Name','$Email_id','$Mobile_no','$Pass','$DOB')";
		$run = mysqli_query($conn, $query);
		if($run)
		header("Location: http://127.0.0.1:5000");
		else
		echo " failed";
	}
	else
	{
		echo "conn Failed";
	}
?>