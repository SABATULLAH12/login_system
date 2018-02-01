<?php
if(!empty($_GET['status'])){
	echo '<div style="color:red;font:bold;"><center><big><big><big>You have been logged out!</big></big></big></div></center>';
}
else if(isset($_GET['success'])&&($_GET['success']==1)){
	echo '<div style="color:red;font:bold;"><center><big><big><big>Invalid user name or password</big></big></big></div></center>';
}
else if(isset($_GET['monu'])&&($_GET['monu']==1)){
	echo '<div style="color:red;font:bold;"><center><big><big><big>Account created successfully!!</big></big></big></div></center>';
}
else if(isset($_GET['mo'])&&($_GET['mo']==1)){
	echo '<div style="color:red;font:bold;"><center><big><big><big>Password changed!!</big></big></big></div></center>';
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
table{
height:100px;
width:650px;
color:green;
background-color:#ff0000;
}
</style>
<script src="form2.js">
</script>
</head>
<body style="background-color:#00ff00">
<button style="float:right" onclick="myfunc()">change background color</button><br/><br/>
<div align=center>
<br/><br/><br/><br/>
<table>
<form action="form3.php" method="post" onsubmit="return validate()" >
<tr><td align=center valign="middle" style="padding-top:80px;"><input type="text" placeholder="          name" name="name" style="width:200px;height:30px"/><br/></td></tr>
<tr><td align=center valign="middle" ><input type="password" placeholder="          password  " name="password" style="width:200px;height:30px"/><br/></td></tr>
<tr><td align=center valign="middle" ><input type="submit" value="login" style="width:70px;height:40px"/><br/></td></tr>
<tr><td align=center valign="middle" ><a href="form4.php" ><big><big>create account</big></big></a><br/></td></tr>
<tr><td align=center valign="middle" ><a href="form8.php" ><big><big>Forgot password</big></big></a></td></tr>
</form>
<table>
</div>
<script>
function myfunc()
{
  if(document.getElementsByTagName("button")[0].innerHTML=="change background color")
  {
	  document.getElementsByTagName("button")[0].innerHTML="click to get previous background color";
	  document.body.style.backgroundColor="#0000ff";
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