<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("public","BasicStructure/loadUpper.php");
?>

<form action = "<?=hrefThis("handler","login.php");?>" >
	<fieldset>
		<legend>LOGIN</legend>
		
		<table style="width:100%" >
			<tr>
				<td>User Name: </td>
				<td><input name = "uN" /></td>
			</tr>
			
			<tr>
				<td>Password: </td>
				<td><input name = "pass" type = "password"/></td>
			</tr>
		</table>
		<hr>
		
		<input type = "checkbox" name = "remember" />Remember Me
		<br>
		
		
		<input type = "submit"/><br>
		<a href="/WebTechRepo/forgotPasswordPage.php">Forgot Password?</a><br>
	
	</fieldset>
</form>
	
<?php
	includeThis("public","BasicStructure/loadLower.php");
?>	