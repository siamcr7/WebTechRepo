<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/BasicStructure/header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1" width = "15%" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
			<h1>Sales Report</h1>
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
				
				
				$userArr["Food Name"] = "Smoke Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Purchased By"] = "siam_cr7";
				$userArr["Purchased Quantity"] = "1";
				$userArr["Purchase Date"] = "11/12/2016 10:48:23 AM";
				$userArr["Profit Loss of Sale"] = "25";
				$userList[0] = $userArr;
				
				
				$userArr["Food Name"] = "Smoke Pizza";
				$userArr["Food Type"] = "Pizza";
				$userArr["Purchased By"] = "siam_cr7";
				$userArr["Purchased Quantity"] = "2";
				$userArr["Purchase Date"] = "11/12/2016 10:48:23 AM";
				$userArr["Profit Loss of Sale"] = "25";
				$userList[1] = $userArr;
				
				$userArr["Food Name"] = "Pasta Basata";
				$userArr["Food Type"] = "Pasta";
				$userArr["Purchased By"] = "siam_cr7";
				$userArr["Purchased Quantity"] = "10";
				$userArr["Purchase Date"] = "11/12/2016 10:48:23 AM";
				$userArr["Profit Loss of Sale"] = "25";
				$userList[2] = $userArr;
				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/DynamicTable/index.php");
				buildDynamicTable($userList);
				viewDynamicTableInHTML(false,false);
				
				
			?>
			
			<h1 align="center"> TOTAL PROFIT LOSS: 75 </h1>
			<p align="center">
				
				From :  <input type="date"> <br>
				To :  <input type="date"> <br>
				Search By:
				<select name = "searchType">
					<option value = "nothing">select</option>
					<option value = "name">food name</option>
					<option value = "name">food type</option>
					<option value = "ID">Purchased by</option>
				</select>
				<input name = "searchStr" value = ""/>
				<input type = "submit"/><br>
			</p>
			
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/BasicStructure/footer.php");
			?>	
		</td>
	</tr>
		 
</table>


