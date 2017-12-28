<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("public","BasicStructure/loadUpper.php");
?>

<form method = "POST" action = "<?=hrefThis("handler","register.php");?>" >
	<fieldset>
		<legend>Registration</legend>
		
		<table>
			<tr>
				<td>Name : </td>
				<td><input name = "name" /></td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["name"]))
							echo $_SESSION["msg"]["name"];
					?> 
				</td>
				
			</tr>
			
			<tr>
				<td>Email : </td>
				<td><input name = "email"/></td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["email"]))
							echo $_SESSION["msg"]["email"];
					?> 
				</td>
			</tr>
			
			<tr>
				<td>UserName : </td>
				<td><input name = "userName"/></td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["userName"]))
							echo $_SESSION["msg"]["userName"];
					?> 
				</td>
			</tr>
			
			<tr>
				<td>Password : </td>
				<td><input name = "password" type = "password"/></td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["password"]))
							echo $_SESSION["msg"]["password"];
					?> 
				</td>
			</tr>
			
			<tr>
				<td>Address : </td>
				<td><input name = "address"/></td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["address"]))
							echo $_SESSION["msg"]["address"];
					?> 
				</td>
			</tr>
			
			<tr>
				<td>Phone No: </td>
				<td><input name = "phoneNo"/></td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["phoneNo"]))
							echo $_SESSION["msg"]["phoneNo"];
					?> 
				</td>
			</tr>
			
			
			<tr>
				<td>Location : </td>
				<td>
				<select name = "location">
					<option value = "nothing" >Select</option>
					<option value = "dhanmondi" >Dhanmondi</option>
					<option value = "gulshan" >Gulshan</option>
					<option value = "banani" >Banani</option>
				</select>
				</td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["location"]))
							echo $_SESSION["msg"]["location"];
						unset($_SESSION["msg"]);
					?> 
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