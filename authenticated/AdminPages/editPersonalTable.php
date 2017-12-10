<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include("header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1">
			<?php
				include("accountCol.php");
			?>
		</td>
			
		<td colspan="2" width = "500">
			
			<fieldset>
				<legend><h1>Personals Edit Page</h1></legend>
				<input name = "editType" type = "radio" value = "add"/>Add
				<input name = "editType" type = "radio" value = "update"/>Update
				
				<table style="width:100%">
					<tr>
						<td>User ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Full Name :</td>
						<td>
						<input name = "name" value = "XYZ"/>
						</td>
					</tr>
					
					<tr>
						<td>Email :</td>
						<td>
						<input name = "name" value = "XYZ"/>
						</td>
					</tr>
					
					<tr>
						<td>UserName :</td>
						<td>
						<input name = "userName" value = "XYZ@XYZ.com"/>
						</td>
					</tr>
					
					<tr>
						<td>Password :</td>
						<td>
						<input name = "pass" value = "XYZ@XYZ.com" type = "password"/>
						</td>
					</tr>
					
					<tr>
						<td>Status :</td>
						<td>
							<select name = "status">
								<option value = "nothing">select</option>
								<option value = "active">Active</option>
								<option value = "pending">Pending</option>
								<option value = "disable">Disable</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Role :</td>
						<td>
							<select name = "role">
								<option value = "nothing">select</option>
								<option value = "admin">Admin</option>
								<option value = "employee">Employee</option>
								<option value = "customer">Customer</option>
								<option value = "delevery">Delevery Man</option>
							</select>
						</td>
					</tr>
					
				</table>
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


