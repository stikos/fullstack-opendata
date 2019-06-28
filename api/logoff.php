<?
  session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<? 
	session_unset();

header("Location:login_form.php");
?>
</html>

