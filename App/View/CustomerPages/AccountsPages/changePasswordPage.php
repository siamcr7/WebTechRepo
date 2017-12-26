<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>

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

<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>

