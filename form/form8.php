<!DOCTYPE html>
<html>
<head>
<script src="form10.js" >
</script>
</head>
<body style="background-color:#00ff00">
<button style="float:right" onclick="myfunc()">change background color</button>
<form action="form9.php" method="post" onsubmit="return validate()" >
<input type="text" placeholder="mobilenumber" name="mobilenumber" /><br/>
<input type="password" placeholder="password" name="password" /><br/>
<input type="submit" /> 
</form>
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