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
		var dir = "/WebTechRepo/authenticated/Resources/FoodPic/";
		
		if(typ == "right")
		{
			//using php
			//var img1Val = decBy1( parseInt(ajaxCall("/WebTechRepo/authenticated/HelperFunction/getFileName.php" , "dir" , headImg1.src)) );

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
	
	calTotalImg();
	setInterval(function()
		{ 
			headerImgClick("right","");
			resetLoadingGif();
		}, 5000);
	
</script>

<?php
	include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/authenticated/CustomerPages/Auth/authorization.php");
?>
<html>
	<p align="right">
		Logged in as
		<a href = "/WebTechRepo/authenticated/CustomerPages/AccountsPages/viewProfilePage.php" >
			<?php
				echo $_SESSION["curUser"]["name"];
			?>
		</a>
			| 
		<a href = "/WebTechRepo/authenticated/CustomerPages/AccountsPages/logoutPage.php" align="right">Logout</a>
	</p>
	
	<hr>
	
	<div align = "center" > 
	
		<img id = "loadingHead" src = "/WebTechRepo/authenticated/Resources/OtherPic/loadingHead.gif" alt = "No Picture" width = "200"/>
		
		<table style=width:100%>
			<tr align = "center" width = "5%">
				<td align = "left">
					<img src = "/WebTechRepo/authenticated/Resources/OtherPic/leftArrow.png" alt = "No Picture" height = "50" onclick = "headerImgClick('left' , this)"/>
				</td>
				
				<td align = "center" width = "30%">
					<img id = "headImg1" src = "/WebTechRepo/authenticated/Resources/FoodPic/1.png" alt = "No Picture" height = "150" onclick = "headerImgClick('food' , this)"/>
				</td>
				
				<td align = "center" width = "30%">
					<img id = "headImg2" src = "/WebTechRepo/authenticated/Resources/FoodPic/2.png" alt = "No Picture" height = "150" onclick = "headerImgClick('food' , this)"/>
				</td >
				
				<td align = "center" width = "30%">
					<img id = "headImg3" src = "/WebTechRepo/authenticated/Resources/FoodPic/3.png" alt = "No Picture" height = "150" onclick = "headerImgClick('food' , this)"/>
				</td>
				
				<td align = "center" width = "30%">
					<img id = "headImg4" src = "/WebTechRepo/authenticated/Resources/FoodPic/4.png" alt = "No Picture" height = "150" onclick = "headerImgClick('food' , this)"/>
				</td>
				
				<td align = "right" width = "5%">
					<img src = "/WebTechRepo/authenticated/Resources/OtherPic/rightArrow.png" alt = "No Picture" height = "50" onclick = "headerImgClick('right' , this)" />
				</td>
			</tr>
		</table>
	

	
	</div>
	
</html>