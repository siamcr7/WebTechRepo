<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
	includeThis("database","allDBFunction.php");
	session_start();
?>

<?php
	$foodName = $_REQUEST["searchByName"]; /// if blank, ignore
	$catagoryId = $_REQUEST["searchByCatagory"]; /// if blank, ignore
	$ingredientsId = $_REQUEST["searchByIngredients"];/// if blank, ignore
	$priceLow = $_REQUEST["searchByPriceLow"]; /// if blank, ignore
	$priceHigh = $_REQUEST["searchByPriceHigh"];/// if blank, ignore
	
	$ratingLow = $_REQUEST["searchByRatingLow"]; /// need other table
	$ratingHigh = $_REQUEST["searchByRatingHigh"]; /// need other table
	
	
	
	$food = getFullTable("food");
	$foodIngredients = getFullTable("food_Ingredients");
	
	/// foodName
	if($foodName != "")
	{
		$food = search("name",$foodName,"food");
	}
	
	/// catagory
	if($catagoryId != "")
	{
		$tempRes = array();$iCnt = 0;
		for($i=0;$i<count($food);$i++)
		{
			if($catagoryId != "" && $food[$i]["catagoryId"] == $catagoryId)
				$tempRes[$iCnt++] = $food[$i];
		}
		$food = array();$food = $tempRes;
	}
	
	
	/// price
	if($priceLow != "" && $priceHigh != "")
	{
		$tempRes = array();$iCnt = 0;
		for($i=0;$i<count($food);$i++)
		{
			if($priceLow == "" || $priceHigh == "")continue;
			if( (int)($food[$i]["price"]) >= (int)($priceLow) && (int)($food[$i]["price"]) <= (int)($priceHigh) )$tempRes[$iCnt++] = $food[$i];
		}
		$food = array();$food = $tempRes;
	}
	
	
	/// ingredients
	if($ingredientsId != "")
	{
		$tempRes = array();$iCnt = 0;
		for($i=0;$i<count($food);$i++)
		{
			if($ingredientsId == "")continue;
			$paisi = false;
			for($j=0;$j<count($foodIngredients);$j++)
			{
				if($foodIngredients[$j]["foodId"] != $food[$i]["id"])continue;
				if($foodIngredients[$j]["ingredientsId"] == $ingredientsId)$paisi = true;
			}
			if($paisi)$tempRes[$iCnt++] = $food[$i];
		}
		$food = array();$food = $tempRes;
	}
	
	/// rating
	if($ratingLow != "" && $ratingHigh != "")
	{
		$ratingLow = (float)$ratingLow;
		$ratingHigh = (float)$ratingHigh;
		
		$tempRes = array();$iCnt = 0;
		for($i=0;$i<count($food);$i++)
		{	
			$curRating = (float)calCAvgRating($food[$i]["id"]);
			
			if($curRating >= $ratingLow && $curRating <= $ratingHigh)
				$tempRes[$iCnt++] = $food[$i];
		}
		$food = array();$food = $tempRes;
	}
	
	
	unset($_SESSION["searchResult"]);
	$_SESSION["searchResult"] = $food;
	
	header("location:".hrefThis("customer","OrderPages/viewFullMenu.php"));
	
	
	//var_dump($food);
?>