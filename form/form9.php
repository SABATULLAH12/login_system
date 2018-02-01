<?php
$a=$_POST['mobilenumber'];
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
	if($a==$row['mobilenumber'])
	{
		$count++;
	}
}
if($count!=1)
{
	echo 'invalid mobilenumber <br/> <a href="form8.php" >Back</a>';
}
else
{
	$p="UPDATE form set password='$b' where mobilenumber='$a'";
	$i=mysqli_query($con,$p);
	if($i==1)
	{
			header('location:http://localhost/form/form1.php?mo=1');
		
	}
	else{
		echo 'there is a problem so password cannott be changed <br/><a href="form1.php" >Home</a>';
	}
	
}

mysqli_close($con);
?>