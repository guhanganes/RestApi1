<?php
function view()
{
	include("db.php");
	
	if($_GET['id'])
	{
		$query="select * from user where id='".$_GET['id']."'";
	}
	else
	{
		$query="select * from user"; 
	}
	
	$sql=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($sql))
	{
	  $resp[]=array("id"=>$row['id'],
	                "name"=>$row['name'],
					"email"=>$row['email'],
					"pass"=>$row['pass']
					);
	}
	//print_r($resp);
	echo json_encode($resp);
}
?>