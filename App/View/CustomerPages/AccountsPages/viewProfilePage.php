<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>

<fieldset>
	<legend>Profile</legend>
	<table style="width:100%" >
		
		<tr>
			<td>User ID : </td>
			<td>
				<?=$_SESSION["curUser"]["id"]?>
			</td>
		</tr>
		
		
		<tr>
			<td>Name : </td>
			<td>
				<?=$_SESSION["curUser"]["name"]?>
			</td>
		</tr>
		
		
		<tr>
			<td>Email : </td>
			<td>
				<?=$_SESSION["curUser"]["email"]?>
			</td>
		</tr>
		
		<tr>
			<td>User Name : </td>
			<td>
				<?=$_SESSION["curUser"]["userName"]?>
			</td>
		</tr>
		
		<tr>
			<td>Address : </td>
			<td>
				<?=$_SESSION["curUser"]["address"]?>
			</td>
		</tr>
		
		<tr>
			<td>Location : </td>
			<td>
				<?=$_SESSION["curUser"]["location"]?>
			</td>
		</tr>
		
		<tr>
			<td>Phone No : </td>
			<td>
				<?=$_SESSION["curUser"]["phoneNo"]?>
			</td>
		</tr>
		
		<tr>
			<td>User Since : </td>
			<td>
			<?php
				date_default_timezone_set("Asia/Dhaka");
				$curTime =  (string) date('Y-m-d h:i:s', time());
				$datetime1 = date_create_from_format('Y-m-d h:i:s',$_SESSION["curUser"]["regDate"]);
				$datetime2 = date_create_from_format('Y-m-d h:i:s',$curTime);
				$interval = $datetime1->diff($datetime2);
				echo $interval->format('%Y Years %M Months %D Days %H Hours %I Minutes %S Seconds');
			?>
			</td>
		</tr>
		
	</table>
	<a href = "<?=hrefThis("customer","AccountsPages/editProfilePage.php")?>" align="right">Edit Profile</a>
	<br>
</fieldset>

<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>
			


