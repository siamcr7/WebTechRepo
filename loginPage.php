<form action = "validateLogin.php"> 
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
				<legend>LOGIN</legend>
				
				<table style="width:100%" >
					<tr>
						<td>User Name: </td>
						<td><input name = "uN" /></td>
					</tr>
					
					<tr>
						<td>Password: </td>
						<td><input name = "pass"/></td>
					</tr>
				</table>
				<hr>
				
				<input type = "checkbox" name = "remember" />Remember Me
				<br>
				
				
			<input type = "submit"/><br>
			<a href="forgotPasswordPage.php">Forgot Password?</a><br>
	
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