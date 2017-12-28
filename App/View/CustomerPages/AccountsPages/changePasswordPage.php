<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>

<form action = "<?=hrefThis("handler","changePassword.php");?>" >
	<fieldset>
		<legend>Change Password</legend>
		<table style="width:100%" >
		
			<tr>
				<td>Current Password :</td>
				<td>
					<input name = "currentPassword" type = "password"/>
				</td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["currentPassword"]))
							echo $_SESSION["msg"]["currentPassword"];
					?> 
				</td>
			</tr>
			
			<tr>
				<td>New Password : </td>
				<td>
					<input name = "password" type = "password"/>
				</td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["password"]))
							echo $_SESSION["msg"]["password"];
					?> 
				</td>
			</tr>
			
			<tr>
				<td>Retype New Password : </td>
				<td>
					<input name = "rePassword" type = "password"/>
				</td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["rePassword"]))
							echo $_SESSION["msg"]["rePassword"];
						unset($_SESSION["msg"]);
					?> 
				</td>
			</tr>
			
		</table>
		<input type = "submit"/><br>
		

	</fieldset>
</form>

<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>

