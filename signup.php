<?php
$conn=mysqli_connect('localhost','root','','busres');
if(!$conn)
{
	echo 'Sorry The page is under development';
	exit();
}
else
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mob=$_POST['mob'];
	$address=$_POST['add'];
	$gender=$_POST['gender'];
	$password=$_POST['pwd'];
	
	$username=$_POST['username'];
	
	
	

	$submit=$_POST['su'];
	if($submit)
	{
		if($firstname!="" && $lastname!="" && $mob!="" && $address!="" && $gender!="" && $password!="" && $username!="")
		{
			
				
				$queri="SELECT * FROM `customer` WHERE `username`='$username';";
				$result=mysqli_query($conn,$queri);
				
				if(mysqli_num_rows($result)>0 || strlen($mob)!=10 || strlen($password)<6)
				{
					if(mysqli_num_rows($result)>0)
					{
						echo "<script type='text/javascript'>alert('Username Already Exists ... Please try another ')</script>";
						
					}
					if( strlen($mob)!=10 )
					{
						echo "<script type='text/javascript'>alert('Please enter a ten digit mobile number ')</script>";
						
					
					}
					if(strlen($password)<6)
					{
						echo "<script type='text/javascript'>alert('Please select a password having more than 6 digits')</script>";
					
					}
					
					
				}
				
		
				else{
					$query="INSERT INTO `customer`(`firstname`, `lastname`, `mobile`, `username`, `gender`, `address`, `password`) VALUES ('$firstname','$lastname','$mob','$username','$gender','$address','$password')";
			$res=mysqli_query($conn,$query);
			if($res)
			{
				
				echo "<script type='text/javascript'>alert('Signup Successful')</script>";
				echo "<a href='main.html'>Click here</a> to go to the login page";
				
				
			}
			else
			{
				echo 'Data Add Failed';
			}
				}
		}
		else
		{
			echo 'Please Fill All Fields';
			
		}
	}
	
}

?>