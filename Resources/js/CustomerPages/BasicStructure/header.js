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
	//alert(ret);
	return ret;
}

function resetLoadingGif()
{
	var loadingVal = document.getElementById("loadingHead");
	if(loadingVal != null)loadingVal.src = loadingVal.src;
}

function decBy1(val)
{
	if(val <= 0)val = totalImg-1;
	else val--;
	return val;
}

function incBy1(val)
{
	if(val+1 >= totalImg)val = 0;
	else val++;
	return val;
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

		var img1Val = decBy1( parseInt(getFileName(headImg1.src)) );
		var img2Val = decBy1( parseInt(getFileName(headImg2.src)) );
		var img3Val = decBy1( parseInt(getFileName(headImg3.src)) );
		var img4Val = decBy1( parseInt(getFileName(headImg4.src)) );
		
		headImg1.src = dir+img1Val+".png";
		headImg2.src = dir+img2Val+".png";
		headImg3.src = dir+img3Val+".png";
		headImg4.src = dir+img4Val+".png";
	}
	else if(typ == "left")
	{
		var img1Val = incBy1( parseInt(getFileName(headImg1.src)) );
		var img2Val = incBy1( parseInt(getFileName(headImg2.src)) );
		var img3Val = incBy1( parseInt(getFileName(headImg3.src)) );
		var img4Val = incBy1( parseInt(getFileName(headImg4.src)) );
		
		headImg1.src = dir+img1Val+".png";
		headImg2.src = dir+img2Val+".png";
		headImg3.src = dir+img3Val+".png";
		headImg4.src = dir+img4Val+".png";
	}
	else
	{
		alert("go to food details!");
	}
	
}

totalImg = calTotalImg();
setInterval(function()
	{ 
		headerImgClick("right","");
		resetLoadingGif();
	}, 5000);
