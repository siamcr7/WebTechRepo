<?php
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
			else if($s[$i] == " "){}
			else return false;
		}
		if((str_word_count($s)) < 2)return false;
		return true;
	}
	
	function chkEmail() /// validates correct email
	{
		$s = $_REQUEST['email'];
		if(strlen($s) == 0)return false;
		$dotArr = explode(".",$s);
		if(count($dotArr) != 2)return false;
		$atArr = explode("@",$dotArr[0]);
		if(count($atArr) != 2)return false;
		return true;
	}
	
	function chkDuplicateEmail()/// check for duplicate email
	{
		if(empty($_SESSION["userList"]))return true;
		foreach($_SESSION["userList"] as $curUser)
		{
			if(empty($curUser["email"]))return true;
			if($curUser["email"] == $_REQUEST['email'])return false;
		}
		return true;
	}
	
	
	function chkUserName() /// validates correct username
	{
		$s = $_REQUEST['userName'];
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
			if(empty($curUser["userName"]))return true;
			if($curUser["userName"] == $_REQUEST['userName'])return false;
		}
		return true;
	}
	
	
	function chkPass() /// validates correct password
	{
		if(empty($_REQUEST['password']))return false;
		$s = $_REQUEST['password'];
		$splChar = array('@','#','$','%');
		
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
	
	function allNumber($s) /// checks if all number
	{
		for($i=0;$i<strlen($s);$i++)
		{
			if($s[$i] >= '0' && $s[$i] <= '9'){}
			else return false;
		}
		return true;
	}
	
	function chkPhoneNo()
	{
		$s = $_REQUEST['phoneNo'];
		if(strlen($s) != 11)return false;
		if(!allNumber($s))return false;
		return true;
	}
	
	function chkLocation()
	{
		$s = $_REQUEST['location'];
		if($s == "nothing")return false;
		return true;
	}
	
	function chkAddress()
	{
		$s = $_REQUEST['address'];
		if(empty($s))return false;
		return true;
	}
?>