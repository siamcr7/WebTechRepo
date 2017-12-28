<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/AdminPages/BasicStructure/header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1" width = "200" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/AdminPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
			<fieldset>
				<legend><h1>Personals Edit Page</h1></legend>
				
				
				
				<form method="post" action="/WebTechRepo/App/View/AdminPages/EditTables/handle/personal_handle.php">
				<input name = "editType" type = "radio" value = "add"/>Add
				<input name = "editType" type = "radio" value = "update"/>Update
				
				<table style="width:100%">
					<tr>
						<td>User ID :</td>
						<td>
						<input name = "ID"  type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Full Name :</td>
						<td>
						<input name = "name" />
						</td>
					</tr>
					
					<tr>
						<td>Email :</td>
						<td>
						<input type="email" name ="email" />
						</td>
					</tr>
					
					<tr>
						<td>UserName :</td>
						<td>
						<input name = "userName"/>
						</td>
					</tr>
					
					<tr>
						<td>Password :</td>
						<td>
						<input name = "pass"  type = "password"/>
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
				<input type = "submit" name="submit"/><br>
				</form>
			</fieldset>
			
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/AdminPages/BasicStructure/footer.php");
			?>	
		</td>
	</tr>
		 
</table>


