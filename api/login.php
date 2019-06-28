<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>

<?php
//poutses
include("config.php");
if (isset($_SESSION['session_username']))
{
	echo "<br><a href='logoff.php'>Log off</a>";
}
else
{

	if (!$mysql_con) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	$user=mysqli_real_escape_string($mysql_con, $_POST['username']);
	$pass=mysqli_real_escape_string($mysql_con, md5('kurwa'.$_POST['password']));


	$login_check="SELECT AdminPriviledges FROM users WHERE User_name= '$user' AND Hash= '$pass'";

	$login_result=$mysql_con->query($login_check);
	$row =$login_result->fetch_assoc();


	if($login_result->num_rows ==0){
		header('Location: login_form.php');
	}
	else if($login_result->num_rows ==1){ //succesful login
		$_SESSION['session_username'] = $_POST['username'];
		if($row["AdminPriviledges"]==1){
			header('Location: admin_page.php');
		}
		else{
			header('Location: user_page.php?'.SID);
		}
	}

}

?>
</html>
	