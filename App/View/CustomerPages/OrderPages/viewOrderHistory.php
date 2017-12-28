<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>
			
	<h1>Order History</h1>
	<?php
		if(session_id() == "")session_start();
		includeThis("database","allDBFunction.php");
		
		$userList = array();
		$userList = getArrayOfInfo("customerId",$_SESSION["curUser"]["id"],"customer_order");
		
		$ret = array();
		for($i=0;$i<count($userList);$i++)
		{
			$ret[$i]["Order ID"] = $userList[$i]["id"];
			$ret[$i]["Order Time"] = $userList[$i]["orderTime"];
			$ret[$i]["Receive Time"] = $userList[$i]["receiveTime"];
			$ret[$i]["Order Status"] = $userList[$i]["status"];
			$ret[$i]["Payment Method"] = $userList[$i]["paymentMethod"];
			$ret[$i]["View Details"] = hrefThis("customer","OrderPages/viewOrderDetails.php?customerOrderId=").$userList[$i]["id"];
		}
		
		
		includeThis("dynamicTable","index.php");
		buildDynamicTable($ret);
		viewDynamicTableinHTMLFromCustomer();
	?>
			
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>


