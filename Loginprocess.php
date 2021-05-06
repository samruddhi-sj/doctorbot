<?php
	$Email_id = $_POST['Email_id'];
	$Pass = $_POST['Pass'];

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
		$query = "select * from registration where Email_id='$Email_id' and PWD='$Pass'";
		$run = mysqli_query($conn, $query);
		$result = mysqli_fetch_assoc($run);
		$num = mysqli_num_rows($run);
		echo $num;
		if($num>0)
		{
			header("Location: http://127.0.0.1:5000/");
		}
		else
		{
			header("Location: form.html");
		}
	}
	else
	{
		echo "conn Failed";
	}
?>