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
	
	function valUserPass()
	{
		if(empty($_SESSION["userList"]))return false;
		foreach($_SESSION["userList"] as $curUser)
		{
			if(empty($curUser["userName"]))return false;
			if(empty($curUser["password"]))return false;
			if($curUser["userName"] == $_REQUEST['userName'] && $curUser["password"] == $_REQUEST['password'])
			{
				$_SESSION["curUser"] = $curUser;
				return true;
			}
		}
		return false;
	}
	
	loadUserListInSession();
	if(valUserPass())
	{
		$_SESSION["logInHoise"] = true;
		
		//Admin
		//header("location:/WebTechRepo/authenticated/AdminPages/dashboardPage.php");
		
		//Customer
		
		if($_SESSION["curUser"]["role"] == "customer")
		{
			if( !empty($_REQUEST["rememberMe"]) && $_REQUEST["rememberMe"] == "on") /// create cookie
			{
				$cookie_name = "userName";
				$cookie_value = $_SESSION["curUser"]["userName"];
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
				
				$cookie_name = "password";
				$cookie_value = $_SESSION["curUser"]["password"];
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			}
			
			$go = hrefThis("customer","dashboardPage.php");
			$name = $_SESSION["curUser"]["name"];
			echo"<script>
                alert('Logging in as {$name}');   
				document.location='{$go}';
            </script>";
		}
		else if($_SESSION["curUser"]["role"] == "admin")
		{
			$go = "/WebTechRepo/App/View/AdminPages/dashboardPage.php";
			$name = $_SESSION["curUser"]["name"];
			echo"<script>
                alert('Logging in as {$name}');   
				document.location='{$go}';
            </script>";
		}
		else
		{
			$go = hrefThis("public","loginPage.php");
			echo"<script>
                alert('Something went wrong! Try again!');
				document.location='{$go}';	
            </script>";
		}
		
	}
	else
	{
		$go = hrefThis("public","loginPage.php");
		echo"<script>
                alert('User Name Pass Do not match!');
				document.location='{$go}';				
            </script>";
	}		
	
	//echo "YOLO";
?>
