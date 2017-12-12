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
		
			<h1>Food Ingredients Vendor List</h1>
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
				$userArr["Vendor ID"] = "1";
				$userArr["Vendor Name"] = "Pran";
				$userArr["Vendor Email"] = "spran@yahoo.com";
				$userArr["Vendor Address"] = "Tejgaon";
				$userArr["Status"] = "active";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Vendor ID"] = "2";
				$userArr["Vendor Name"] = "SQR";
				$userArr["Vendor Email"] = "XYQ@yahoo.com";
				$userArr["Vendor Address"] = "Gulshan";
				$userArr["Status"] = "active"; 
				$userList[$iCnt++] = $userArr;

				
				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/DynamicTable/index.php");
				buildDynamicTable($userList);
				setNextEditPage("/WebTechRepo/authenticated/AdminPages/EditTables/editVendorTable.php");
				setNextViewPage("editVendorTable.php");
				viewDynamicTableInHTML(true,true);
			?>
			
			<p align="center">
				Search By:
				<select name = "searchType">
					<option value = "nothing">select</option>
					<option value = "name">name</option>
					<option value = "ID">ID</option>
				</select>
				<input name = "searchStr" value = ""/>
				<input type = "submit"/><br>
			</p>
			
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


