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
			<h1>Food List</h1>
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
				$userArr["Food ID"] = "1";
				$userArr["Food Name"] = "Jamil Burger";
				$userArr["Catagory ID"] = "2";
				$userArr["Food Status"] = "active";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Food ID"] = "12";
				$userArr["Food Name"] = "Pizza Burger";
				$userArr["Catagory ID"] = "4";
				$userArr["Food Status"] = "active";;
				$userList[$iCnt++] = $userArr;

				
				
				include("../DynamicTable/index.php");
				buildDynamicTable($userList);
				setNextEditPage("editFoodTable.php");
				viewDynamicTableInHTML(true);
			?>
			
			<p align="center">
				Search By:
				<select name = "searchType">
					<option value = "nothing">select</option>
					<option value = "name">name</option>
					<option value = "ID">ID</option>
				</select>
				<input name = "searchStr" value = ""/>
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

