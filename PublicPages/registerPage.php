<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("public","BasicStructure/loadUpper.php");
?>

<form action = "<?=hrefThis("handler","register.php");?>" >
	<fieldset>
		<legend>Registration</legend>
		
		<table style="width:100%" >
			<tr>
				<td>Name : </td>
				<td><input name = "name" /></td>
			</tr>
			
			<tr>
				<td>Email : </td>
				<td><input name = "email"/></td>
			</tr>
			
			<tr>
				<td>UserName : </td>
				<td><input name = "userName"/></td>
			</tr>
			
			<tr>
				<td>Password : </td>
				<td><input name = "password" type = "password"/></td>
			</tr>
			
			<tr>
				<td>Address : </td>
				<td><input name = "address"/></td>
			</tr>
			
			<tr>
				<td>Phone No: </td>
				<td><input name = "phoneNo"/></td>
			</tr>
			
			
			<tr>
				<td>Location : </td>
				<td>
				<select>
					<option value = "nothing" >Select</option>
					<option value = "dhanmondi" >Dhanmondi</option>
					<option value = "gulshan" >Gulshan</option>
					<option value = "banani" >Banani</option>
				</select>
				</td>
			</tr>
			
		</table>
		
	<hr>
	<input type = "submit"/>
	<input type = "reset"/>
	</fieldset>
</form>

<?php
	includeThis("public","BasicStructure/loadLower.php");
?>