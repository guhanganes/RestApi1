<?php
function create()
{
	//echo $_POST['name'];
	//echo $_POST['email'];
	//echo $_POST['pass'];
	//$json=json_decode(file_get_contents("php://input"));
	//echo $json->name;
	include("db.php");
	$query="insert into user(name,email,pass) values('".$_POST['name']."','".$_POST['email']."','".$_POST['pass']."')";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		//echo "Successfully Created";
		echo json_encode(array("message"=>"Success"));
	
	}
	else
	{
		echo json_encode(array("message"=>"Failed"));
	}
	
}

?>