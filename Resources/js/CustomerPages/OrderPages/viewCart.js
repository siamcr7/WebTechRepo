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

function getActualQuantity(element)
{
	var phpDir = "/WebTechRepo/HelperFunction/getQuantityOfFoodInCustomerOrder.php";
	phpDir += "?foodId=";
	phpDir += getID(element);
	var response = (ajaxCall2(phpDir));
	return parseInt(response);
}

function getTotalPrice()
{
	var phpDir = "/WebTechRepo/HelperFunction/getTotalPriceOfCustomerOrder.php";
	var response = (ajaxCall2(phpDir));
	return parseInt(response);
}

function updateCustomerOrderFoodTable(foodId,quantity)
{
	var phpDir = "/WebTechRepo/HelperFunction/updateFromViewCart.php";
	phpDir += "?foodId=";
	phpDir += foodId;
	phpDir += "&quantity=";
	phpDir += quantity;
	var response = (ajaxCall2(phpDir));
}

function toInt(x)
{
	if(x == "")return 0;
	return parseInt(x);
}

function quantityChanged(element)
{
	//alert();
	var curId = getID(element);
	var actualQuantity = getActualQuantity(element);
	var curQuantity = (document.getElementById("foodQuantity"+curId)).value;
	var pricePerUnit = (document.getElementById("foodPrice"+curId)).innerText;
	
	actualQuantity = toInt(actualQuantity);
	curQuantity = toInt(curQuantity);
	pricePerUnit = toInt(pricePerUnit);

	var totalPrice = getTotalPrice();
	
	var changedQuantity = curQuantity - actualQuantity;
	var changeTot = changedQuantity*pricePerUnit;
	totalPrice += changeTot;
	
	(document.getElementById("totalPrice")).innerText = totalPrice;
	
	updateCustomerOrderFoodTable(curId,curQuantity);
}