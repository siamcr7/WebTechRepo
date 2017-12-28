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
		
			<h1>Sales List</h1>
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
				$userArr["Sales ID"] = "1";
				$userArr["Csutomer Order ID"] = "1";
				$userArr["Employee ID"] = "2";
				$userArr["Delivery Man ID"] = "3";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Sales ID"] = "2";
				$userArr["Csutomer Order ID"] = "33";
				$userArr["Employee ID"] = "22";
				$userArr["Delivery Man ID"] = "31";
				$userList[$iCnt++] = $userArr;

				
				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/DynamicTable/index.php");
				buildDynamicTable($userList);
				setNextEditPage("/WebTechRepo/App/View/AdminPages/EditTables/editSalesTable.php");
				setNextViewPage("editSalesTable.php");
				viewDynamicTableInHTML(true,true);
				
				*/
			?>
			
			<?php
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			$result=mysqli_query($conn,"SELECT * FROM sales");
			
			?>
	<table border="1" width="100%">

		<tr>
			<th>Customer order id</th>
			<th>Deliveryman id</th>
			
			<th colspan="2">action</th>
			</tr>

		<?php while($row=mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['customer_order_id'];?></td>
			<td><?php echo $row['deliveryman_id'];?></td>
			
			<td>
				<a href="deleteSalesTable.php?del=<?php echo $row['id'];?>">Delete</a>
			</td>
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


