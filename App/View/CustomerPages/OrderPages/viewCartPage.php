<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>
		
			<h1>View Cart List</h1>
			<?php
				$imgLoc = hrefThis("resource","FoodPic/");
				
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
				
				includeThis("dynamicTable","index.php");
				buildDynamicTable($userList);
				viewDynamicTableinHTMLFromCustomer();
			?>
			
			
			<h2 align="center">
				TOTAL PRICE = <?=$tot;?> BDT
			</h2>
			
			<p align="center" > <a href = "<?=hrefThis("customer","OrderPages/orderConfirmPage.php") ?>" >Go To Order Confirm Page</a> </p>
			
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>


