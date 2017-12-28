<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	session_start();
	includeThis("database","allDBFunction.php");
	
	$splChar = array("@","#","$","%");
	function chkPass() /// validates correct password
	{
		$s = $_REQUEST['password'];
		global $splChar;
		if(strlen($s) < 8)return false;
		for($i=0;$i<strlen($s);$i++)
		{
			for($j=0;$j<4;$j++)
			{
				if($s[$i] == $splChar[$j])return true;
			}
		}
		return false;
	}
	

	
	function valAll() /// validates all
	{
		$ok = true;
		$msg = "";
		unset($_SESSION["msg"]);
		
		$_SESSION["msg"]["password"] = "";
		if(!chkPass())
		{
			$_SESSION["msg"]["password"] .= "Invalid Password. Password can only contain alpha numeric character and must have any of [@ # $ %] and have at least size of 8 characters.";
			$ok = false;
		}
		
		$_SESSION["msg"]["currentPassword"] = "";
		if( !empty( $_SESSION["curUser"]) && $_REQUEST['currentPassword'] != $_SESSION["curUser"]["password"])
		{
			$_SESSION["msg"]["currentPassword"] .= "Wrong Current Password!"; 
			$ok = false;
		}
		
		$_SESSION["msg"]["rePassword"] = "";
		if($_REQUEST['password'] != $_REQUEST['rePassword'])
		{
			$_SESSION["msg"]["rePassword"] .= "New password and retype new password did not match!";
			$ok = false;
		}
		return $ok;
	}

	
	if(valAll())
	{
		$user["password"] =  $_REQUEST['password'];
		
		$res = update($user,"user",$_SESSION["curUser"]["id"]);

		if($res == true)
		{
			$go = hrefThis("customer","AccountsPages/changePasswordPage.php");
			echo"<script>
                alert('Successfully Updated!');
				document.location = '{$go}';
            </script>";
			$_SESSION["curUser"] = getRowByID($_SESSION["curUser"]["id"],"user");
		}
		else
		{
			$go = hrefThis("customer","AccountsPages/changePasswordPage.php");
			echo"<script>
                alert('Error Occurred! Try Again!');
				document.location = '{$go}';
            </script>";
		}
	}
	else
	{
		header("location:".hrefThis("customer","AccountsPages/changePasswordPage.php?msg=ase"));
	}
	
	//echo "YOLO";
?>
