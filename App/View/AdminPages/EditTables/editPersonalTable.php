<script>
function ajaxCall(phpDir,requestVar,requestVal) // ajax call funtion
{
	var req = new XMLHttpRequest();
	req.open("GET",phpDir+"?"+requestVar+"="+requestVal,false);
	req.send();
	return req.responseText;
}

function ajaxCall2(phpDir) // ajax call funtion
{
	var req = new XMLHttpRequest();
	req.open("GET",phpDir,false);
	req.send();
	return req.responseText;
}

function clickMe(element)
{
	var id = document.getElementById("idName").value;
	
	var phpDir = "";
	phpDir += "/WebTechRepo/App/View/AdminPages/EditTables/editPersonalTable.php?id=";
	phpDir += id;
	document.location = phpDir;
}

</script>

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
	
	<?php
		$_SESSION["ret"] = array();
		$_SESSION["ret"]["id"] = "";
		$_SESSION["ret"]["name"] = "";
		$_SESSION["ret"]["userName"] = "";
		$_SESSION["ret"]["email"] = "";
		$_SESSION["ret"]["address"] = "";
		$_SESSION["ret"]["location"] = "";
		$_SESSION["ret"]["role"] = "";
		$_SESSION["ret"]["password"] = "";
		$_SESSION["ret"]["status"] = "";
		if( !empty($_REQUEST["id"]) )
		{
			$id = $_REQUEST["id"];
			
			include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
			
			includeThis("database","allDBFunction.php");
			
			$ret = getRowByID($id,"user");
			
			$_SESSION["ret"] = $ret;
		}
		if( $_SESSION["ret"] == "" || empty($_SESSION["ret"]))
		{
			$_SESSION["ret"] = array();
			$_SESSION["ret"]["id"] = "";
			$_SESSION["ret"]["name"] = "";
			$_SESSION["ret"]["userName"] = "";
			$_SESSION["ret"]["email"] = "";
			$_SESSION["ret"]["address"] = "";
			$_SESSION["ret"]["location"] = "";
			$_SESSION["ret"]["role"] = "";
			$_SESSION["ret"]["password"] = "";
			$_SESSION["ret"]["status"] = "";
		}
	?>
	
		  
	<tr>
		<td colspan="1" width = "200" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/App/View/AdminPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
			<fieldset>
				<legend><h1>Personals Edit Page</h1></legend>
				
				
				
			<form method="POST" action="/WebTechRepo/App/View/AdminPages/EditTables/handle/personal_handle.php">
				<input name = "editType" type = "radio" value = "add"/>Add
				<input name = "editType" type = "radio" value = "update"/>Update
				
				<table style="width:100%">
					<tr>
						<td>User ID :</td>
						<td>
							<input id="idName" name = "id"  type = "number" min = "0" value = "<?=$_SESSION["ret"]["id"]?>" />
							<a href = ""></a>
							<input type = "button" value = "load" onclick = "clickMe(this)"/>
						</td>
						
					</tr>
					
					<tr>
						<td>Full Name :</td>
						<td>
						<input name = "name" value = "<?=$_SESSION["ret"]["name"]?>"/>
						</td>
					</tr>
					
					<tr>
						<td>Email :</td>
						<td>
						<input type="email" name ="email" value = "<?=$_SESSION["ret"]["email"]?>"/>
						</td>
					</tr>
					
					<tr>
						<td>UserName :</td>
						<td>
						<input name = "userName" value = "<?=$_SESSION["ret"]["userName"]?>"/>
						</td>
					</tr>
					
					<tr>
						<td>Password :</td>
						<td>
						<input name = "pass"  type = "password" value = "<?=$_SESSION["ret"]["password"]?>"/>
						</td>
					</tr>
					
					<tr>
						<td>Status :</td>
						<td>
							<select name = "status">
								<option value = "nothing">select</option>
								
								<option value = "active" <?php if($_SESSION["ret"]["status"] == "active")echo "selected" ?> >Active</option>
								
								<option value = "pending" <?php if($_SESSION["ret"]["status"] == "pending")echo "selected" ?> >Pending</option>
								
								<option value = "disable" <?php if($_SESSION["ret"]["status"] == "disable")echo "selected" ?> >Disable</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Role :</td>
						<td>
							<select name = "role">
								<option value = "nothing">select</option>
								<option value = "admin" <?php if($_SESSION["ret"]["role"] == "admin")echo "selected" ?> >Admin</option>
								
								<option value = "employee" <?php if($_SESSION["ret"]["role"] == "employee")echo "selected" ?> >Employee</option>
								
								<option value = "customer" <?php if($_SESSION["ret"]["role"] == "customer")echo "selected" ?> >Customer</option>
								
								<option value = "delevery" <?php if($_SESSION["ret"]["role"] == "delevery")echo "selected" ?> >Delevery Man</option>
							</select>
						</td>
					</tr>
					
				</table>
				<input type = "submit" name="submit"/><br>
				</form>
			</fieldset>
			
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


