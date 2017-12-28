<?php
	
	if(isset($_POST['submit']))
	{	
		$rv=$_POST["editType"];
		if($rv=="add"){
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			$name=$_POST['name'];
			$email=$_POST['email'];
			$username=$_POST['userName'];
			$password=$_POST['pass'];
			$status=$_POST['status'];
			$role=$_POST['role'];
			
			$query="INSERT INTO user (id,name,userName,email,address,location,role,password,status,regDate,phone,picLink) VALUES ('','$name','$username','$email','','','$role','$password','$status','','','')";
			mysqli_query($conn,$query);
			
		}
		
	}


?>