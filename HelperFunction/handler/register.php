<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	session_start();
	includeThis("database","allDBFunction.php");
	includeThis("handler","allHandlerFunction.php");
	function loadUserListInSession()
	{
		unset($_SESSION["userList"]);
		$_SESSION["userList"] = getFullTable("user");
	}
	
	function valAll() /// validates all
	{
		$ok = true;
		$msg = "";
		
		unset($_SESSION["msg"]);
		$_SESSION["msg"]["name"] = "";
		if(!chkName())
		{
			$msg = "Invalid Name. name can contain alpha numeric characters and must start with alphabets and have at least 2 words.";
			$_SESSION["msg"]["name"] .= $msg;
			$ok = false;
		}
		
		$_SESSION["msg"]["email"] = "";
		if(!chkEmail())
		{
			$msg = "Invalid Email. Ex: abc@abc.com .";
			$_SESSION["msg"]["email"] .= $msg;
			$ok = false;
		}	
		if(!chkDuplicateEmail())
		{
			$msg = "Email Already Taken.";
			$_SESSION["msg"]["email"] .= $msg;
			$ok = false;
		}
		
		$_SESSION["msg"]["userName"] = "";
		if(!chkUserName())
		{
			$msg = "Invalid User Name. UserName can only contain alpha numeric character and the following characters: [ _  -  . ] and must contain at least 2 letters.";
			$_SESSION["msg"]["userName"] .= $msg;
			$ok = false;
		}
		if(!chkDuplicateUserName())
		{
			$msg = "User Name Already Taken.";
			$_SESSION["msg"]["userName"] .= $msg;
			$ok = false;
		}
		
		$_SESSION["msg"]["password"] = "";
		if(!chkPass())
		{
			$msg = "Invalid Password. Password can only contain alpha numeric character and must have any of [@ # $ %] and have at least size of 8 characters.";
			$_SESSION["msg"]["password"] .= $msg;
			$ok = false;
		}
		
		$_SESSION["msg"]["phoneNo"] = "";
		if(!chkPhoneNo())
		{
			$msg = "Invalid Phone Number of Bangladesh.";
			$_SESSION["msg"]["phoneNo"] .= $msg;
			$ok = false;
		}
		
		$_SESSION["msg"]["location"] = "";
		if(!chkLocation())
		{
			$msg = "Select Location.";
			$_SESSION["msg"]["location"] .= $msg;
			$ok = false;
		}
		
		$_SESSION["msg"]["address"] = "";
		if(!chkAddress())
		{
			$msg = "Address Can not be empty.";
			$_SESSION["msg"]["address"] .= $msg;
			$ok = false;
		}
		
		return $ok;
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
	
	
	loadUserListInSession();
	if(valAll()) /// check validity
	{
		$user["name"] =  "'".$_REQUEST['name']."'";
		$user["userName"] = "'".$_REQUEST['userName']."'";
		$user["email"] = "'".$_REQUEST['email']."'";
		$user["address"] = "'".$_REQUEST['address']."'";
		$user["location"] = "'".$_REQUEST['location']."'";
		$user["role"] = "'"."customer"."'";
		$user["password"] = "'".$_REQUEST['password']."'";
		$user["status"] = "'"."active"."'";
		
		date_default_timezone_set("Asia/Dhaka");
		$date = date('Y-m-d h:i:s', time());
		$user["regDate"] = "'".$date."'";
		$user["phoneNo"] = "'".$_REQUEST['phoneNo']."'";
		
		
		$res = insert($user,"user");

		if($res == true)
		{
			$go = hrefThis("public","registerPage.php");
			echo"<script>
                alert('Registration Successful!');
				document.location='{$go}';
            </script>";
		}
		else
		{
			$go = hrefThis("public","registerPage.php");
			echo"<script>
                alert('Error Occurred! Try Again!');
				document.location='{$go}';				
            </script>";
		}
		
	}
	else
	{
		header("location:".hrefThis("public","registerPage.php?msg=ase"));
	}
	
	//echo "<br> All User: <br>";
	//seeSession();

?>