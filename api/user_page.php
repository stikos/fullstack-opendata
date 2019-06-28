<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>

<body style="background-image: url(air-pollution.jpg); background-size: cover; background-repeat: no-repeat;">
<h1 style="text-align: center; font-family: courier"> Hello dear developer! Get your API key and start coding! </h1> 
<div id="getAPIkey" style="margin: 0 auto; background-color: grey; text-align: center; border: 5px solid black; border-radius: 5px; width: 400px; ">
<button type="button" id="getkey" style="font-size: 24px; border: 2px solid red; border-radius: 5px" onclick="getkey()">Request API key</button>
<p id="revealAPI" style="color:black; font-style: ; font-size: 20px"></p>
</div>


<script>

function getkey()
{
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() 
	{
		var fin_key = xmlhttp.responseText;
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("revealAPI").innerHTML = fin_key;
		}
	}
	xmlhttp.open("GET", "getAPI.php", true); /*μπορει να γινει και χωρις τη _SESSION superglobal,
											με χρηση της jQuery.get() και "user":"name" σαν server data*/
	xmlhttp.send();
}

</script>
</body>

</html>