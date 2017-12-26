<?php
	includeThis("database","food/view.php");
	$rowCount = 0;
	$ret = array();
	view();
	$foodTable = array();
	$foodTable = $ret;
		
		
	$imgLoc = hrefThis("resource","FoodPic/");
	$userList = array();
		
	for($i = 0;$i<$rowCount;$i++)
	{
		$userArr = array();
		$userArr["Picture"] = $imgLoc.$foodTable[$i]["id"].".png";
		$userArr["Food Name"] = $foodTable[$i]["name"];
		$userArr["Food Type"] = $foodTable[$i]["catagoryId"];
		$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
		$userArr["Price (TK)"] = $foodTable[$i]["price"];
		$userArr["Rating"] = "4.8";
		$userArr["Quantity"] = "0";
		$userList[$i] = $userArr;
	}
?>