<?php
	session_start();
	//session_destroy();
	
	///now in file system -> first store all xml info from fileDB to session userList
	include("FileDB/fileDBFunction.php");
	loadInfoInSessionUserList(getcwd()."\\FileDB\\");
	
	function valUserPass()
	{
		if(empty($_SESSION["userList"]))return false;
		foreach($_SESSION["userList"] as $curUser)
		{
			if(empty($curUser["uN"]))return false;
			if(empty($curUser["pass"]))return false;
			if($curUser["uN"] == $_REQUEST['uN'] && $curUser["pass"] == $_REQUEST['pass'])
			{
				$_SESSION["curUser"] = $curUser;
				return true;
			}
		}
		return false;
	}
	
	if(valUserPass())
	{
		$_SESSION["logInHoise"] = true;
		header("location:authenticated/dashboardPage.php");
		//echo "Successful Login";
	}
	else echo "User Name Pass Do not match";
	
	//echo "YOLO";
?>
