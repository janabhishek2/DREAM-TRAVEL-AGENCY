<?php
$from=$_POST['from'];
$to=$_POST['to'];
$date=date('y-m-d',strtotime($_POST['dat']));
$submit=$_POST['sub'];

if($submit==='Submit')
{
	$conn=mysqli_connect("localhost","root","",'busres');
	if($conn)
	{
		
		$query="SELECT * FROM `bus` WHERE `bus_from`='$from' and `bus_to`= '$to';";
		$data = mysqli_query ($conn,$query);
		
		$result= mysqli_fetch_assoc($data);
		$x=mysqli_num_rows($data);
		echo "$x";
			while($result=mysqli_fetch_assoc($data))
			{
				echo $result['bus_from'].' '.$result['bus_to'].' '.$result['fare'].'<br>';
			}
		
		
		
	}

}

?>