<?php
   
	$db_server["host"] = "localhost"; //database server
	$db_server["username"] = "root"; // DB username
	$db_server["password"] = ""; // DB password
	$db_server["database"] = "dropdatbase";// database name

	$mysql_con = mysqli_connect($db_server["host"], $db_server["username"], $db_server["password"], $db_server["database"]);
?>