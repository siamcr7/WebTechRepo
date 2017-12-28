<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	session_start();
	
	includeThis("database","allDBFunction.php");
	function loadUserListInSession()
	{
		unset($_SESSION["userList"]);
		$_SESSION["userList"] = getFullTable("user");
	}
	
	$savePass = "";
	function val()
	{
		global $savePass;
		if(empty($_SESSION["userList"]))return false;
		foreach($_SESSION["userList"] as $curUser)
		{
			if(empty($curUser["userName"]))return false;
			if($curUser["userName"] == $_REQUEST['userName'] )
			{
				$savePass = $curUser["password"];
				return true;
			}
		}
		return false;
	}
	
	loadUserListInSession();
	if(val())
	{
		$go = hrefThis("public","forgotPasswordPage.php");
		echo"<script>
                alert('Your Password is : {$savePass}');   
				document.location='{$go}';
            </script>";
	}
	else
	{
		$go = hrefThis("public","forgotPasswordPage.php");
		echo"<script>
                alert('User Name does not exist');
				document.location='{$go}';
            </script>";
	}
	
	//echo "YOLO";
?>
