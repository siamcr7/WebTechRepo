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
				<legend><h1>Food Ingredients Edit Page</h1></legend>
				<form method="post" action="/WebTechRepo/App/View/AdminPages/EditTables/handle/editIngredients_handle.php">
				<input name = "editType" type = "radio" value = "add"/>Add
				<input name = "editType" type = "radio" value = "update"/>Update
				
				<table style="width:100%">
					<tr>
						<td>Ingredients ID :</td>
						<td>
						<input name = "ID"  type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Ingredients Name :</td>
						<td>
						<input name = "name" />
						</td>
					</tr>
					
					<tr>
						<td>Vendor ID :</td>
						<td>
						<input name = "VID" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Quantity Remaining :</td>
						<td>
						<input name = "QID" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Status :</td>
						<td>
							<select name = "status">
								<option value = "nothing">select</option>
								<option value = "active">Active</option>
								<option value = "disable">Disable</option>
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


