<?php
	include("config.php");
   session_start();
   
   $user_check = $_SESSION['session_username'];
   
   $ses_sql = mysqli_query($mysql_con,"SELECT User_name FROM users WHERE User_name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['User_name'];
   
   if(!isset($_SESSION['session_username'])){
      header("Location:login_form.php");
   }

   else{echo "Welcome";}
?>