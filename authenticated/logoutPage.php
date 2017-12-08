<?php
	session_start();
	if(!empty($_SESSION["logInHoise"]))
	{
		$_SESSION["logInHoise"] = false;
		session_destroy();
		header("location:../logInPage.php"); /// go back a dir
	}
?>