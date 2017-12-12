<?php
	include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/Auth/authorization.php");
?>
<html>
	<h1 align="center">Customer Panel</h1>
	
	<p align="right">
		Logged in as
		<a href = "/WebTechRepo/authenticated/CustomerPages/AccountsPages/viewProfilePage.php" >
			<?php
				echo $_SESSION["curUser"]["name"];
			?>
		</a>
			| 
		<a href = "/WebTechRepo/authenticated/CustomerPages/AccountsPages/logoutPage.php" align="right">Logout</a>
	</p>
</html>