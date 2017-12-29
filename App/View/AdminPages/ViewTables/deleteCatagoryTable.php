<?php
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			
			
			if(isset($_GET['del'])){
				$id=$_GET['del'];
				mysqli_query($conn, "UPDATE catagory SET status='deactivate' WHERE id=$id");
				echo"<script>alert('deleted')</script>";
				header('location: /WebTechRepo/App/View/AdminPages/ViewTables/viewCatagoryTable.php');
			}
			
			else if(isset($_GET['view'])){
				$id=$_GET['view'];
				$record=mysqli_query($conn, "SELECT * From catagory WHERE id=$id");
				$rec=mysqli_fetch_array($record);
				
				echo "ID= ".$rec['id']."<br>";
				echo "Name= ".$rec['name']."<br>";
				echo "Status= ".$rec['status']."<br>";
				
				
				
				
				//header('location: /WebTechRepo/App/View/AdminPages/ViewTables/viewPersonalTable.php');
			}
			
?>
				