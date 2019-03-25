<?php
$user=$_POST['uname'];
$pass=$_POST['pwd'];

$conn=mysqli_connect('localhost','root','','busres');
if(!$conn)
{
	die('Sorry Under Maintenance :(');
}
else
{
	$query="SELECT `username`,`password` FROM `customer` WHERE `username`='$user' and `password`='$pass'";
	$data=mysqli_query($conn,$query);
	if(mysqli_num_rows($data)==1)
	{
		$redirect="reserve1.php";
		header('Location: '.$redirect);
	}
	else echo 'Sorry Record Not Found :(';
}

?>