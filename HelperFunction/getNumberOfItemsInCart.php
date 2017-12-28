<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>

<?php
	if(session_id() == "")session_start();

	includeThis("database","allDBFunction.php");
	
	$customerOrderId = getIdByInfo2("status","addedToCart","customerId",$_SESSION["curUser"]["id"],"customer_order");
	
	if($customerOrderId != 0)
	{
		$customerOrderFood = getFullTable("customer_order_food");
		$quantity = 0;
		for($i=0;$i<count($customerOrderFood);$i++)
		{
			if($customerOrderFood[$i]["customerOrderId"] == $customerOrderId)
				$quantity += (int)$customerOrderFood[$i]["quantity"];
		}
		echo $quantity;
	}
	else echo "0";
	
	
	
?>