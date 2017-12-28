<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>

<?php
	includeThis("customer","Auth/authorization.php");
?>

<script src = <?=hrefThis("resource","js/ajaxCall.js")?> ></script>
<script src = <?=hrefThis("resource","js/calTotalImgInADir.js")?> ></script>
<script src = <?=hrefThis("resource","js/CustomerPages/BasicStructure/header.js")?> ></script>


<html>
	<p align="right">
		Logged in as
		<a href = "<?=hrefThis("customer","AccountsPages/viewProfilePage.php");?>" >
			<?php
				echo $_SESSION["curUser"]["name"];
			?>
		</a>
			| 
		<a href = "<?=hrefThis("customer","AccountsPages/logoutPage.php")?>" align="right">Logout</a>
	</p>
	
	<hr>
	
	<div align = "center" > 
	
		<img id = "loadingHead" src = "<?=hrefThis("resource","OtherPic/loadingHead.gif")?>" alt = "No Picture" width = "200"/>
		
		<table style=width:100%>
			<tr align = "center" width = "5%">
				<td align = "left">
					<img src = "<?=hrefThis("resource","OtherPic/leftArrow.png")?>" alt = "No Picture" height = "50" onclick = "headerImgClick('left' , this)"/>
				</td>
				
				<td align = "center" width = "30%">
					<img id = "headImg1" src = "<?=hrefThis("resource","FoodPic/1.png")?>" alt = "No Picture" height = "150" onclick = "headerImgClick('food' , this)"/>
				</td>
				
				<td align = "center" width = "30%">
					<img id = "headImg2" src = "<?=hrefThis("resource","FoodPic/2.png")?>" alt = "No Picture" height = "150" onclick = "headerImgClick('food' , this)"/>
				</td >
				
				<td align = "center" width = "30%">
					<img id = "headImg3" src = "<?=hrefThis("resource","FoodPic/3.png")?>" alt = "No Picture" height = "150" onclick = "headerImgClick('food' , this)"/>
				</td>
				
				<td align = "center" width = "30%">
					<img id = "headImg4" src = "<?=hrefThis("resource","FoodPic/4.png")?>" alt = "No Picture" height = "150" onclick = "headerImgClick('food' , this)"/>
				</td>
				
				<td align = "right" width = "5%">
					<img src = "<?=hrefThis("resource","OtherPic/rightArrow.png")?>" alt = "No Picture" height = "50" onclick = "headerImgClick('right' , this)" />
				</td>
			</tr>
		</table>
	

	
	</div>
	
</html>