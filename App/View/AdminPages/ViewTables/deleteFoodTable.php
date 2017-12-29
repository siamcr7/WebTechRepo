<?php
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			
			
			if(isset($_GET['del'])){
				$id=$_GET['del'];
				mysqli_query($conn, "UPDATE food SET status='deactivate' WHERE id=$id");
				echo"<script>alert('deleted')</script>";
				header('location: /WebTechRepo/App/View/AdminPages/ViewTables/viewFoodTable.php');
			}
			
			else if(isset($_GET['view'])){
				$id=$_GET['view'];
				$record=mysqli_query($conn, "SELECT * From food WHERE id=$id");
				$rec=mysqli_fetch_array($record);
				
				echo "ID= ".$rec['id']."<br>";
				echo "Name= ".$rec['name']."<br>";
				echo "CatagoryId= ".$rec['catagoryId']."<br>";
				echo "Price= ".$rec['price']."<br>";
				echo "Status= ".$rec['status']."<br>";
				
				
				
				//header('location: /WebTechRepo/App/View/AdminPages/ViewTables/viewPersonalTable.php');
			}
			
			
?>
				