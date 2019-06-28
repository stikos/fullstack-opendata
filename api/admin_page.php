<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<style>
.dropbtn {
	border: 5px;
	border-radius: 5px;
    background-color: #ff9966;
    color: white;
    padding: 16px;
    font-size: 16px;
    margin:16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #ff0000;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ff9966;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>

<body style="background-image: url(air-pollution.jpg); background-size: cover; background-repeat: no-repeat;">
<h1 style="text-align: center; font-family: courier; font-style: bold"> Administrator Interface </h1> 
<div align="center">
	<div class="dropdown">
	<button onclick="myFunction1()" class="dropbtn">UPDATE</button>
	  <div id="myDropdown1" class="dropdown-content">
	    <a href="csv_handler.php" target="iframe_a" >Create station</a>
	    <a href="#about" target="iframe_a">Remove station</a>
	    <a href="#contact" target="iframe_a">Add record</a>
	  </div>
	</div>

	<div class="dropdown">
	<button onclick="myFunction2()" class="dropbtn">STATISTICS</button>
	  <div id="myDropdown2" class="dropdown-content">
	    <a href="#home" target="iframe_a">Requests per API key</a>
	    <a href="#about" target="iframe_a">Requests summary</a>
	    <a href="#contact" target="iframe_a">Top 10 most demanding API keys</a>
	    <a href="#poutses" target="iframe_a">Number of API keys</a>
	  </div>
	</div>
</div>
<div class="action" align="center"> 
    <iframe src="" name="iframe_a" width="1200px" height="700px" style="margin-top: 30px; border: none;"></iframe>
   </div>

  <div class="logoff"  style="position: absolute; right: 10px; bottom: 790px;" >
  <input type="submit" value="LOG OFF" style="font-size: 16px; padding: 16px; color: white; border-radius: 5px; border: none; background-color: #ff9966; " onclick="window.location='login_form.php';" />  
  
  	</div>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */

function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>





</body>
</html>