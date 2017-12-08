<?php
	session_start();
	///now in file system -> first store all xml info from fileDB to session userList
	include "FileDB/fileDBFunction.php";
	loadInfoInSessionUserList(getcwd()."\\FileDB\\");

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
	
	function chkUserName() /// validates correct username
	{
		$s = $_REQUEST['uN'];
		if(strlen($s) < 2)return false;
		
		for($i=0;$i<strlen($s);$i++)
		{
			if($s[$i] >= 'A' && $s[$i] <= 'Z'){}
			else if($s[$i] >= '0' && $s[$i] <= '9'){}
			else if($s[$i] >= 'a' && $s[$i] <= 'z'){}
			else if($s[$i] == '.' || $s[$i] == '-' || $s[$i] == '_'){}
			else return false;
		}
		return true;
	}
	
	function chkDuplicateUserName()/// check for duplicate user name
	{
		if(empty($_SESSION["userList"]))return true;
		foreach($_SESSION["userList"] as $curUser)
		{
			if(empty($curUser["uN"]))return true;
			if($curUser["uN"] == $_REQUEST['uN'])return false;
		}
		return true;
	}
	
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
		if(!chkUserName())
		{
			echo "Check User Name!<br>" , $ok = false;
		}
		if(!chkPass())
		{
			echo "Check Password!<br>" , $ok = false;
		}
		
		if(!chkGen())
		{
			echo "Check Gender!<br>" , $ok = false;
		}
		if(!chkDate())
		{
			echo "Check DOB!<br>" , $ok = false;
		}
		/*
		if($_REQUEST['pass'] != $_REQUEST['conPass'])
		{
			echo "Password Did not match!<br>" , $ok = false;
		}
		*/
		if(!chkDuplicateUserName())
		{
			echo "User Name Already Taken!<br>"; $ok = false;
		}
		//if($ok)echo "Registraion Completed.";
		
		return $ok;
	}
	
	function seeSession()
	{
		if(empty($_SESSION["userList"]))return;
		foreach($_SESSION["userList"] as $key => $curUser)
		{
			if(empty($curUser["uN"]))return;
			if(empty($curUser["pass"]))return;
			echo "No: $key<br>";
			echo "User Name: ".$curUser["uN"]."<br>";
			echo "Pass: ".$curUser["pass"]."<br>";
			echo "<br>";
		}
	}
	

	
	if(valAll()) /// check validity
	{
		$user["name"] =  $_REQUEST['name'];
		$user["email"] = $_REQUEST['email'];
		$user["uN"] = $_REQUEST['uN'];
		$user["pass"] = $_REQUEST['pass'];
		$user["gender"] = $_REQUEST['gender'];
		$user["DOB"] = $_REQUEST['d']."/".$_REQUEST['m']."/".$_REQUEST['y'];
		date_default_timezone_set("Asia/Dhaka");$date = date('d/m/Y h:i:s a', time());
		$user["timeOfReg"] = $date;
		
		$idx = 0;
		if(!empty($_SESSION["userList"]))$idx = count($_SESSION["userList"]);
		$_SESSION["userList"][$idx] = $user; 
		echo "Registraion Completed.<br>";
		
		/// write the new session_userList in fileDB
		writeSessionUserListInFileDB(getcwd()."\\FileDB\\");
	}
	
	echo "<br> All User: <br>";
	seeSession();
	
	//echo "YOLO";
?>