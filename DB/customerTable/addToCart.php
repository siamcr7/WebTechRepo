<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>

<?php
	includeThis("database","allDBFunction.php");
	
	$customerOrderId = getIdByInfo("status","addedToCart","customerId",$_SESSION["curUser"]["id"],"customer_order");
	
	if($customerOrderId == 0)/// no such order as addedToCart, so add first
	{
		
	}
	else
	{
		
	}
		
?>