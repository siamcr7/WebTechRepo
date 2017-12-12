<form action = "/WebTechRepo/regiHandler.php"> 
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
						<td><input name = "uN"/></td>
					</tr>
					
					<tr>
						<td>Password : </td>
						<td><input name = "pass"/></td>
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
				
				<fieldset>
					<legend>Gender</legend>
					<input name = "gender" type = "radio" value = "Male"/>Male
					<input name = "gender" type = "radio" value = "Female"/>Female
					<input name = "gender" type = "radio" value = "Other"/>Other
				</fieldset>
				
				<fieldset>
					<legend>Date of Birth</legend>
					<table style="width:100%">
					  <tr>
						<td align="center">Day</td>
						<td align="center">Month</td>
						<td align="center">Year</td>
					  </tr>
					  <tr>
						<td align="center"><input name = "d"/></td>
						<td align="center"><input name = "m"/></td>
						<td align="center"><input name = "y"/></td>
					  </tr>
					
					</table>
				</fieldset>
			<hr>
			<input type = "submit"/>
			<input type = "reset"/>
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