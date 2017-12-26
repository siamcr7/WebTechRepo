<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	session_start();
	//session_destroy();
	
	///now in file system -> first store all xml info from fileDB to session userList
	include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/FileDB/fileDBFunction.php");
	loadInfoInSessionUserList();
	
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
		
		//Admin
		//header("location:/WebTechRepo/authenticated/AdminPages/dashboardPage.php");
		
		//Customer
		header("location:".hrefThis("customer","dashboardPage.php"));
		
		//testFile
		//header("location:/WebTechRepo/authenticated/test/");
		
		//echo "Successful Login";
	}
	else echo "User Name Pass Do not match";
	
	//echo "YOLO";
?>
