<?php
session_start();
$a=$_POST['name'];
$b=$_POST['password'];
$count=0;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'form');
$q="select * from form";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	if($a==$row['name']&&$b==$row['password'])
	{
		$count++;
	}
}
if($count!=1)
{
	header('location:http://localhost/form/form1.php?success=1');
}
else
{
	$_SESSION['name']=$a;
	echo '<a href="form5.php" ><br/><br/><br/><br/><br/><h1><center>click me</center></h1></a>';
}
mysqli_close($con);
?>