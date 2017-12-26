<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>
		
			<h1>Order Detail of Order ID : 1</h1>
			<?php
				/*
				Make the dynamic table more dynamic so that:
				we can print any colomb name as we wish by giving in the first value.
				Also find a way to print the specific col value only. one way is to build
				another arr and send it. For now using only the static values to show.
				*/
				
				/*
				include("../DynamicTable/index.php");
				buildDynamicTable($_SESSION["userList"]);
				viewDynamicTableInHTML(true);
				*/
				
				$iCnt = 0;
				$userArr["Item"] = "Pizza Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Category"] = "Burger";
				$userArr["Quantity"] = "2";
				$userArr["Price"] = "280";
				$userArr["Total Price"] = "560";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Item"] = "Pizza";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Category"] = "Pizza";
				$userArr["Quantity"] = "2";
				$userArr["Price"] = "100";
				$userArr["Total Price"] = "200";
				$userList[$iCnt++] = $userArr;

				
				includeThis("dynamicTable","index.php");
				buildDynamicTable($userList);
				viewDynamicTableInHTML(false,false);
			?>
			
			<br>
			<hr>
			<h1>Receipt of Order ID : 1</h1>
			<?php

				$userArr = array();
				$userList = array();
				$iCnt = 0;
				$userArr["Order ID"] = "1";
				$userArr["Food Price"] = "760";
				$userArr["Vat"] = "200";
				$userArr["Delivery Cost"] = "100";
				$userArr["Total Price"] = "1060 BDT";	
				$userList[$iCnt++] = $userArr;
				
				
				//include("../DynamicTable/index.php");
				buildDynamicTable($userList);
				viewVerticalTable2Col();
			?>
			
			<fieldset align="center">
				<legend>Payment Option</legend>
				<b>Payment Option :</b> Cash On Delivery <br>
				<b>Confirm Address:</b> H 127, B 1, Banani, Dhaka <br>
				<b>Confirm Phone Number:</b> 017675679598 <br>
			</fieldset>
			
			<p align="center">
			<input type = "submit" value = "Print Details">
			</p>
			
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>


