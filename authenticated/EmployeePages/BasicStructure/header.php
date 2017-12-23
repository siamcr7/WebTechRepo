<?php
	include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/EmployeePages/Auth/authorization.php");
?>
<html>
	<h1 align="center">Employee side</h1>
	
	<p align="right">
		Logged in as
		<a href = "/WebTechRepo/authenticated/EmployeePages/AccountsPages/viewProfilePage.php" >
			<?php
				echo $_SESSION["curUser"]["name"];
			?>
		</a>
			| 
		<a href = "/WebTechRepo/authenticated/EmployeePages/AccountsPages/logoutPage.php" align="right">Logout</a>
	</p>
</html>