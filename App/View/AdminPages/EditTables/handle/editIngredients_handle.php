<?php
	
	if(isset($_POST['submit']))
	{	
		$rv=$_POST["editType"];
		if($rv=="add"){
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			$name=$_POST['name'];
			$VID=$_POST['VID'];
			$QID=$_POST['QID'];
			$status=$_POST['status'];
			
			
			$query="INSERT INTO ingredients (id,name,vendorId,quantityRem,status) VALUES ('','$name','$VID','$QID','$status')";
			mysqli_query($conn,$query);
			
		}
	}


?>