<?php
	
	if(isset($_POST['submit']))
	{	
		$rv=$_POST["editType"];
		if($rv=="add"){
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			$name=$_POST['name'];
			
			$status=$_POST['status'];
			
			
			$query="INSERT INTO catagory (id,name,status) VALUES ('','$name','$status')";
			mysqli_query($conn,$query);
			
		}
	}


?>