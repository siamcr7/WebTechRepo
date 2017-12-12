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
				<legend><h1>Sales Edit Page</h1></legend>
				<!-- <input name = "editType" type = "radio" value = "add"/>Add -->
				<input name = "editType" type = "radio" value = "update"/>Update
				
				<table style="width:100%">
					<tr>
						<td>Sales ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Customer Order ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Employee ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Delivery Man ID :</td>
						<td>
						<input name = "ID" value = "1" type = "number"/>
						</td>
					</tr>					
					
				</table>
				<input type = "submit"/> <br>
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


