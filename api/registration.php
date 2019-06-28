<?php
include("config.php");
if (!$mysql_con)
{
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}
$user=mysqli_real_escape_string($mysql_con, $_POST['username']);
$pass=mysqli_real_escape_string($mysql_con, md5('kurwa'.$_POST['password']));
$APIkey=mysqli_real_escape_string($mysql_con, md5('l33tsecurity'.$_POST['username']));

$check_ifextists="SELECT * FROM users WHERE User_name= '$user'";

$check_result=$mysql_con->query($check_ifextists);
$row =$check_result->fetch_assoc();


if(!$check_result->num_rows)
{
	$create="INSERT INTO users (User_name, Hash, AdminPriviledges, APIkey) VALUES ('$user', '$pass', '0', '$APIkey') ";
	if($mysql_con->query($create))
	{ 

		header("Location: login_form.php");

	}
	else
	{
		echo "Error creating user";
	}
	exit;
}
else
{
	header("Location: create_user.php");
}
$mysql_con->close();
?>