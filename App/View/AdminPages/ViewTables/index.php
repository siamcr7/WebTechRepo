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
		
			<h1><b>View Tables: </b></h1>
			<ul>
				<li><a href = "/WebTechRepo/App/View/AdminPages/ViewTables/viewPersonalTable.php" align="right">View Personals</a> </br></li>
				<li><a href = "/WebTechRepo/App/View/AdminPages/ViewTables/viewFoodTable.php" align="right">View Food Items</a> </br></li>
				<li><a href = "/WebTechRepo/App/View/AdminPages/ViewTables/viewCatagoryTable.php" align="right">View Food Catagory</a></li>
				<li><a href = "/WebTechRepo/App/View/AdminPages/ViewTables/viewIngredientsTable.php" align="right">View Food Ingredients</a></li>
				<!--<li><a href = "/WebTechRepo/App/View/AdminPages/ViewTables/viewVendorTable.php" align="right">View Ingredients Vendor</a></li>-->
				<li><a href = "/WebTechRepo/App/View/AdminPages/ViewTables/viewSalesTable.php" align="right">View Sales Information</a></li>
				<li><a href = "/WebTechRepo/App/View/AdminPages/ViewTables/viewCustomerOrderTable.php" align="right">View Customer Order</a></li>
				<li><a href = "/WebTechRepo/App/View/AdminPages/ViewTables/viewIngredientsOrderTable.php" align="right">View Ingredients Order</a></li>
			</ul>
			
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


