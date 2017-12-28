<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>

<?php
	if(session_id() == "")session_start();
	
	includeThis("database","allDBFunction.php");
	
	$customerOrderId = getIdByInfo2("status","addedToCart","customerId",$_SESSION["curUser"]["id"],"customer_order");
	
	if($customerOrderId != 0)
	{
		$foodId = $_REQUEST["foodId"];
		$quantity = $_REQUEST["quantity"];
		
		$arr["quantity"] = $quantity;
		
		updateAgg($arr,"customer_order_food","customerOrderId",$customerOrderId,"foodId",$foodId);
	}
?>	