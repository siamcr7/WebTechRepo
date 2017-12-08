
<?php
	//session_start();
	
	/*
	How it works:
	<?php if(condition){ ?>
     <!-- HTML here -->
	<?php } ?>
	*/
	
	/*
	/// some temp data
	$iCnt = 0;
	$user["name"] = "abc";
	$user["email"] = "abc@abc";
	$userList[$iCnt++] = $user;
	
	$user["name"] = "anda";
	$user["email"] = "anda@abc";
	$userList[$iCnt++] = $user;
	
	$user["name"] = "andapanda";
	$user["email"] = "andddasda@abc";
	$userList[$iCnt++] = $user;
	*/
	
	$_SESSION["dynamicTable"] = array();
	function buildDynamicTable($givenArr)
	{
		$_SESSION["dynamicTable"] = $givenArr;
	}
	
	function viewDynamicTableInPHP()
	{
		foreach($_SESSION["dynamicTable"] as $curItem)
		{
			foreach($curItem as $key => $value)
			{
				echo "{$key} : {$value} <br>";
			}
			echo "<br>";
		}
	}
	
	
	
	function viewDynamicTableInHTML($withEditOption)
	{
		if(true)
		{
?>
			<table style=width:100% , border = 1>
			
			<?php
				$firstRow = true;
				foreach($_SESSION["dynamicTable"] as $curItem)
				{
			?>
					
				<?php
					if($firstRow)
					{
				?>
						<tr>
				<?php
						foreach($curItem as $key => $value)
						{
				?>
							<th ><?=$key;?></th>
				<?php		
						}
				?>
						</tr>
				<?php
					}
					$firstRow = false;
				?>
					<tr>
				<?php
					foreach($curItem as $key => $value)
					{
				?>
						<td ><?=$value;?></td>
				<?php
					}
					if(!$firstRow && $withEditOption)
					{
				?>
						<td> <a href="editProfilePage.php">Edit</a> </td>
						<td> <a href="viewProfilePage.php">View</a> </td>
				<?php
					}
				?>
					</tr>
			<?php
				}
			?>
		
			</table>
			
<?php
		}
	}
	
	/*
	buildDynamicTable($userList);
	viewDynamicTableInHTML();
	*/
?>
		
	


