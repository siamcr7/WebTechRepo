<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/BasicStructure/header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1" width = "200" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
			<h1>Order Confirm Details</h1>
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
				$userArr["Order ID"] = "12";
				$userArr["Food Price"] = "3000";
				$userArr["Vat"] = "200";
				$userArr["Delivery Cost"] = "100";
				$userArr["Total Price"] = "3300 BDT";
				$userList[$iCnt++] = $userArr;
				
				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/DynamicTable/index.php");
				buildDynamicTable($userList);
				viewVerticalTable2Col();
			?>
			
			<p align="center">
				<fieldset align="center">
					<legend>Payment Option</legend>
					<input name = "paymentOption" type = "radio" />Bkash
					<input name = "paymentOption" type = "radio" />Cash On Delivery
				</fieldset>
				<p align="center">
				Confirm Address:  <input value = "H 127, B 1, Banani, Dhaka" /> <br>
				Confirm Phone Number:  <input value = "	017675679598" /> <br>
				</p>
			</p>
			
			 <h2 align = "center"> <input type = "submit" value = "Confirm Order" /> </h2>
			
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/BasicStructure/footer.php");
			?>	
		</td>
	</tr>
		 
</table>


