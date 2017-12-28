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