<?php
session_start();
if(!isset($_SESSION['name']))
{
	header('location:http://localhost/form/form1.php');
}
?>
<!DOCTYPE html>
<html>
<body style="background-color:#00ff00">
<button style="float:right" onclick="myfunc()">change background color</button>
<a href="form3.php" >Home</a><br/>
<a href="form7.php" >Logout</a><br/>
<video controls>
<source src="Home Alone 2 (1992) [BRRIP 720p]  [Hindi-Eng] [Dual Audio] by []Omeg@king[].mkv" >
</video>
<script>
function myfunc()
{
  if(document.getElementsByTagName("button")[0].innerHTML=="change background color")
  {
	  document.getElementsByTagName("button")[0].innerHTML="click to get previous background color";
	  document.body.style.backgroundColor="#ff0000";
  }
  else
  {
document.getElementsByTagName("button")[0].innerHTML="change background color";
	  document.body.style.backgroundColor="#00ff00";
  }	  
}
</script>
</body>
</html>