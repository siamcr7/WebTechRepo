<script>
	
	var totalImg = 0;
	
	function ajaxCall(phpDir,requestVar,requestVal) // ajax call funtion
	{
		var req = new XMLHttpRequest();
		req.open("GET",phpDir+"?"+requestVar+"="+requestVal,false);
		req.send();
		return req.responseText;
	}
	
	function calTotalImg()
	{
		var phpDir = "/WebTechRepo/authenticated/HelperFunction/numberOfFilesInAfolder.php";
		var requestVar = "inThisDir";
		var requestVal = "/WebTechRepo/authenticated/Resources/FoodPic";
		totalImg = parseInt(ajaxCall(phpDir,requestVar,requestVal));
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
	
	
	
</script>