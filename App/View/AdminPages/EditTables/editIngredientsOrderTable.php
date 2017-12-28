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
				<legend><h1>Ingredients Order Edit Page</h1></legend>
				<input name = "editType" type = "radio" value = "add"/>Add
				<input name = "editType" type = "radio" value = "update"/>Update
				
				<table style="width:100%">
					<tr>
						<td>Ingredients Order ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Ingredients ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Quantity To Add :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Admin ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Vendor ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Order Date :</td>
						<td>
						<input name = "ID" type = "date"/>
						</td>
					</tr>
					
					<tr>
						<td>Received Date :</td>
						<td>
						<input name = "ID" type = "date"/>
						</td>
					</tr>
					
					<tr>
						<td>Order Status :</td>
						<td>
							<select name = "status">
								<option value = "nothing">select</option>
								<option value = "active">Ordered</option>
								<option value = "pending">Received</option>
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
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/AdminPages/BasicStructure/footer.php");
			?>	
		</td>
	</tr>
		 
</table>


