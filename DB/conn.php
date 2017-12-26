<?php
	$conn = "";
	function createCon()
	{
		global $conn;
		$conn = mysqli_connect("localhost", "root", "", "webtechrepo", 3306);
	}
	
	function closeCon()
	{
		global $conn;
		mysqli_close($conn);
	}
?>