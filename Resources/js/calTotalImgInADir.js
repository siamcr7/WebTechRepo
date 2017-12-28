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

function calTotalImg()
{
	var phpDir = "/WebTechRepo/HelperFunction/numberOfFilesInAfolder.php";
	var requestVar = "inThisDir";
	var requestVal = "/WebTechRepo/Resources/FoodPic/";
	//alert(totalImg);
	return ( parseInt(ajaxCall(phpDir,requestVar,requestVal)) );
}