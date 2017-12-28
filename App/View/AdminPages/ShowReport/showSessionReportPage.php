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
				
				$iCnt = 0;
				$userArr["ID"] = "1";
				$userArr["UserName"] = "JamilSiam";
				$userArr["Log in time"] = "11/12/2016 8:48:23 AM";
				$userArr["Log out time"] = "11/12/2016 10:48:23 AM";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["ID"] = "2";
				$userArr["UserName"] = "Ronalod";
				$userArr["Log in time"] = "11/12/2016 8:48:23 AM";
				$userArr["Log out time"] = "11/12/2016 10:48:23 AM";
				$userList[$iCnt++] = $userArr;
				
				$userArr["ID"] = "1";
				$userArr["UserName"] = "JamilSiam";
				$userArr["Log in time"] = "11/12/2016 8:48:23 AM";
				$userArr["Log out time"] = "11/12/2016 10:48:23 AM";
				$userList[$iCnt++] = $userArr;
				
				$userArr["ID"] = "3";
				$userArr["UserName"] = "Masd";
				$userArr["Log in time"] = "11/12/2016 8:48:23 AM";
				$userArr["Log out time"] = "11/12/2016 10:48:23 AM";
				$userList[$iCnt++] = $userArr;
				
				$userArr["ID"] = "1";
				$userArr["UserName"] = "JamilSiam";
				$userArr["Log in time"] = "1/1/2017 8:48:23 AM";
				$userArr["Log out time"] = "11/12/2017 10:48:23 AM";
				$userList[$iCnt++] = $userArr;
				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/DynamicTable/index.php");
				buildDynamicTable($userList);
				viewDynamicTableInHTML(false,false);
				
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


