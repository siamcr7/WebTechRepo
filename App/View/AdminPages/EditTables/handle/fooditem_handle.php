<?php
	
	if(isset($_POST['submit']))
	{	
		$rv=$_POST["editType"];
		if($rv=="add"){
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			$name=$_POST['fname'];
			$cid=$_POST['cid'];
			$price=$_POST['ID'];
			$file=$_POST['file'];
			$status=$_POST['status'];
			
			
			$query="INSERT INTO food (id,name,catagoryId,price,status,pic) VALUES ('','$name','$cid','$price','$status','$file')";
			mysqli_query($conn,$query);
			
		}
	}


?>