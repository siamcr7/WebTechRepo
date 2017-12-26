<?php
	include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/Auth/authorization.php");
?>
<html>
	<h1 align="center">Admin Panel</h1>
	
	<p align="right">
		Logged in as
		<a href = "/WebTechRepo/authenticated/AdminPages/AccountsPages/viewProfilePage.php" >
			<?php
				echo $_SESSION["curUser"]["name"];
			?>
		</a>
			| 
		<a href = "/WebTechRepo/authenticated/AdminPages/AccountsPages/logoutPage.php" align="right">Logout</a>
	</p>
</html>