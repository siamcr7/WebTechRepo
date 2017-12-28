<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>

<?php
	session_start();
	includeThis("database","allDBFunction.php");
	
	
	$foodId = 0;
	$quantity = 0;
	if( !empty($_REQUEST["foodId"]) )$foodId = $_REQUEST["foodId"];
	if( !empty($_REQUEST["quantity"]) )$quantity = $_REQUEST["quantity"];
	
	if($foodId != 0)
	{
		$customerOrderId = getIdByInfo2("status","addedToCart","customerId",$_SESSION["curUser"]["id"],"customer_order");
		if($customerOrderId == 0)/// no such order as addedToCart, so add first
		{
			$insData = array();
			$insData["customerId"] = "'".$_SESSION["curUser"]["id"]."'";
			$insData["status"] = "'"."addedToCart"."'";
			
			date_default_timezone_set("Asia/Dhaka");
			$date = date('Y-m-d h:i:s', time());
			$insData["orderTime"] = "'".$date."'";
			
			$res = insert($insData,"customer_order");
			if($res == true)
			{
				echo "done added to customer order";
			}
			else
			{
				echo "error while adding to customer order";
			}
			
			$customerOrderId = getIdByInfo2("status","addedToCart","customerId",$_SESSION["curUser"]["id"],"customer_order");
			
			
		}
		
		/// now add to the customer_order_food
		$insData = array();
		$insData["customerOrderId"] = "'".$customerOrderId."'";
		$insData["foodId"] = "'".$foodId."'";
		$insData["quantity"] = "'".$quantity."'";
		$res = insert($insData,"customer_order_food");
		
		if($res == false)/// so now we update
		{
			$arr = array();
			$arr["quantity"] = (int)getInfoByID2("customerOrderId",$customerOrderId,"foodId",$foodId,"customer_order_food","quantity");
			$arr["quantity"] += (int)$quantity;
			
			updateAgg($arr,"customer_order_food","customerOrderId",$customerOrderId,"foodId",$foodId);
			
			//echo "hoise?";
		}
		
	}
	else echo "no food id found";
	
		
?>