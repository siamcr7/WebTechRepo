<?php
	session_start();
?>
<form action = "changePasswordHandler.php"> 
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
				<legend>Change Password</legend>
				<table style="width:100%" >
				
					<tr>
						<td>Current Password :</td>
						<td>
						<input name = "curPass"/>
						</td>
					</tr>
					
					<tr>
						<td>New Password : </td>
						<td>
						<input name = "pass"/>
						</td>
					</tr>
					
					<tr>
						<td>Retype New Password : </td>
						<td>
						<input name = "rePass"/>
						</td>
					</tr>
					
				</table>
				<input type = "submit"/><br>
				
	
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
</form>	
