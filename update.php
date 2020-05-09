<?php
function update()
{
	
	$json=json_decode(file_get_contents("php://input"));
	include("db.php");
	$query="update user set name='".$json->name."',email='".$json->email."',pass='".$json->pass."' where id='".$json->id."' ";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		echo json_encode(array("message"=>"Success"));
	
	}
	else
	{
		echo json_encode(array("message"=>"Failed"));
	}
	
}

?>