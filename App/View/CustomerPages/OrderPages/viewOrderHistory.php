<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>
			
			<h1>Order History</h1>
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
				$userArr["Customer Order ID"] = "1";
				$userArr["Order Time"] = "11/11/2016 9:30AM";
				$userArr["Receive Time"] = "11/11/2016 10:48AM";
				$userArr["Status"] = "Delivered";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Customer Order ID"] = "2";
				$userArr["Order Time"] = "11/11/2016 9:30AM";
				$userArr["Receive Time"] = "";
				$userArr["Status"] = "On the way";
				$userList[$iCnt++] = $userArr;
				
				$userArr["Customer Order ID"] = "2";
				$userArr["Order Time"] = "11/11/2016 9:30AM";
				$userArr["Receive Time"] = "";
				$userArr["Status"] = "Ordered";
				$userList[$iCnt++] = $userArr;

				
				
				includeThis("dynamicTable","index.php");
				buildDynamicTable($userList);
				setNextViewPage( hrefThis("customer","OrderPages/viewOrderDetails.php") );
				viewDynamicTableInHTML(false,true);
			?>
			
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>


