<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>
<?php
	if(!empty($_REQUEST["foodId"]))
	{
		if(session_id() == "")session_start();
		$foodId = $_REQUEST["foodId"];
		$foodItem = getRowByID($foodId,"food");
		
		$imgLoc = hrefThis("resource","FoodPic/");
		$name = $foodItem["name"];
		$catagory = getInfoByID($foodItem["catagoryId"] , "catagory","name");
		$ingredients = getArrayOfInfoFromAgg($foodId , "food","ingredients");
		$price = $foodItem["price"];
		$rating = calCAvgRating($foodId);
		
		$myRating = getInfoByID2("foodId",$foodId,"customerId",$_SESSION["curUser"]["id"],"rating","rating");
	
	}
?>

<form method = "POST" action = "<?=hrefThis("handler","updateRating.php")?>" >
	<div align = "center">
		<img src= <?=$imgLoc."{$foodId}.png";?> alt="No Picture" height="150"><br>
		<h1><?=$name?></h1> <br>
		<h2>Type : <?=$catagory?></h2><br>
		<h2>Ingredients : <?=$ingredients?></h2><br>
		<h2>Price : <?=$price?></h2><br>
		<h2>Current Rating : <?=$rating?></h2>
		
		<fieldset>
			<input name ="foodId" value = <?=$foodId?> hidden />
			<legend><h2>My Rating:</h2></legend>
			<select name = "rating">
				<option value = "0">select</option>
				<option value = "1" <?php if($myRating == 1)echo"selected" ?> >1 Star</option>
				<option value = "2" <?php if($myRating == 2)echo"selected" ?> >2 Star</option>
				<option value = "3" <?php if($myRating == 3)echo"selected" ?> >3 Star</option>
				<option value = "4" <?php if($myRating == 4)echo"selected" ?> >4 Star</option>
				<option value = "5" <?php if($myRating == 5)echo"selected" ?> >5 Star</option>
			</select>

			<input type = "submit" value = "Update Rating" />
		</fieldset>
	</div>
</form>

	
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>


