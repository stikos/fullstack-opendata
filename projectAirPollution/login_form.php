<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	background-image: url(air-pollution.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	<!---webkit-filter: blur(3px);-->
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.alert{
	position: relative;
	top: 80px;
	left:0;
	text-align: center;
	z-index: 2;

}

.alert div{
	align:center;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header{
	position: absolute;
	top: calc(50% - 45px);
	left: calc(50% - 380px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #ff1a1a !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 5px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

    <script src="js/prefixfree.min.js"></script>

<script>
	$( document ).ready(function()
	{
		var ex=document.referrer;
		alert(ex);
		
		
		if(ex=='http://www.pollution-api.gr/create_user.php')
		{
			document.getElementById("warning").write('User succesfully created!');


		}
		else if(ex=='http://www.pollution-api.gr/login_form.php?')
		{
			document.getElementById("warning").write('Wrong username or password!');
		}
	});
</script>
</head>

<body>

  <div class="body"> 
		</div>
		<div class="grad">	
		</div>
		<div class="alert"> 
		<p style="color:red; font-size: 50px;">

		</p>
		</div>
		<p id="warning" style="font-size: 22pt; z-index: 5; " ></p>
		<div class="header">
			<div>Project<span><b>AirPollution</b></span></div>
		</div>
		<br>
		<div class="login">
		<form name="login_form" method="post" action="login.php">
				Username: <input type="text" name="username"><br>
				Password: <input type="password" name="password"><br>
				<input type="submit" value="Login" width="100px">
			</form>
			<p>
			<form name="new user" action="create_user.php">
				<input type="submit" value="New user? Click here!" width="200px"></input>
				</form>
				</p>
		</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>