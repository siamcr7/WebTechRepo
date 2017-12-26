// depends on calTotalImgInADir.js

var totalImg = 0;
var curPage = 0;
function goToNextPage()
{
	alert("boom");
	curPage++;
	var imgRangeSt = curPage*5;
	
	if(imgRangeSt >= totalImg)curPage--;
	imgRangeSt = curPage*3;
	
	//document.cookie = "curPage"+"="+imgRangeSt;		
	//document.cookie = "YOLO = 0 ; SOLO = 123 ; bolo = 123";
}

function goToPrevPage()
{
	alert("boom");
	curPage++;
	var imgRangeSt = curPage*3;
	
	if(imgRangeSt >= totalImg)curPage--;
	imgRangeSt = curPage*3;
	
	//document.cookie = "curPage"+"="+imgRangeSt;		
	//document.cookie = "YOLO = 0 ; SOLO = 123 ; bolo = 123";
}

totalImg = calTotalImg();