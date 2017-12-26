<?php
	session_start();
	///now in file system -> first store all xml info from fileDB to session userList
	include ($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/FileDB/fileDBFunction.php");
	loadInfoInSessionUserList();

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
	}
	
	function valAll() /// validates all
	{
		$ok = true;
		$msg = "";
		if(!chkName())
		{
			$msg .= "Invalid Name. name can contain alpha numeric characters and must start with alphabets and have at least 2 words. \n";
			$ok = false;
		}
		if(!chkEmail())
		{
			$msg .= "Invalid Email. Ex: abc@abc.com\n";
			$ok = false;
		}	
		if(!chkDuplicateEmail())
		{
			$msg .= "Email Already Taken.\n";
			$ok = false;
		}
		if(!chkUserName())
		{
			$msg .= "Invalid User Name. UserName can only contain alpha numeric character and the following characters: [ _ , - , . ] \n";
			$ok = false;
		}
		if(!chkDuplicateUserName())
		{
			$msg .= "User Name Already Taken.\n";
			$ok = false;
		}
		
		if(!chkPass())
		{
			$msg .= "Invalid Password. Password can only contain alpha numeric character and must have any of [@,#,$,%] and have at least size of 8 characters \n";
			$ok = false;
		}
		
		if(!chkPhoneNo())
		{
			$msg .= "Invalid Phone Number of Bangladesh. \n";
			$ok = false;
		}


		//if($ok)echo "Registraion Completed.";
		if($msg == "")$msg = "Registration Successful!\n";
		return $msg;
	}
	
	function seeSession()
	{
		if(empty($_SESSION["userList"]))return;
		foreach($_SESSION["userList"] as $key => $curUser)
		{
			if(empty($curUser["userName"]))return;
			if(empty($curUser["password"]))return;
			echo "No: $key<br>";
			echo "User Name: ".$curUser["userName"]."<br>";
			echo "Pass: ".$curUser["password"]."<br>";
			echo "<br>";
		}
	}
	
	$msg = valAll();
	echo 
	"
		<script>
			alert("aaa");
		</script>
	";
	
	
	if(valAll() != "" && 1 == 2) /// check validity
	{
		$user["name"] =  $_REQUEST['name'];
		$user["email"] = $_REQUEST['email'];
		$user["userName"] = $_REQUEST['userName'];
		$user["password"] = $_REQUEST['password'];
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
	
	//echo "<br> All User: <br>";
	//seeSession();
	
	//echo "YOLO";
?>