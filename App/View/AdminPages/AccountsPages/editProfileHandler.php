<?php
	session_start();
	
	function chkName() /// validates correct name
	{
		$s = $_REQUEST['name'];
		if(strlen($s) == 0)return false;
		if($s[0] >= 'A' && $s[0] <= 'Z'){}
		else if($s[0] >= 'a' && $s[0] <= 'z'){}
		else return false;
		for($i=1;$i<strlen($s);$i++)
		{
			if($s[$i] >= 'A' && $s[$i] <= 'Z'){}
			else if($s[$i] >= 'a' && $s[$i] <= 'z'){}
			else if($s[$i] == '.' || $s[$i] == '-' || $s[$i] == ' '){}
			else return false;
		}
		if((str_word_count($s)) < 2)return false;
		return true;
	}
	
	function chkEmail() /// validates correct email
	{
		$s = $_REQUEST['email'];
		if(strlen($s) == 0)return false;
		$atAse = false;
		$dotAse = false;
		for($i=0;$i<strlen($s);$i++)
		{
			if($s[$i] == ' ')return false;
			if($s[$i] == '@')
			{
				if($atAse || $dotAse)return false;
				$atAse = true;
				if($s[$i+1] == '.')return false;
			}
			if($s[$i] == '.' && $atAse)$dotAse = true;
		}
		if($dotAse && $atAse)return true;
		return false;
	}
	
	function chkGen() /// validates correct gender
	{
		if(!empty($_REQUEST['gender']) && $_REQUEST['gender'] == "Male")return true; //echo "MALE";
		else if(!empty($_REQUEST['gender']) && $_REQUEST['gender'] == "Female")return true; //echo "FEMALE";
		else if(!empty($_REQUEST['gender']) && $_REQUEST['gender'] == "Other")return true; //echo "OTHER";
		else return false; //echo "Error";
	}
	
	function allNumber($s) /// checks if all number
	{
		for($i=0;$i<strlen($s);$i++)
		{
			if($s[$i] >= '0' && $s[$i] <= '9'){}
			else return false;
		}
		return true;
	}
	
	function chkDate() /// /// validates correct date
	{
		if(empty($_REQUEST['d']))return false; //echo "Error";
		else if(empty($_REQUEST['m']))return false; //echo "Error";
		else if(empty($_REQUEST['y']))return false; //echo "Error";
		else if(!allNumber($_REQUEST['d']))return false; //echo "Error";
		else if(!allNumber($_REQUEST['m']))return false; //echo "Error";
		else if(!allNumber($_REQUEST['y']))return false; //echo "Error";
		else
		{	
			if($_REQUEST['d'] >= 1 && $_REQUEST['d'] <= 31 &&
			$_REQUEST['m'] >= 1 && $_REQUEST['m'] <= 12 &&
			$_REQUEST['y'] >= 1900 && $_REQUEST['y'] <= 2016
			)
			{
				return true;
				//echo $_REQUEST['d']." / ";
				//echo $_REQUEST['m']." / ";
				//echo $_REQUEST['y'];
			}
			else return false; //echo "Error";
		}
	}
	
	function valAll() /// validates all
	{
		$ok = true;
		if(!chkName())
		{
			echo "Check Name!<br>" , $ok = false;
		}
		if(!chkEmail())
		{
			echo "Check Email!<br>" , $ok = false;
		}
		if(!chkGen())
		{
			echo "Check Gender!<br>" , $ok = false;
		}
		if(!chkDate())
		{
			echo "Check DOB!<br>" , $ok = false;
		}
		return $ok;
	}

	function doTheUpdate()
	{
		if(empty($_SESSION["userList"]))return false;
		foreach($_SESSION["userList"] as $key => $curUser)
		{
			if($curUser["uN"] == $_REQUEST["uN"])
			{
				$curUser["name"] = $_REQUEST["name"];
				$curUser["email"] = $_REQUEST["email"];
				$curUser["gender"] = $_REQUEST["gender"];
				$curUser["DOB"] = $_REQUEST['d']."/".$_REQUEST['m']."/".$_REQUEST['y'];
				
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
			echo "Successful Update";
			/// write the new session_userList in fileDB
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/FileDB/fileDBFunction.php");
			writeSessionUserListInFileDB();
		}
		else echo "Unsuccessful Update";
	}
	
	//echo "YOLO";
?>
