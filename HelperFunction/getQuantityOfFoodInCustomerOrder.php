<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>

<?php
	if(session_id() == "")session_start();
	
	includeThis("database","allDBFunction.php");
	
	$customerOrderId = getIdByInfo2("status","addedToCart","customerId",$_SESSION["curUser"]["id"],"customer_order");
	
	
	if($customerOrderId != 0 && !empty($_REQUEST["foodId"]))
	{
		$foodId = $_REQUEST["foodId"];
		$customerOrderFood = getFullTable("customer_order_food");
		$quantity = 0;
		for($i=0;$i<count($customerOrderFood);$i++)
		{
			if($customerOrderFood[$i]["customerOrderId"] == $customerOrderId && $customerOrderFood[$i]["foodId"] == $foodId)
			{
				$quantity = (int)$customerOrderFood[$i]["quantity"];
				break;
			}
				
		}
		echo $quantity;
	}
	else echo "0";
?>	