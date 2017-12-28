<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("public","BasicStructure/loadUpper.php");
?>
<form method = "POST" action = "<?=hrefThis("handler","forgotPassword.php");?>" >
	<fieldset>
		<legend>Forgot Password</legend>
		
		Enter User Name:  
		<input name = "userName"/> <br>
		<hr>
		
		<br>

		<input type = "submit"/><br>
	</fieldset>
</form>
<?php
	includeThis("public","BasicStructure/loadLower.php");
?>