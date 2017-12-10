

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
	
	$_SESSION["setNextEditPage"] = "editProfilePage.php";
	$_SESSION["setNextViewPage"] = "viewProfilePage.php";
	function setNextEditPage($str)
	{
		$_SESSION["setNextEditPage"] = $str;
	}
	function setNextViewPage($str)
	{
		$_SESSION["setNextViewPage"] = $str;
	}
	
	
	function viewDynamicTableInHTML($withEditOption) /// admin side
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
						<td> <a href=<?=$_SESSION["setNextEditPage"];?>>Edit</a> </td>
						<td> <a href=<?=$_SESSION["setNextViewPage"];?>>View</a> </td>
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
	
	
	function viewDynamicTableinHTMLFromCustomer()
	{
		if(true)
		{
?>
			<table style=width:100% , border = "1">
			
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
					$saveFoodName = "";
					foreach($curItem as $key => $value)
					{
						if($key == "Food Name")
						{
							$saveFoodName = "";
							for($i=0;$i<strlen($value);$i++)
							{
								if($value[$i] != " ")$saveFoodName .= $value[$i];
							}
						}
						
						if($key == "Picture")
						{
				?>
							<td ><img src= <?=$value;?> alt="No Picture" height="250" width="250"></td>
				<?php
						}
						else if($key == "Quantity")
						{
				?>
							<td>
								<input style="width: 50" type = "number" value = <?=$value;?> />
							</td>
				<?php
						}
						else if($key == "Select")
						{
				?>
							<td>
								<input name = "name" type = "checkbox" <?=$value;?> />
							</td>
				<?php
						}
						else /// normal
						{
				?>
							<td ><?=$value;?></td>
				<?php
						}
					}
					if(!$firstRow) //AWESOMENESS HAPPENED!
					{
				?>
						<!--
						<td>
						<input name = <?=$saveFoodName;?> type = "button" value = "Add To Cart" onClick=
						"addToCart(this.name)" />
						</td>
						-->
						
						
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
		
	

