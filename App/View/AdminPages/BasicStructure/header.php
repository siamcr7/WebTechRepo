<?php
	//include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/AdminPages/Auth/authorization.php");
?>
<html>
	<h1 align="center">Admin Panel</h1>
	
	<p align="right">
		Logged in as
		<a href = "/WebTechRepo/App/View/AdminPages/AccountsPages/viewProfilePage.php" >
			<?php
				echo $_SESSION["curUser"]["name"];
			?>
		</a>
			| 
		<a href = "/WebTechRepo/App/View/AdminPages/AccountsPages/logoutPage.php" align="right">Logout</a>
	</p>
</html>