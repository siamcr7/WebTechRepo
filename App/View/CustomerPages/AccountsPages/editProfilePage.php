<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>

<form method = "POST" action = "<?=hrefThis("handler","editProfile.php");?>" >
	<fieldset>
		<legend>Edit Profile</legend>
		<table style="width:100%">
			
			<tr>
				<td>User ID : </td>
				<td>
					<input name = "id" value = "<?=$_SESSION["curUser"]["id"]?>" readonly/>
				</td>
				<td> 
				</td>
			</tr>
			
			<tr>
				<td>Name :</td>
				<td>
					<input name = "name" value = "<?=$_SESSION["curUser"]["name"]?>"/>
				</td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["name"]))
							echo $_SESSION["msg"]["name"];
					?> 
				</td>
			</tr>
			
			<tr>
				<td>Email : </td>
				<td>
					<input name = "email" value = "<?=$_SESSION["curUser"]["email"]?>"/>
				</td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["email"]))
							echo $_SESSION["msg"]["email"];
					?> 
				</td>
			</tr>

			<tr>
				<td>Address : </td>
				<td>
					<input name = "address" value = "<?=$_SESSION["curUser"]["address"]?>"/>
				</td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["address"]))
							echo $_SESSION["msg"]["address"];
					?> 
				</td>
			</tr>
			
			<tr>
				<td>Phone : </td>
				<td>
					<input name = "phoneNo" value = "<?=$_SESSION["curUser"]["phoneNo"]?>"/>
				</td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["phoneNo"]))
							echo $_SESSION["msg"]["phoneNo"];
					?> 
				</td>
			</tr>
			
			<tr>
				<td>Location : </td>
				<td>
					<select name = "location">
						<option value = "nothing" >Select</option>
						<option value = "dhanmondi" <?php if($_SESSION["curUser"]["location"]== "dhanmondi")echo "selected" ?> >Dhanmondi</option>
						
						<option value = "gulshan" <?php if($_SESSION["curUser"]["location"]== "gulshan")echo "selected" ?> >Gulshan</option>
						
						<option value = "banani" <?php if($_SESSION["curUser"]["location"]== "banani")echo "selected" ?> >Banani</option>
					</select>
				</td>
				<td> 
					<?php 
						if(!empty($_SESSION["msg"]["location"]))
							echo $_SESSION["msg"]["location"];
						unset($_SESSION["msg"]);
					?> 
				</td>
			</tr>
			
			
			
			<tr>
				<td>UserName : </td>
				<td>
					<input name = "userName" value = "<?=$_SESSION["curUser"]["userName"]?>" readonly/>
				</td>
				<td> 
				</td>
			</tr>

		</table>
		<input type = "submit"/><br>
		

	</fieldset>
</form>
			
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>

