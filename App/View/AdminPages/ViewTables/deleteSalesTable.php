<?php
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			
			
			if(isset($_GET['del'])){
				$id=$_GET['del'];
				mysqli_query($conn, "DELETE FROM sales WHERE id=$id");
				echo "<script>alert('deleted')</script>";
				header('location: /WebTechRepo/App/View/AdminPages/ViewTables/viewSalesTable.php');
			}
			
			else if(isset($_GET['view'])){
				$id=$_GET['view'];
				$record=mysqli_query($conn, "SELECT * From sales WHERE id=$id");
				$rec=mysqli_fetch_array($record);
				
				echo "ID= ".$rec['id']."<br>";
				echo "Customer order id= ".$rec['customer_order_id']."<br>";
				echo "Deleveryman id= ".$rec['deliveryman_id']."<br>";
				
				
				
				
				//header('location: /WebTechRepo/App/View/AdminPages/ViewTables/viewPersonalTable.php');
			}
			
			
			
?>
				