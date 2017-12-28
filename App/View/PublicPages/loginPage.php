<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("public","BasicStructure/loadUpper.php");
?>

<?php
	/// check cookie deya kina
	if(isset($_COOKIE["userName"]))
	{
		$userName = $_COOKIE["userName"];
		$password = $_COOKIE["password"];
		
		header("location:".hrefThis("handler","login.php")."?userName={$userName}&password={$password}");
	}
?>

<form action = "<?=hrefThis("handler","login.php");?>" >
	<fieldset>
		<legend>LOGIN</legend>
		
		<table style="width:100%" >
			<tr>
				<td>User Name: </td>
				<td><input name = "userName" /></td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["userName"]))
							echo $_SESSION["msg"]["userName"];
					?> 
				</td>
			</tr>
			
			<tr>
				<td>Password: </td>
				<td><input name = "password" type = "password"/></td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["password"]))
							echo $_SESSION["msg"]["password"];
						unset($_SESSION["msg"]);
					?> 
				</td>
			</tr>
		</table>
		<hr>
		
		<input type = "checkbox" name = "rememberMe" />Remember Me
		<br>
		
		
		<input type = "submit"/><br>
		<a href="<?=hrefThis("public","forgotPasswordPage.php")?>">Forgot Password?</a><br>
	
	</fieldset>
</form>
	
<?php
	includeThis("public","BasicStructure/loadLower.php");
?>	