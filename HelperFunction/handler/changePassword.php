<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	session_start();
	
	$splChar = array("@","#","$","%");
	function chkPass() /// validates correct pass
	{
		$s = $_REQUEST['pass'];
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
		if(!chkPass())
		{
			echo "Check New Password Format<br>" , $ok = false;
		}
		if( !empty( $_SESSION["curUser"]) && $_REQUEST['curPass'] != $_SESSION["curUser"]["pass"])
		{
			echo "Check Current Password!<br>" , $ok = false;
		}
		if($_REQUEST['pass'] != $_REQUEST['rePass'])
		{
			echo "New password and retype new password did not match!<br>" , $ok = false;
		}
		return $ok;
	}

	function doTheUpdate()
	{
		if(empty($_SESSION["userList"]))return false;
		foreach($_SESSION["userList"] as $key => $curUser)
		{
			if($curUser["uN"] == $_SESSION["curUser"]["uN"])
			{
				$curUser["pass"] = $_REQUEST["pass"];
				
				$_SESSION["userList"][$key] = $curUser;
				$_SESSION["curUser"] = $curUser;
				return true;
			}
		}
		return false;
	}
	
	if(valAll())
	{
		if(doTheUpdate())
		{
			echo "Successfully password Update";
			/// write the new session_userList in fileDB
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/FileDB/fileDBFunction.php");
			writeSessionUserListInFileDB();
		}
		else echo "Unsuccessful password Update";
	}
	
	//echo "YOLO";
?>
