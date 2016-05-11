<?php
session_start();
$name=$_POST['name'];
$phone=$_POST['phone'];
$message=$_POST['message'];
if($name!='' && $phone!='' && $message!='')
{
	$connect = mysqli_connect("localhost","root","","aquatico");
	mysqli_query($connect,"INSERT INTO contact VALUES ('".$name."','".$phone."','".$message."');");
	if(mysqli_affected_rows($connect) > 0)
	{

		header('Location: http://localhost/aquatico/index.html');
	}
	else
	{
		echo 'Sorry ! Database Connectivity Error. Try Again Later !!';
	}
}
else
{
	echo 'ERROR[105]: One or more fields missing !! ';
}
