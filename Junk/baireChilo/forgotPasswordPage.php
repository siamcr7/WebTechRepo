<form action = "/WebTechRepo/forgotPasswordHandler.php"> 
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/header.php");
			?>
		</td>
	</tr>
		  
	<tr>
		<td  colspan="3" >
			<fieldset>
				<legend>Forgot Password</legend>
				
				Enter User Name:  
				<input name = "uN"/> <br>
				<hr>
				
				<br>

			<input type = "submit"/><br>
			</fieldset>
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/footer.php");
			?>
		</td>
	</tr>	 
</table>
</form>	

