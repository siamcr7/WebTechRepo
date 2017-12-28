<?php
	
	if(isset($_POST['submit']))
	{	
		$rv=$_POST["editType"];
		if($rv=="add"){
			/*
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			$name=$_POST['name'];
			$email=$_POST['email'];
			$username=$_POST['userName'];
			$password=$_POST['pass'];
			$status=$_POST['status'];
			$role=$_POST['role'];
			
			$query="INSERT INTO user (id,name,userName,email,address,location,role,password,status,regDate,phone,picLink) VALUES ('','$name','$username','$email','','','$role','$password','$status','','','')";
			mysqli_query($conn,$query);
			*/
			
			
			include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
			
			includeThis("database","allDBFunction.php");
			
			$arr = array();
			$arr["name"] = "'".$_POST['name']."'";
			$arr["email"] = "'".$_POST['email']."'";
			$arr["userName"] = "'".$_POST['userName']."'";
			$arr["password"] = "'".$_POST['pass']."'";
			$arr["status"] = "'".$_POST['status']."'";
			$arr["role"] = "'".$_POST['role']."'";
			
			//var_dump($arr);
			
			$res =  insert($arr,"user");
			if($res == true)
			{
				echo"<script>
						alert('Data Inserted');
					</script>";
			}
			else 
			{
				echo"<script>
						alert('Error');
					</script>";
			}
			
		}
		
		else if($rv=="update"){
			
			include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
			
			includeThis("database","allDBFunction.php");
			$arr = array();
			$arr["name"] = $_POST['name'];
			$arr["email"] = $_POST['email'];
			$arr["userName"] = $_POST['userName'];
			$arr["password"] = $_POST['pass'];
			$arr["status"] = $_POST['status'];
			$arr["role"] = $_POST['role'];
			
			//var_dump($_POST['id']);
			//var_dump($arr);
			
			$res = update($arr,"user",$_POST['id']);
			if($res == true)
			{
				echo"<script>
						alert('Data Updated');
					</script>";
			}
			else 
			{
				echo"<script>
						alert('Error');
					</script>";
			}
			
		}
		
		
	}
	
	else
	{
		echo"<script>
				alert('Something Went Wrong');
			</script>";
	}
	


?>