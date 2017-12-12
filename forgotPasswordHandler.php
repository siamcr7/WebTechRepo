<?php
	session_start();

	function val()
	{
		if(empty($_SESSION["userList"]))return false;
		foreach($_SESSION["userList"] as $curUser)
		{
			if(empty($curUser["uN"]))return false;
			if($curUser["uN"] == $_REQUEST['uN'])
			{
				echo "Your Password is : ".$curUser['pass'];
				return true;
			}
		}
		return false;
	}
	
	if(!val())
	{
		echo "User Name does not exist";
	}
	
	//echo "YOLO";
?>
