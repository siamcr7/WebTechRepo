<?php
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			
			
			if(isset($_GET['del'])){
				$id=$_GET['del'];
				mysqli_query($conn, "UPDATE USER SET status='deactivate' WHERE id=$id");
				echo"<script>alert('deleted')</script>";
				header('location: /WebTechRepo/App/View/AdminPages/ViewTables/viewPersonalTable.php');
			}
			
			else if(isset($_GET['view'])){
				$id=$_GET['view'];
				$record=mysqli_query($conn, "SELECT * From user WHERE id=$id");
				$rec=mysqli_fetch_array($record);
				
				echo "ID= ".$rec['id']."<br>";
				echo "Name= ".$rec['name']."<br>";
				echo "Username= ".$rec['userName']."<br>";
				echo "Email= ".$rec['email']."<br>";
				echo "Address= ".$rec['address']."<br>";
				echo "Location= ".$rec['location']."<br>";
				echo "Role= ".$rec['role']."<br>";
				echo "Password= ".$rec['password']."<br>";
				echo "Status= ".$rec['status']."<br>";
				echo "Registration Date= ".$rec['regDate']."<br>";
				echo "Phone= ".$rec['phoneNo']."<br>";
				
				
				
				
				//header('location: /WebTechRepo/App/View/AdminPages/ViewTables/viewPersonalTable.php');
			}
			
?>
				