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

// depends on calTotalImgInADir.js
var totalImg = 0;

function getFileName(dir) /// get the file name; returns the number
{
	var len = dir.length;
	var tmp = "";
	for(var i = len-1;i>=0;i--)
	{
		if(dir[i] == '/')break;
		tmp += dir[i];
	}
	var ret = "";
	for(var i = tmp.length-1;i>=0;i--)ret += tmp[i];
	ret = parseInt(ret);
	return ret;
}

function resetLoadingGif()
{
	var loadingVal = document.getElementById("loadingHead");
	if(loadingVal != null)loadingVal.src = loadingVal.src;
}

function decBy1(val)
{
	if(val == 1)val = totalImg;
	else val--;
	return val;
}

function incBy1(val)
{
	if(val == totalImg)val = 1;
	else val++;
	return val;
}

var refreshIntervalId;
function changeMouseCursor(element)
{
	element.style.cursor = "pointer";
}

function stopSlide()
{
	clearInterval(refreshIntervalId);
}

function startSlide()
{
	resetLoadingGif();
	refreshIntervalId =	setInterval(function()
		{ 
			headerImgClick("right","");
			resetLoadingGif();
		}, 5000);
	
}

function getIDFromSrc(element) // returns the id of this image from the source name
{
	return parseInt(getFileName(element.src));
}

function headerImgClick(typ,curElement)
{
	var headImg1 = document.getElementById("headImg1");
	var headImg2 = document.getElementById("headImg2");
	var headImg3 = document.getElementById("headImg3");
	var headImg4 = document.getElementById("headImg4");
	var dir = "/WebTechRepo/Resources/FoodPic/";
	
	if(typ == "right")
	{
		//using php
		//var img1Val = decBy1( parseInt(ajaxCall("/WebTechRepo/HelperFunction/getFileName.php" , "dir" , headImg1.src)) );

		var img1Val = decBy1( getIDFromSrc(headImg1) );
		var img2Val = decBy1( getIDFromSrc(headImg2) );
		var img3Val = decBy1( getIDFromSrc(headImg3) );
		var img4Val = decBy1( getIDFromSrc(headImg4) );
		
		headImg1.src = dir+img1Val+".png";
		headImg2.src = dir+img2Val+".png";
		headImg3.src = dir+img3Val+".png";
		headImg4.src = dir+img4Val+".png";
	}
	else if(typ == "left")
	{
		var img1Val = incBy1( getIDFromSrc(headImg1) );
		var img2Val = incBy1( getIDFromSrc(headImg2) );
		var img3Val = incBy1( getIDFromSrc(headImg3) );
		var img4Val = incBy1( getIDFromSrc(headImg4) );
		
		headImg1.src = dir+img1Val+".png";
		headImg2.src = dir+img2Val+".png";
		headImg3.src = dir+img3Val+".png";
		headImg4.src = dir+img4Val+".png";
	}
	else
	{
		var foodId = getIDFromSrc(curElement);
		var link = "/WebTechRepo/App/View/CustomerPages/Details/viewFoodDetails.php?foodId="+foodId;
		document.location=link;
	}
	
}

totalImg = calTotalImg();

refreshIntervalId =	setInterval(function()
		{ 
			headerImgClick("right","");
			resetLoadingGif();
		}, 5000);

