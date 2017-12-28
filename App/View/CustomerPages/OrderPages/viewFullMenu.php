<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
	includeThis("database","allDBFunction.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>

<script src = "<?=hrefThis("resource","js/ajaxCall.js")?>" ></script>
<script src = "<?=hrefThis("resource","js/CustomerPages/OrderPages/addToCart.js")?>" ></script>
<script src = "<?=hrefThis("resource","js/calTotalImgInADir.js")?>" ></script>
<script src = "<?=hrefThis("resource","js/CustomerPages/OrderPages/nextPrevPage.js")?>" ></script>

		
	<h1>Food List</h1>
	
	<span id = "viewCartSpan" align="right" hidden>
		<img height = "25" src = "<?=hrefThis("resource","OtherPic/cart.png")?>" />
		<a href= "<?=hrefThis("customer","OrderPages/viewCartPage.php")?>" >
			<h3 id ="viewCart">View Cart</h3>
		</a>
		<p id = "cartDetails"></p>
	</span>
	
	<hr>
	
<form method = "POST" action = "<?=hrefThis("handler","searchFood.php");?>" >
	<p align="center">
		Food Name: <input name = "searchByName" value = "" style="width: 50"/>
		| 
		Food Type:
		<select name = "searchByCatagory">
			<option value = "">select</option>
			
			<?php
				$catagory = getFullTable("catagory");
				for($i=0;$i<count($catagory);$i++)
				{
					echo "<option value = {$catagory[$i]['id']}>{$catagory[$i]['name']}</option>";
				}
			?>
			
		</select>
		| 
		Ingredients 
		<select name = "searchByIngredients">
			<option value = "">select</option>
			<?php
				$ingredients = getFullTable("ingredients");
				for($i=0;$i<count($ingredients);$i++)
				{
					echo "<option value = {$ingredients[$i]['id']}>{$ingredients[$i]['name']}</option>";
				}
			?>
		</select>
		|
		Price Range:
		<input name = "searchByPriceLow" value = "0" style="width: 50"/>
		-
		<input name = "searchByPriceHigh" value = "1000000" style="width: 50"/>
		| 
		Rating Range:
		<input name = "searchByRatingLow" value = "0" style="width: 50"/>
		-
		<input name = "searchByRatingHigh" value = "5" style="width: 50"/>
		|
		
		<input type = "submit"/>
		
		<br>
	</p>
</form>

	<hr>
	
	<?php	
		
		$foodTable = array();
		$foodTable = getFullTable("food");
		
		if(isset($_SESSION["searchResult"]))
		{
			$foodTable = $_SESSION["searchResult"];
			unset($_SESSION["searchResult"]);
		}
		
		$imgLoc = hrefThis("resource","FoodPic/");
		$userList = array();
		for($i = 0;$i<count($foodTable);$i++)
		{
			$userArr = array();
			$userArr["id"] = $foodTable[$i]["id"];
			$userArr["Picture"] = $imgLoc.$foodTable[$i]["id"].".png";
			$userArr["Food Name"] = $foodTable[$i]["name"];
			$userArr["Food Type"] = getInfoByID($foodTable[$i]["catagoryId"] , "catagory","name");
			$userArr["Ingredients"] = getArrayOfInfoFromAgg($foodTable[$i]["id"] , "food","ingredients");
			$userArr["Price (TK)"] = $foodTable[$i]["price"];
			$userArr["Rating"] = calCAvgRating($foodTable[$i]["id"]); /// get from other tables
			$userArr["Quantity"] = "0";
			$userList[$i] = $userArr;
		}
		
		includeThis("dynamicTable","index.php");
		buildDynamicTable($userList);
		viewDynamicTableinHTMLFromCustomer(true);
	?>
	<p align="right" hidden>
		<input type = "submit" value = "Add All To Cart"/>
	</p>
	<p align="center" hidden>
		<input type = "button" value = "previous page" onclick = "goToNextPage()"/>
		<input type = "button" value = "next page" onclick = "goToNextPage()"/>
		<br/>
	</p>
			
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>


