<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/AdminPages/BasicStructure/header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1" width = "200" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/AdminPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
			<h1>Food Ingredients List</h1>
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
				
				
				$iCnt = 0;
				$userArr["Ingredients ID"] = "1";
				$userArr["Ingredients Name"] = "Beef";
				$userArr["Vendor ID"] = "2";
				$userArr["Quantity Remaining(KG)"] = "10";
				$userArr["Status"] = "active";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Ingredients ID"] = "2";
				$userArr["Ingredients Name"] = "Mushroom";
				$userArr["Vendor ID"] = "1";
				$userArr["Quantity Remaining(KG)"] = "1";
				$userArr["Status"] = "active";
				$userList[$iCnt++] = $userArr;

				
				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/DynamicTable/index.php");
				buildDynamicTable($userList);
				setNextEditPage("/WebTechRepo/App/View/AdminPages/EditTables/editIngredientsTable.php");
				setNextViewPage("editIngredientsTable.php");
				viewDynamicTableInHTML(true,true);
				*/
			?>
			
			<?php
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			$result=mysqli_query($conn,"SELECT * FROM food_ingredients");
			
			?>
			
			<table border="1" width="100%">

		<tr>
			<th>Food Id</th>
			<th>Ingredients Id</th>
			
			</tr>

		<?php while($row=mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['foodId'];?></td>
			<td><?php echo $row['ingredientsId'];?></td>
			
		</tr>
		<?php }?>

	</table>
			
			
			
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/AdminPages/BasicStructure/footer.php");
			?>	
		</td>
	</tr>
		 
</table>


