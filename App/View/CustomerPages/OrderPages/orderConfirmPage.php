<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>
<form action = "<?=hrefThis("handler","confirmOrder.php")?>">
	<h1>Order Confirm Details</h1>
	<?php
		if(session_id() == "")session_start();
		includeThis("database","allDBFunction.php");
		
		$customerOrderId = getIdByInfo2("status","addedToCart","customerId",$_SESSION["curUser"]["id"],"customer_order");

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
		<fieldset align="center">
			<legend>Payment Option</legend>
			<input name = "paymentMethod" type = "radio" checked value = "bKash" />bKash
			<input name = "paymentMethod" type = "radio" value = "cashOnDelivery"/>Cash On Delivery
		</fieldset>
	</p>
	
	 <h2 align = "center"> <input type = "submit" value = "Confirm Order" /> </h2>
</form>
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>


