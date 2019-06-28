<?php
session_start();

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include("config.php");
if (!$mysql_con)
{
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}
$user = $_SESSION['session_username'];
$APIquery = "SELECT APIkey FROM users WHERE User_name = '$user'";
$APIkey_res = $mysql_con->query($APIquery);
$key = $APIkey_res->fetch_assoc();
$retKey = $key['APIkey'];
echo($retKey);
?>