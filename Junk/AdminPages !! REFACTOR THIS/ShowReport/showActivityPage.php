<?php
	session_start();
	/// page er basic structure kintu thikh thakbe! 

	
	
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
	
	function dynamicTable()
	{
		global $iCnt;
		global $userList;
		if(true)
		{
	?>

		<table style=width:100% , border = 1>
			<tr>
			<th >NAME</th>
			<th >EMAIL</th>
			</tr>
			
	<?php 
		//} /// ekdom last e
			for($i=0;$i<$iCnt;$i++)
			{
	?>

				<tr>
				<td ><?=$userList[$i]["name"];?></td>
				<td > <?=$userList[$i]["email"];?></td>
				</tr>
				
	<?php 			
			}
	?>
			  
		</table>
		
	<?php
		}
	?>
<?php
	}
	//dynamicTable();
	buildDynamicTable($userList);
	viewDynamicTableInPHP();
?>	
	


