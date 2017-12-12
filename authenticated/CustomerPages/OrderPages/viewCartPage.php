<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/BasicStructure/header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1" width = "200" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
			<h1>View Cart List</h1>
			<?php
				$imgLoc = "/WebTechRepo/authenticated/Resources/FoodPic/";
				
				$tot = 0;
				
				$iCnt = 0; //$_COOKIE["curPage"];
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Choco Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "2";
				$userArr["Select"] = "checked";
				$userList[$iCnt++] = $userArr;
				$tot += ($userList[$iCnt-1]["Price (TK)"] * $userList[$iCnt-1]["Quantity"]);
				
				
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Big Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "6";
				$userArr["Select"] = "checked";
				$userList[$iCnt++] = $userArr;
				$tot += ($userList[$iCnt-1]["Price (TK)"] * $userList[$iCnt-1]["Quantity"]);
				
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Pizza Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "1";
				$userArr["Select"] = "checked";
				$userList[$iCnt++] = $userArr;
				$tot += ($userList[$iCnt-1]["Price (TK)"] * $userList[$iCnt-1]["Quantity"]);
				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/DynamicTable/index.php");
				buildDynamicTable($userList);
				viewDynamicTableinHTMLFromCustomer();
			?>
			
			
			<h2 align="center">
				TOTAL PRICE = <?=$tot;?> BDT
			</h2>
			
			<p align="center" > <a href = "orderConfirmPage.php" >Go To Order Confirm Page</a> </p>
			
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/BasicStructure/footer.php");
			?>	
		</td>
	</tr>
		 
</table>


