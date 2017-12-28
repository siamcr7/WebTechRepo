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
		
			<h1>Catagory List</h1>
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
				$userArr["Catagory ID"] = "1";
				$userArr["Catagory Name"] = "Burger";
				$userArr["Status"] = "active";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Catagory ID"] = "2";
				$userArr["Catagory Name"] = "Pizza";
				$userArr["Status"] = "active";
				$userList[$iCnt++] = $userArr;

				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/DynamicTable/index.php");
				buildDynamicTable($userList);
				setNextEditPage("/WebTechRepo/App/View/AdminPages/EditTables/editCatagoryTable.php");
				setNextViewPage("editCatagoryTable.php");
				viewDynamicTableInHTML(true,true);
				
				*/ 
			?>
			
			<?php
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			$result=mysqli_query($conn,"SELECT * FROM catagory");
			
			?>
			
			<table border="1" width="100%">

		<tr>
			<th>Id</th>
			<th>Name</th>
			<th colspan="2">action</th>
			</tr>

		<?php while($row=mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['name'];?></td>
			
			<td>
				<a href="#">Edit</a>
			</td>

			<td>
				<a href="#">Delete</a>
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


