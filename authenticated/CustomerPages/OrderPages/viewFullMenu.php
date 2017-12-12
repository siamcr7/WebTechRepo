<?php
	include("test.php");
?>

<script>
	
	alert(calTotalImg());
	
	var curPage = 0;
	var imgLoc = "/WebTechRepo/authenticated/Resources/FoodPic/";
	var mxPic = 6;
	
	function makeTheArrForPHP(st)
	{
		alert("boom");
	}
	
	function goToNextPage()
	{
		//alert("boom");
		curPage++;
		var imgRangeSt = curPage*3;
		
		if(imgRangeSt >= mxPic)curPage--;
		imgRangeSt = curPage*3;
		
		//document.cookie = "curPage"+"="+imgRangeSt;		
		//document.cookie = "YOLO = 0 ; SOLO = 123 ; bolo = 123";
	}
	
	/// adding to cart
	var viewCartArr = []; /// food names
	var viewCartArrCount = []; /// count of the foods
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
		//document.cookie = "saveCart = str";
	}
	
	function getID(element) /// the id will be at the end of element.id
	{
		var fullID = element.id; 
		var tmp = "";
		for(var i = fullID.length-1; i>=0;i--)
		{
			if(fullID[i] >= '0' && fullID[i] <= '9')tmp += fullID[i];
			else break;
		}
		
		var getID = "";
		for(var i = tmp.length-1; i>=0;i--)getID += tmp[i];
		
		return (parseInt(getID));
	}
	
	function getValue(element,type)/// given an element and type, find the value of that type;
	{
		var curID = getID(element);
		//alert(document.getElementById(type+curID).value);
		return (document.getElementById(type+curID).value);
	}
	
	function addToCart(foodItem,element)
	{
		
		var tempFoodItem = foodItem[0];
		for(var i = 1;i<foodItem.length;i++)//Add the space
		{
			if(foodItem[i] >= 'A' && foodItem[i] <= 'Z')tempFoodItem += " ";
			tempFoodItem += foodItem[i];
		}
		foodItem = tempFoodItem;
		
		var foodQuantity = parseInt( getValue(element,"foodQuantity") );
		if(foodQuantity < 0)foodQuantity = 0;
		else if(foodQuantity == 0)foodQuantity = 1;
		
		
		var len = viewCartArr.length;
		var found = false;
		var totOrder = 0;
		for(var i = 0;i<len;i++) /// check if it exists
		{
			if(viewCartArr[i] == foodItem)
			{
				viewCartArrCount[i] += foodQuantity;
				found = true;
				break;
			}
		}
		if(!found)
		{
			viewCartArr[len] = foodItem;
			viewCartArrCount[len] = foodQuantity;
			len++;
		}
		
		for(var i = 0;i<len;i++)totOrder += viewCartArrCount[i];
		
		//tempViewCart();
		if(totOrder > 0)document.getElementById("viewCartSpan").style.display = "block";
		document.getElementById("viewCart").innerText = "View Cart(" + totOrder + ")";
	}
	
</script>

<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/BasicStructure/header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1" width = "200" valign="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
			<h1>Food List</h1>
			
			<span id = "viewCartSpan" align="right" hidden>
				<img height = "25" src = "/WebTechRepo/authenticated/Resources/OtherPic/cart.png"/>
				<a id ="viewCart"  href="/WebTechRepo/authenticated/CustomerPages/OrderPages/viewCartPage.php">
					<h3>View Cart</h3>
				</a>
			</span>
			
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
				//$userArr["ID"] = $iCnt+1; // primary key
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Choco Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userList[$iCnt++] = $userArr;
				
				
				//$userArr["ID"] = $iCnt+1; // primary key
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Big Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userList[$iCnt++] = $userArr;
				
				
				//$userArr["ID"] = $iCnt+1; // primary key
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Pizza Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userList[$iCnt++] = $userArr;
				
				
				//$userArr["ID"] = $iCnt+1; // primary key
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Bread Burger";
				$userArr["Food Type"] = "Burger";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userList[$iCnt++] = $userArr;
				
				
				//$userArr["ID"] = $iCnt+1; // primary key
				$userArr["Picture"] = $imgLoc."{$iCnt}.png";
				$userArr["Food Name"] = "Round Pizza";
				$userArr["Food Type"] = "Pizza";
				$userArr["Ingredients"] = "Bread, Beef, Jellapino, Cheese";
				$userArr["Price (TK)"] = "280";
				$userArr["Rating"] = "4.8";
				$userArr["Quantity"] = "0";
				$userList[$iCnt++] = $userArr;
				
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/DynamicTable/index.php");
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
			
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/BasicStructure/footer.php");
			?>	
		</td>
	</tr>
		 
</table>


