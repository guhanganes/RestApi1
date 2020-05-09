<?php
//header("Access-Control-Allow-Origin: *");
//header('Access-Control-Allow-Methods: 
        // GET,PUT,POST,DELETE,PATCH,OPTIONS');

if($_SERVER['REQUEST_METHOD']=="POST")
{
	echo $_SERVER['REQUEST_METHOD'];
	include("create.php");
	create();
}
else if($_SERVER['REQUEST_METHOD']=="GET")
{
	echo $_SERVER['REQUEST_METHOD'];
	include("view.php");
	view();
}
else if($_SERVER['REQUEST_METHOD']=="PUT")
{
	echo $_SERVER['REQUEST_METHOD'];
	include("update.php");
	update();
}
else if($_SERVER['REQUEST_METHOD']=="DELETE")
{
	echo $_SERVER['REQUEST_METHOD'];
	include("delete.php");
	remove();
}


?>