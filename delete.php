<?php
function remove()
{
	
	$json=json_decode(file_get_contents("php://input"));
	include("db.php");
	$query="delete from user where id='".$json->id."' ";
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