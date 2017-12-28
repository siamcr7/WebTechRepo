<?php
	session_start();
	if(!empty($_SESSION["logInHoise"]))
	{
		$_SESSION["logInHoise"] = false;
		header("location:/WebTechRepo/PublicPages/loginPage.php");
	}
?>