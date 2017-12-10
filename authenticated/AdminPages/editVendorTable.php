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
				<legend><h1>Food Ingredients Vendor Edit Page</h1></legend>
				<input name = "editType" type = "radio" value = "add"/>Add
				<input name = "editType" type = "radio" value = "update"/>Update
				
				<table style="width:100%">
					<tr>
						<td>Vendor ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Vendor Name :</td>
						<td>
						<input name = "name" value = "XYZ"/>
						</td>
					</tr>
					
					<tr>
						<td>Vendor Email :</td>
						<td>
						<input name = "name" value = "XYZ@XYZ.com"/>
						</td>
					</tr>
					
					<tr>
						<td>Vendor Address :</td>
						<td>
						<input name = "name" value = "XYZ"/>
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
				include("footer.php");
			?>	
		</td>
	</tr>
		 
</table>


