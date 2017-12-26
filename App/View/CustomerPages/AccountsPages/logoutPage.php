<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	session_start();
	if(!empty($_SESSION["logInHoise"]))
	{
		$_SESSION["logInHoise"] = false;
		header("location:".hrefThis("public","loginPage.php"));
	}
?>