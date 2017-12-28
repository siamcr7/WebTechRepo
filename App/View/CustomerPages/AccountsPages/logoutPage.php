<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	session_start();
	if(!empty($_SESSION["logInHoise"]))
	{
		$cookie_name = "userName";
		$cookie_value = $_SESSION["curUser"]["userName"];
		setcookie($cookie_name, $cookie_value, time() - (86400 * 30*10), "/"); // 86400 = 1 day
		
		$cookie_name = "password";
		$cookie_value = $_SESSION["curUser"]["password"];
		setcookie($cookie_name, $cookie_value, time() - (86400 * 30*10), "/"); // 86400 = 1 day
		
		
		unset($_SESSION["logInHoise"]);
		unset($_SESSION["curUser"]);
		header("location:".hrefThis("public","loginPage.php"));
	}
?>