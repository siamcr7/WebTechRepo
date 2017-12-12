<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/BasicStructure/header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1" width = "15%" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
			<fieldset>
				<legend><h1>Food Ingredients Edit Page</h1></legend>
				<input name = "editType" type = "radio" value = "add"/>Add
				<input name = "editType" type = "radio" value = "update"/>Update
				
				<table style="width:100%">
					<tr>
						<td>Ingredients ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Ingredients Name :</td>
						<td>
						<input name = "name" value = "XYZ"/>
						</td>
					</tr>
					
					<tr>
						<td>Vendor ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Quantity Remaining :</td>
						<td>
						<input name = "ID" value = "10" type = "number"/>
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
				<input type = "submit"/><br>
			</fieldset>
			
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/BasicStructure/footer.php");
			?>	
		</td>
	</tr>
		 
</table>


