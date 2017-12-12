<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/BasicStructure/header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1" width = "15%" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
			<fieldset>
				<legend>Profile</legend>
				<table style="width:100%" >
					
					<tr>
						<td>User ID : </td>
						<td>
						<?php
						echo "12";
						?>
						</td>
					</tr>
					
					
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
					
					<!--
					<tr>
						<td>Password : </td>
						<td>
						<?php
						//echo $_SESSION["curUser"]["pass"];
						?>
						</td>
					</tr>
					--->
					
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
						echo $_SESSION["curUser"]["DOB"]." (24 years 11 months 2 days old)";
						?>
						</td>
					</tr>
					
					<tr>
						<td>User Since : </td>
						<td>
						<?php
						echo "2 years 1 months 12 days";
						?>
						</td>
					</tr>
					
					<tr>
						<td>Address : </td>
						<td>
						<?php
						echo "H 127, B 1, Banani, Dhaka";
						?>
						</td>
					</tr>
					
					<tr>
						<td>Phone No : </td>
						<td>
						<?php
						echo "017675679598";
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
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/BasicStructure/footer.php");
			?>	
		</td>
	</tr>
		 
</table>


