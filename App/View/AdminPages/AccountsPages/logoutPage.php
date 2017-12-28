<?php
	session_start();
	if(!empty($_SESSION["logInHoise"]))
	{
		$_SESSION["logInHoise"] = false;
		header("location:/WebTechRepo/App/View/PublicPages/loginPage.php");
	}
?>