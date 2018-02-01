<?php
session_start();
$a=$_POST['name'];
$b=$_POST['password'];
$c=$_POST['mobilenumber'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'form');
$q="insert into form (name,password,mobilenumber) values('$a','$b','$c')";
$i=mysqli_query($con,$q);
if($i)
{
	header('location:http://localhost/form/form1.php?monu=1');
}
mysqli_close($con);
?>