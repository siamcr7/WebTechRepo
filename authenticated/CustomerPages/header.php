<?php
	include("authorization.php");
?>
<html>
	<h1 align="center">Customer Panel</h1>
	
	<p align="right">
		Logged in as
		<a href = "viewProfilePage.php" >
			<?php
				echo $_SESSION["curUser"]["name"];
			?>
		</a>
			| 
		<a href = "logoutPage.php" align="right">Logout</a>
	</p>
</html>