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
	
	
	function viewDynamicTableInHTML($withEditOption,$withViewOption) /// admin side
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
					if(!$firstRow)
					{
						if($withEditOption)
						{
				?>
						
							<td> <a href=<?=$_SESSION["setNextEditPage"];?>>Edit</a> </td>
				<?php
						}
						if($withViewOption)
						{
				?>	
						<td> <a href=<?=$_SESSION["setNextViewPage"];?>>View</a> </td>
				<?php
						}
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
	
	
	function viewDynamicTableinHTMLFromCustomer($addToCart = false)
	{
		if(true)
		{
?>
			<table style=width:100% , border = "1">
			
			<?php
				$curId = 0;
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
							if($key == "id")continue;
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
					//$curId++;
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
						
						if($key == "id")$curId = $value;
						else if($key == "Picture")
						{
				?>
							<td align = "center"><img src= <?=$value;?> alt="No Picture" height="150"></td>
				<?php
						}
						else if($key == "Quantity")
						{
				?>
							<td>
								<input id = "foodQuantity<?=$curId;?>" style="width: 50" type = "number" value = <?=$value;?> />
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
						else /// normal text
						{
				?>
							<td ><?=$value;?></td>
				<?php
						}
					}
					if($addToCart) //AWESOMENESS HAPPENED!
					{
				?>
						
						<td>
							<input id = "addToCart<?=$curId;?>" name = <?=$saveFoodName;?> type = "button" value = "Add To Cart" onClick = "addToCart(this.name,this)" />
						</td>
						
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
	
	function viewVerticalTable2Col()
	{
		if(true)
		{
?>
			<table style=width:100% , border = 1>
			
			<?php
				foreach($_SESSION["dynamicTable"] as $curItem)
				{
					foreach($curItem as $key => $value)
					{
				?>
						</tr>
							<td ><b> <?=$key;?> </b></td>
							<td ><?=$value;?></td>
						<tr>
				<?php
					}		
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
		
	


