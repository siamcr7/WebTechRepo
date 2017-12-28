<script>
	function checkVal()
	{
		var boxVal = document.getElementById("foodID").value;
		//alert(boxVal);
		if(boxVal < 0)boxVal = 0;
		document.getElementById("foodID").value = boxVal;
	}
	
	function addFoodIngredientsId()
	{
		var boxVal = document.getElementById("foodIngredientsId").value;
		if(document.getElementById("foodIngredientsIdPrint").innerHTML != "")
			document.getElementById("foodIngredientsIdPrint").innerHTML += ',';
		document.getElementById("foodIngredientsIdPrint").innerHTML += boxVal;
	}
	
</script>
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
				<legend><h1>Food Items Edit Page</h1></legend>
				
				<form method="post" action="/WebTechRepo/App/View/AdminPages/EditTables/handle/fooditem_handle.php">
				<input name = "editType" type = "radio" value = "add"/>Add
				<input name = "editType" type = "radio" value = "update"/>Update
				
				<table style="width:100%">
					<tr>
						<td>Food ID :</td>
						<td>
						<input id="foodID" name = "ID"  type = "number" onclick = "checkVal()"/>
						</td>
					</tr>
					
					<tr>
						<td>Food Name :</td>
						<td>
						<input name = "fname" />
						</td>
					</tr>
					
					<tr>
						<td>Catagory Id :</td>
						<td>
						<input name = "cid"  type = "number"/>
						</td>
					</tr>
					
					<tr>
						<td>Food Ingredients Id :</td>
						<td>
							<p id = "foodIngredientsIdPrint"></p>
							<input id = "foodIngredientsId" name = "name"  type = "number"/>
							<input type = "button" value = "add" onclick = "addFoodIngredientsId()"/>
						</td>
					</tr>
					
					<tr>
						<td>Food Price (TK):</td>
						<td>
						<input id="foodID" name = "ID" type = "number" onclick = "checkVal()"/>
						</td>
					</tr>
					
					<tr>
						<td>Upload Food Pic:</td>
						<td>
						<input type = "file" name="file" />
						</td>
					</tr>
					
					<tr>
						<td>Food Status :</td>
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


