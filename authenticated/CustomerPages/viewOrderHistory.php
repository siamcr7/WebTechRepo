<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include("header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1">
			<?php
				include("accountCol.php");
			?>
		</td>
			
		<td colspan="2" width = "500">
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

				
				
				include("../DynamicTable/index.php");
				buildDynamicTable($userList);
				setNextViewPage("viewOrderDetails.php");
				viewDynamicTableInHTML(false,true);
			?>
			
			
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include("footer.php");
			?>	
		</td>
	</tr>
		 
</table>


