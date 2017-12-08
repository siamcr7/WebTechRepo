<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include("header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1">
			<?php
				include("accountCol.php");
			?>
		</td>
			
		<td colspan="2" width = "500">
			<fieldset>
				<legend>Profile</legend>
				<table style="width:100%" >
				
					<tr>
						<td>Name : </td>
						<td>
						<?php
						echo $_SESSION["curUser"]["name"];
						?>
						</td>
					</tr>
					
					
					<tr>
						<td>Email : </td>
						<td>
						<?php
						echo $_SESSION["curUser"]["email"];
						?>
						</td>
					</tr>
					
					<tr>
						<td>User Name : </td>
						<td>
						<?php
						echo $_SESSION["curUser"]["uN"];
						?>
						</td>
					</tr>
					
					<tr>
						<td>Password : </td>
						<td>
						<?php
						echo $_SESSION["curUser"]["pass"];
						?>
						</td>
					</tr>
					
					<tr>
						<td>Gender : </td>
						<td>
						<?php
						echo $_SESSION["curUser"]["gender"];
						?>
						</td>
					</tr>
					
					<tr>
						<td>Date of Birth : </td>
						<td>
						<?php
						echo $_SESSION["curUser"]["DOB"];
						?>
						</td>
					</tr>
					
					<tr>
						<td>Time of Registration : </td>
						<td>
						<?php
						echo $_SESSION["curUser"]["timeOfReg"];
						?>
						</td>
					</tr>
					
				</table>
				<a href = "editProfilePage.php" align="right">Edit Profile</a>
				<br>
			</fieldset>
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include("footer.php");
			?>	
		</td>
	</tr>
		 
</table>


