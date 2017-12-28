function ajaxCall(phpDir,requestVar,requestVal) // ajax call funtion
{
	var req = new XMLHttpRequest();
	req.open("GET",phpDir+"?"+requestVar+"="+requestVal,false);
	req.send();
	return req.responseText;
}

function ajaxCall2(phpDir) // ajax call funtion
{
	var req = new XMLHttpRequest();
	req.open("GET",phpDir,false);
	req.send();
	return req.responseText;
}

// adding to cart
var viewCartArr = []; // food names
var viewCartArrCount = []; // count of the foods
function tempViewCart()
{
	var str = "";
	var len = viewCartArr.length;
	for(var i = 0;i<len;i++)
	{
		str += viewCartArr[i];
		str += " -> ";
		str += viewCartArrCount[i];
		//str += ",";
		str += "\n";
	}
	//alert(str);
	// to show the details uncomment below line
	document.getElementById("cartDetails").innerText = str;
	//document.cookie = "saveCart = str";
}

function getID(element) // the id will be at the end of element.id
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

function getValue(element,type)// given an element and type, find the value of that type;
{
	var curID = getID(element);
	//alert(document.getElementById(type+curID).value);
	return (document.getElementById(type+curID).value);
}

function callToPhp(foodId,foodQ)// this updates the customer_order_food table
{
	var phpDir = "/WebTechRepo/HelperFunction/addToCart.php";
	phpDir += "?";
	phpDir += ("foodId="+foodId);
	phpDir += "&";
	phpDir += ("quantity="+foodQ);
	var response = (ajaxCall2(phpDir));
	//alert(response);
}

function getTotalItemInCart()
{
	var phpDir = "/WebTechRepo/HelperFunction/getNumberOfItemsInCart.php";
	var response = (ajaxCall2(phpDir));
	return parseInt(response);
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
	
	callToPhp(getID(element) , foodQuantity);
	
	var len = viewCartArr.length;
	var found = false;
	var totOrder = 0;
	for(var i = 0;i<len;i++) // check if it exists
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
	
	
	tempViewCart();
	if(totOrder > 0)document.getElementById("viewCartSpan").style.display = "block";
	
	totOrder = getTotalItemInCart();
	//alert(totOrder);
	
	document.getElementById("viewCart").innerText = "View Cart(" + totOrder + ")";
}
