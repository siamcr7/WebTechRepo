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
		
			<h1><b>Edit Tables: </b></h1>
			<ul>
				<li><a href = "/WebTechRepo/authenticated/AdminPages/EditTables/editPersonalTable.php" align="right">Edit Personals</a> </br></li>
				<li><a href = "/WebTechRepo/authenticated/AdminPages/EditTables/editFoodTable.php" align="right">Edit Food Items</a> </br></li>
				<li><a href = "/WebTechRepo/authenticated/AdminPages/EditTables/editCatagoryTable.php" align="right">Edit Food Catagory</a></li>
				<li><a href = "/WebTechRepo/authenticated/AdminPages/EditTables/editIngredientsTable.php" align="right">Edit Food Ingredients</a></li>
				<li><a href = "/WebTechRepo/authenticated/AdminPages/EditTables/editVendorTable.php" align="right">Edit Ingredients Vendor</a></li>
				<li><a href = "/WebTechRepo/authenticated/AdminPages/EditTables/editSalesTable.php" align="right">Edit Sales Information</a></li>
				<li><a href = "/WebTechRepo/authenticated/AdminPages/EditTables/editCustomerOrderTable.php" align="right">Edit Customer Order</a></li>
				<li><a href = "/WebTechRepo/authenticated/AdminPages/EditTables/editIngredientsOrderTable.php" align="right">Edit Ingredients Order</a></li>
			</ul>
			
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


