<?php
	include("authorization.php");
?>
<html>
<<<<<<< HEAD
	<h1 align="center">Customer Panel</h1>
=======
	<h1 align="center">Admin Panel</h1>
>>>>>>> 1ab39feb64251c0e1afe9051e7ac35a6ffe06f47
	
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