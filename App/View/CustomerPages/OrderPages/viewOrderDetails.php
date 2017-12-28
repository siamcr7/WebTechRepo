<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>
		
			<h1>Order Detail of Order ID : <?=$_REQUEST["customerOrderId"]?></h1>
			<?php
				$customerOrderId = $_REQUEST["customerOrderId"];
				if($customerOrderId != 0)
				{
					$customerOrderFood = getFullTable("customer_order_food");
					$quantity = 0;
					$userList = array();
					$iCnt = 0;
					$imgLoc = hrefThis("resource","FoodPic/");
					for($i=0;$i<count($customerOrderFood);$i++)
					{
						if($customerOrderFood[$i]["customerOrderId"] == $customerOrderId)
						{
							$foodId = $customerOrderFood[$i]["foodId"];
							
							$userArr["id"] = $foodId;
							$userArr["Picture"] = $imgLoc."{$foodId}.png";
							$userArr["Food Name"] = getInfoByID($foodId,"food","name");
							$userArr["Food Type"] = getInfoByID ( getInfoByID($foodId,"food","catagoryId"), "catagory", "name" ) ;
							$userArr["Ingredients"] = getArrayOfInfoFromAgg($foodId , "food","ingredients");
							$userArr["Price (TK)"] = getInfoByID($foodId,"food","price");
							$userArr["Rating"] = calCAvgRating($foodId);
							$userArr["Total Quantity"] = $customerOrderFood[$i]["quantity"];
							$userList[$iCnt++] = $userArr;
						}
					}
					includeThis("dynamicTable","index.php");
					buildDynamicTable($userList);
					viewDynamicTableinHTMLFromCustomer();
				}
			?>
			
			<br>
			<hr>
			<h1>Invoice of Order ID : <?=$_REQUEST["customerOrderId"]?></h1>
			<?php

				if($customerOrderId != 0)
				{
					$customerOrderFood = getFullTable("customer_order_food");
					$totalPrice = 0;
					for($i=0;$i<count($customerOrderFood);$i++)
					{
						if($customerOrderFood[$i]["customerOrderId"] == $customerOrderId)
						{
							$foodId = $customerOrderFood[$i]["foodId"];
							$price = (int)getInfoByID($foodId,"food","price");
							$totalPrice += ($price*(int)$customerOrderFood[$i]["quantity"]);
						}
					}
					
					
					$userArr = array();
					$userList = array();
					
					$userArr["Order ID"] = $customerOrderId;
					$userArr["Total Food Price"] = $totalPrice;
					$userArr["Vat (15%)"] = (float)$totalPrice * .15;
					$userArr["Delivery Cost"] = "100";
					$userArr["Total Price (BDT)"] = (float)$userArr["Total Food Price"] + $userArr["Vat (15%)"] + $userArr["Delivery Cost"];
					
					$userList[0] = $userArr;
					includeThis("dynamicTable","index.php");
					buildDynamicTable($userList);
					viewVerticalTable2Col();
				}
			?>
			
			<p align="center">
			<input type = "submit" value = "Print Details">
			</p>
			
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>


