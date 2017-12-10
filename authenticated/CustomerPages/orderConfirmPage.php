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
			<h1>Order Details</h1>
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
				$userArr["Food Price"] = "3000";
				$userArr["Vat"] = "200";
				$userArr["Delivery Cost"] = "100";
				$userArr["Total Price"] = "3300 BDT";
				$userList[$iCnt++] = $userArr;
				
				
				include("../DynamicTable/index.php");
				buildDynamicTable($userList);
				viewDynamicTableInHTML(false);
			?>
			
			<p align="center">
				<fieldset align="center">
					<legend>Payment Option</legend>
					<input name = "paymentOption" type = "radio" />Bkash
					<input name = "paymentOption" type = "radio" />Cash On Delivery
				</fieldset>
<<<<<<< HEAD
				<p align="center">
				Confirm Address:  <input value = "H 127, B 1, Banani, Dhaka" /> <br>
				Confirm Phone Number:  <input value = "	017675679598" /> <br>
				</p>
			</p>
			
			 <h2 align = "center"> <input type = "submit" value = "Confirm Order" /> </h2>
			
=======
				Confirm Address:  <input value = "H 127, B 1, Banani, Dhaka" /> <br>
				Confirm Phone Number:  <input value = "	017675679598" /> <br>
			</p>
			
>>>>>>> 1e17f25b139ea48d5a6d61e2e5e46cbd6803a2bd
			
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


