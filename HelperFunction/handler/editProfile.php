<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	session_start();
	includeThis("database","allDBFunction.php");
	includeThis("handler","allHandlerFunction.php");
	
	function valAll()
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
			$msg = "Invalid Email. Ex: abc@abc.com.";
			$_SESSION["msg"]["email"] .= $msg;
			$ok = false;
		}
		if(!chkDuplicateEmail() && $_REQUEST['email'] != $_SESSION["curUser"]["email"])
		{
			$msg = "Email Already Taken.";
			$_SESSION["msg"]["email"] .= $msg;
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
	
	if(valAll()) /// check validity
	{
		$user["name"] =  $_REQUEST['name'];
		$user["email"] = $_REQUEST['email'];
		$user["address"] = $_REQUEST['address'];
		$user["location"] = $_REQUEST['location'];
		$user["phoneNo"] = $_REQUEST['phoneNo'];
		
		
		$res = update($user,"user",$_REQUEST['id']);

		if($res == true)
		{
			$go = hrefThis("customer","AccountsPages/editProfilePage.php");
			echo"<script>
                alert('Successfully Updated!');
				document.location = '{$go}';
            </script>";
			$_SESSION["curUser"] = getRowByID($_REQUEST['id'],"user");
		}
		else
		{
			$go = hrefThis("customer","AccountsPages/editProfilePage.php");
			echo"<script>
                alert('Error Occurred! Try Again!');
				document.location = '{$go}';
            </script>";
		}
		
	}
	else
	{
		header("location:".hrefThis("customer","AccountsPages/editProfilePage.php?msg=ase"));
	}
	
	//echo "YOLO";
?>
