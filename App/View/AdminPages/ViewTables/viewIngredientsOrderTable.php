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
		
			<h1>Ingredients Order List</h1>
			<?php
				/*
				Make the dynamic table more dynamic so that:
				we can print any colomb name as we wish by giving in the first value.
				Also find a way to print the specific col value only. one way is to build
				another arr and send it. For now using only the static values to show.
				*/
				
				/*
				include("../DynamicTable/index.php");
				buildDynamicTable($_SESSION["userList"]);
				viewDynamicTableInHTML(true);
				*/
				
				$iCnt = 0;
				$userArr["Ingredients Order ID"] = "1";
				$userArr["Ingredients ID"] = "2";
				$userArr["Quantity To Add"] = "10";
				$userArr["Admin ID"] = "2";
				$userArr["Vendor ID"] = "2";
				$userArr["Order Date"] = "11/12/2017";
				$userArr["Received Date"] = "";
				$userArr["Status"] = "Ordered";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Ingredients Order ID"] = "1";
				$userArr["Ingredients ID"] = "2";
				$userArr["Quantity To Add"] = "2";
				$userArr["Admin ID"] = "2";
				$userArr["Vendor ID"] = "2";
				$userArr["Order Date"] = "11/12/2017";
				$userArr["Received Date"] = "21/12/2017";
				$userArr["Status"] = "Received";
				$userList[$iCnt++] = $userArr;

				
				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/DynamicTable/index.php");
				buildDynamicTable($userList);
				setNextEditPage("/WebTechRepo/App/View/AdminPages/EditTables/editIngredientsOrderTable.php");
				setNextViewPage("editIngredientsOrderTable.php");
				viewDynamicTableInHTML(true,true);
			?>
			
			
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


