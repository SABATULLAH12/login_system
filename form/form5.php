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
<button style="float:right" onclick="myfunc()">change background color</button><br/><br/>
<div align=center><br/><br/><br/>
<h1>Hello, <?php echo $_SESSION['name'];?></h1>
<a href="form11.php" ><b><h2>Play Video</h2></b></a>
<a href="form7.php" ><h1>Logout</h1></a>
</div>
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