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
			
			<h1 align="center"> Session Info </h1>
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
				
				
				$userArr["ID"] = "1";
				$userArr["UserName"] = "JamilSiam";
				$userArr["Salary"] = "100";
				$userArr["Log in time"] = "11/12/2016 8:48:23 AM";
				$userArr["Log out time"] = "11/12/2016 10:48:23 AM";
				$userList[0] = $userArr;
				
				
				$userArr["ID"] = "2";
				$userArr["UserName"] = "Ronalod";
				$userArr["Salary"] = "100";
				$userArr["Log in time"] = "11/12/2016 8:48:23 AM";
				$userArr["Log out time"] = "11/12/2016 10:48:23 AM";
				$userList[1] = $userArr;
				
				$userArr["ID"] = "3";
				$userArr["UserName"] = "Masd";
				$userArr["Salary"] = "100";
				$userArr["Log in time"] = "11/12/2016 8:48:23 AM";
				$userArr["Log out time"] = "11/12/2016 10:48:23 AM";
				$userList[2] = $userArr;
				
				include("../DynamicTable/index.php");
				buildDynamicTable($userList);
				viewDynamicTableInHTML(false);
				
			?>
			
			<h1 align="center"> TOTAL Work Hour: 0 </h1>
			<p align="center">
				
				From :  <input type="date"> <br>
				To :  <input type="date"> <br>
				Search By:
				<select name = "searchType">
					<option value = "nothing">select</option>
					<option value = "name">ID</option>
					<option value = "name">user name</option>
					<option value = "ID">Purchased by</option>
				</select>
				<input name = "searchStr" value = ""/>
				<input type = "submit"/><br>
			</p>
			
			
			<br>
			<br>
			
			<h1 align="center"> Payment Info </h1>
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
				
				
				$userArr["ID"] = "1";
				$userArr["UserName"] = "JamilSiam";
				$userArr["Payment Amount"] = "100";
				$userArr["Bonus Amount"] = "100";
				$userArr["Payment Date"] = "11/12/2016 8:48:23 AM";
				$userList[0] = $userArr;
				
				
				$userArr["ID"] = "2";
				$userArr["UserName"] = "Ronalod";
				$userArr["Payment Amount"] = "100";
				$userArr["Bonus Amount"] = "100";
				$userArr["Payment Date"] = "11/12/2016 8:48:23 AM";
				$userList[1] = $userArr;
				
				$userArr["ID"] = "3";
				$userArr["UserName"] = "Masd";
				$userArr["Payment Amount"] = "100";
				$userArr["Bonus Amount"] = "100";
				$userArr["Payment Date"] = "11/12/2016 8:48:23 AM";
				$userList[2] = $userArr;
				
				//include("../DynamicTable/index.php");
				buildDynamicTable($userList);
				viewDynamicTableInHTML(false);
				
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

