<form action = "forgotPasswordHandler.php"> 
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include("header.php");
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
				include("footer.php");
			?>
		</td>
	</tr>	 
</table>
</form>	

