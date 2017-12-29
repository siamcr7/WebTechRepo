<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>

<script src = "<?=hrefThis("resource","js/CustomerPages/OrderPages/viewCart.js")?>"></script>
		
			<h1>View Cart List</h1>
			<?php
				
				if(session_id() == "")session_start();

				includeThis("database","allDBFunction.php");
				
				$customerOrderId = getIdByInfo2("status","addedToCart","customerId",$_SESSION["curUser"]["id"],"customer_order");
				
				$tot = 0;
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

							$userArr = array();
							$userArr["id"] = $foodId;
							$userArr["Picture"] = $imgLoc."{$foodId}.png";
							$userArr["Food Name"] = getInfoByID($foodId,"food","name");
							$userArr["Food Type"] = getInfoByID ( getInfoByID($foodId,"food","catagoryId"), "catagory", "name" ) ;
							$userArr["Ingredients"] = getArrayOfInfoFromAgg($foodId , "food","ingredients");
							$userArr["Price (TK)"] = getInfoByID($foodId,"food","price");
							$userArr["Rating"] = calCAvgRating($foodId);
							$userArr["Quantity"] = $customerOrderFood[$i]["quantity"];
							$userList[$iCnt++] = $userArr;
							
							$tot += ((int)$userArr["Price (TK)"] * (int)$userArr["Quantity"]);
						}
					}
					includeThis("dynamicTable","index.php");
					buildDynamicTable($userList);
					viewDynamicTableinHTMLFromCustomer();
				}
				
			?>
			
			
			<h2 align="center">
				TOTAL PRICE = <u id = "totalPrice"><?=$tot;?></u> BDT
			
				<p align="center" > <a href = "<?=hrefThis("customer","OrderPages/orderConfirmPage.php") ?>" >Go To Order Confirm Page</a> </p>
			</h2>
			
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>


