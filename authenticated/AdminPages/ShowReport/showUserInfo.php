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
		<td colspan="1" width = "200" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/AdminPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
			<?php
				/*
				Make the dynamic table more dynamic so that:
				we can print any colomb name as we wish by giving in the first value.
				Also find a way to print the specific col value only. one way is to build
				another arr and send it. For now using only the static values to show.
				
				include("../DynamicTable/index.php");
				buildDynamicTable($_SESSION["userList"]);
				viewDynamicTableInHTML(true);
				*/
				
				$userArr["Name"] = "Jamil Siam";
				$userArr["Email"] = "siam_cr7@yahoo.com";
				$userArr["User Name"] = "siam_cr7";
				$userList[0] = $userArr;
				
				
				$userArr["Name"] = "John Doe";
				$userArr["Email"] = "siam@yahoo.com";
				$userArr["User Name"] = "cr7";
				$userList[1] = $userArr;
				
				$userArr["Name"] = "Amit";
				$userArr["Email"] = "Amit@yahoo.com";
				$userArr["User Name"] = "amt";
				$userList[2] = $userArr;
				
				include($_SERVER['DOCUMENT_ROOT']."WebTechRepo/authenticated/DynamicTable/index.php");
				buildDynamicTable($userList);
				//viewDynamicTableInHTML(true);
				
			?>
			
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


