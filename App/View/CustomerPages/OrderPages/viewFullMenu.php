<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>

<script src = "<?=hrefThis("resource","js/CustomerPages/OrderPages/addToCart.js")?>" ></script>
<script src = "<?=hrefThis("resource","js/calTotalImgInADir.js")?>" ></script>
<script src = "<?=hrefThis("resource","js/CustomerPages/OrderPages/nextPrevPage.js")?>" ></script>

		
	<h1>Food List</h1>
	
	<div id = "viewCartSpan" align="right" hidden>
		<img height = "25" src = "<?=hrefThis("resource","OtherPic/cart.png")?>" />
		<a href= "<?=hrefThis("customer","OrderPages/viewCartPage.php")?>" >
			<h3 id ="viewCart">View Cart</h3>
		</a>
		<p id = "cartDetails"></p>
	</div>
	
	<hr>
	<p align="center">
		Food Name: <input name = "searchStr" value = "" style="width: 50"/>
		| 
		Food Type:
		<select name = "searchType">
			<option value = "nothing">select</option>
			<option value = "name">Burger</option>
			<option value = "name">Pizza</option>
			<option value = "name">Thai Food</option>
		</select>
		| 
		Ingredients 
		<select name = "searchType">
			<option value = "nothing">select</option>
			<option value = "name">Beef</option>
			<option value = "name">Chicken</option>
			<option value = "name">Mushroom</option>
		</select>
		|
		Price Range:
		<input name = "searchStr" value = "0" style="width: 50"/>
		-
		<input name = "searchStr" value = "1000000" style="width: 50"/>
		| 
		Rating Range:
		<input name = "searchStr" value = "0" style="width: 50"/>
		-
		<input name = "searchStr" value = "5" style="width: 50"/>
		|
		<input type = "checkbox"/> Only Offers! |
		<input type = "submit"/>
		
		<br>
	</p>
	<hr>
	
	<?php	
		includeThis("database","allDBFunction.php");
		
		$insArr = array();
		
		$insArr["name"] = "'Beverage'";
		$res = insert($insArr,"catagory");
		var_dump($res);
		
		
		$foodTable = array();
		$foodTable = getFullTable("food");
		
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
			$userArr["Rating"] = "4.8"; /// get from other tables
			$userArr["Quantity"] = "0";
			$userList[$i] = $userArr;
		}
		
		includeThis("dynamicTable","index.php");
		buildDynamicTable($userList);
		viewDynamicTableinHTMLFromCustomer(true);
	?>
	<p align="right">
		<input type = "submit" value = "Add All To Cart"/>
	</p>
	<p align="center">
		<input type = "button" value = "previous page" onclick = "goToNextPage()"/>
		<input type = "button" value = "next page" onclick = "goToNextPage()"/>
		<br/>
	</p>
			
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>


