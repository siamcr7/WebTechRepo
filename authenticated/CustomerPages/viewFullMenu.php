<?php
	session_start();
	
?>

<script>
	var curPage = 0;
	var imgLoc = "/WebTechRepo/authenticated/Resources/FoodPic/";
	var mxPic = 6;
	
	function makeTheArrForPHP(st)
	{

		alert("boom");
	}
	
	function goToNext()
	{
		//alert("boom");
		curPage++;
		var imgRangeSt = curPage*3;
		
		if(imgRangeSt >= mxPic)curPage--;
		imgRangeSt = curPage*3;
		
		//document.cookie = "curPage"+"="+imgRangeSt;		
		document.cookie = "YOLO = 0 ; SOLO = 123 ; bolo = 123";
	}
	
	var viewCartArr = [];
	var viewCartArrCount = [];
	function tempViewCart()
	{
		var str = "";
		var len = viewCartArr.length;
		for(var i = 0;i<len;i++)
		{
			str += viewCartArr[i];
			str += " -> ";
			str += viewCartArrCount[i];
			str += ",";
			str += "\n";
		}
		alert(str);
		document.cookie = "saveCart = str";
	}
	
	function addToCart(foodItem)
	{
		var tempFoodItem = foodItem[0];
		for(var i = 1;i<foodItem.length;i++)
		{
			if(foodItem[i] >= 'A' && foodItem[i] <= 'Z')tempFoodItem += " ";
			tempFoodItem += foodItem[i];
		}
		foodItem = tempFoodItem;
		
		var len = viewCartArr.length;
		var found = false;
		for(var i = 0;i<len;i++)
		{
			if(viewCartArr[i] == foodItem)
			{
				viewCartArrCount[i]++;
				found = true;
				break;
			}
		}
		if(!found)
		{
			viewCartArr[len] = foodItem;
			viewCartArrCount[len] = 1;
			len++;
		}
		tempViewCart();
		document.getElementById("viewCart").style.display = "block";
		document.getElementById("viewCart").innerText = "View Cart(" + len + ")";
	}
	
	
</script>

<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include("header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1">
			<?php
				include("accountCol.php");
			?>
		</td>
		
		<td colspan="2" width = "500">
			<h1>Food List</h1>
			
			<a href="viewCart.php">
				<h3 id ="viewCart" align="right" hidden>View Cart</h3>
			</a>
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
				$imgLoc = "/WebTechRepo/authenticated/Resources/FoodPic/";
				
				$iCnt = 0; //$_COOKIE["curPage"];
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Choco Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userArr["Select"] = "";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Big Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userArr["Select"] = "";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Pizza Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userArr["Select"] = "";
				$userList[$iCnt++] = $userArr;
				
				
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Pizza Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userArr["Select"] = "";
				$userList[$iCnt++] = $userArr;
				
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Pizza Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userArr["Select"] = "";
				$userList[$iCnt++] = $userArr;
				
				include("../DynamicTable/index.php");
				buildDynamicTable($userList);
				viewDynamicTableinHTMLFromCustomer();
			?>
			<p align="right">
				<input type = "submit" value = "Add All To Cart"/>
			</p>
			<p align="center">
				<input type = "button" value = "previous page" onclick = "goToNext()"/>
				<input type = "button" value = "next page" onclick = "goToNext()"/>
				<br/>
			</p>
									
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include("footer.php");
			?>	
		</td>
	</tr>
		 
</table>


