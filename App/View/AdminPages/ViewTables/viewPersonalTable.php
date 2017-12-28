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
		
			<h1>Personal List</h1>
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
				$userArr["User ID"] = "1";
				$userArr["Full Name"] = "Jamil Siam";
				$userArr["Email"] = "siam_cr7@yahoo.com";
				$userArr["User Name"] = "siam_cr7";
				$userArr["Role"] = "admin";
				$userArr["Status"] = "active";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["User ID"] = "2";
				$userArr["Full Name"] = "XYZ";
				$userArr["Email"] = "XYZ@XYZ.com";
				$userArr["User Name"] = "siam_cr7";
				$userArr["Role"] = "customer";
				$userArr["Status"] = "pending";
				$userList[$iCnt++] = $userArr;

				
				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/DynamicTable/index.php");
				buildDynamicTable($userList);
				setNextEditPage("/WebTechRepo/App/View/AdminPages/EditTables/editPersonalTable.php");
				setNextViewPage("editPersonalTable.php");
				viewDynamicTableInHTML(true,true);*/
			?>
			
			<?php
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			$result=mysqli_query($conn,"SELECT * FROM user");
			
			?>
			
			<table border="1" width="100%">

		<tr>
			<th>Name</th>
			<th>Role</th>
			<th>Status</th>
			<th colspan="2">action</th>
			</tr>

		<?php while($row=mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['role'];?></td>
			<td><?php echo $row['status'];?></td>
			
			<td>
				<a href="editPersonalTable.php?id=<?php echo $row['id'];?>">Edit</a>
			</td>

			<td>
				<a href="#">Delete</a>
			</td>
		</tr>
		<?php }?>

	</table>
			
			
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
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/AdminPages/BasicStructure/footer.php");
			?>	
		</td>
	</tr>
		 
</table>


