<?php
	
	if(isset($_POST['submit']))
	{	
		$rv=$_POST["editType"];
		if($rv=="add"){
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			$name=$_POST['name'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$status=$_POST['status'];
			
			
			$query="INSERT INTO vendor (id,name,email,address,status) VALUES ('','$name','$email','$address','$status')";
			mysqli_query($conn,$query);
			
		}
	}


?>