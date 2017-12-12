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
		<td colspan="1" width = "15%" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
			<h1>Food List</h1>
			
			<a href="viewCart.php">
				<h3 id ="viewCart" align="right" hidden>View Cart</h3>
			</a>
			<hr>
			<p align="center">
				Food Name: <input name = "searchStr" value = "" style="width: 50"/>
				| 
				Food Type:
				<select name = "searchType">
					<option value = "nothing">select</option>
					<option value = "name">Burger</option>
					<option value = "name">Pizza</option>
					<option value = "name">Thai Food</option>
				</select>
				| 
				Ingredients 
				<select name = "searchType">
					<option value = "nothing">select</option>
					<option value = "name">Beef</option>
					<option value = "name">Chicken</option>
					<option value = "name">Mushroom</option>
				</select>
				|
				Price Range:
				<input name = "searchStr" value = "0" style="width: 50"/>
				-
				<input name = "searchStr" value = "1000000" style="width: 50"/>
				| 
				Rating Range:
				<input name = "searchStr" value = "0" style="width: 50"/>
				-
				<input name = "searchStr" value = "5" style="width: 50"/>
				|
				<input type = "checkbox"/> Only Offers! |
				<input type = "submit"/>
				
				<br>
			</p>
			<hr>
			
			<?php
				$imgLoc = "/WebTechRepo/authenticated/Resources/FoodPic/";
				
				$iCnt = 0; //$_COOKIE["curPage"];
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Choco Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userArr["Select"] = "";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Big Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userArr["Select"] = "";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Pizza Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userArr["Select"] = "";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Pizza Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userArr["Select"] = "";
				$userList[$iCnt++] = $userArr;
				
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Pizza Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userArr["Select"] = "";
				$userList[$iCnt++] = $userArr;
				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/DynamicTable/index.php");
				buildDynamicTable($userList);
				viewDynamicTableinHTMLFromCustomer();
			?>
			<p align="right">
				<input type = "submit" value = "Add All To Cart"/>
			</p>
			<p align="center">
				<input type = "button" value = "previous page" onclick = "goToNext()"/>
				<input type = "button" value = "next page" onclick = "goToNext()"/>
				<br/>
			</p>
			
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


