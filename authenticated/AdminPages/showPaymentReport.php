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

			<h1 align="center"> Employee Monthly Payment </h1>
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
				$userArr["ID"] = "1";
				$userArr["UserName"] = "JamilSiam";
				$userArr["Salary"] = "110";
				$userArr["Payment Amount"] = "110";
				$userArr["Bonus Amount"] = "0";
				$userArr["Payment Date"] = "2/2/2016 8:48:23 AM";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["ID"] = "2";
				$userArr["UserName"] = "Ronalod";
				$userArr["Salary"] = "100";
				$userArr["Payment Amount"] = "100";
				$userArr["Bonus Amount"] = "0";
				$userArr["Payment Date"] = "2/2/2016 8:48:23 AM";
				$userList[$iCnt++] = $userArr;
				
				$userArr["ID"] = "3";
				$userArr["UserName"] = "Masd";
				$userArr["Salary"] = "140";
				$userArr["Payment Amount"] = "140";
				$userArr["Bonus Amount"] = "0";
				$userArr["Payment Date"] = "2/2/2016 8:48:23 AM";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["ID"] = "1";
				$userArr["UserName"] = "JamilSiam";
				$userArr["Salary"] = "110";
				$userArr["Payment Amount"] = "110";
				$userArr["Bonus Amount"] = "0";
				$userArr["Payment Date"] = "2/3/2016 8:48:23 AM";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["ID"] = "2";
				$userArr["UserName"] = "Ronalod";
				$userArr["Salary"] = "100";
				$userArr["Payment Amount"] = "100";
				$userArr["Bonus Amount"] = "0";
				$userArr["Payment Date"] = "2/3/2016 8:48:23 AM";
				$userList[$iCnt++] = $userArr;
				
		
				include("../DynamicTable/index.php");
				buildDynamicTable($userList);
				viewDynamicTableInHTML(false,false);
				
			?>
			
			<h1 align="center"> Pay User </h1>
			<p align="center">
				User ID: <input name = "searchStr" value = ""/><br>
				Bonus Amount: <input name = "searchStr" value = ""/><br>
				<input type = "submit"/><br>
			</p>
			
			
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


