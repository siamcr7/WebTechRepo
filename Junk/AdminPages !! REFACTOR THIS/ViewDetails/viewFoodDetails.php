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
		<td colspan="1" width = "200" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
			<h1>Food Details</h1>
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
				$userArr["Food Pictrue"] = "";
				$userArr["Food ID"] = "1";
				$userArr["Food Name"] = "Big Boy Burger";
				$userArr["Caragory ID"] = "1";
				$userArr["Food Ingredients ID"] = "1";
				$userArr["Food Price (TK)"] = "238";
				$userArr["Food Status"] = "active";
				$userList[$iCnt++] = $userArr;
				
				
				include($_SERVER['DOCUMENT_ROOT']."/WebtechRepo/authenticated/DynamicTable/index.php");
				buildDynamicTable($userList);
				viewVerticalTable2Col();
			?>
				
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


