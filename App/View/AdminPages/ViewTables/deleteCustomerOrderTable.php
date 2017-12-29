<?php
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			
			
			if(isset($_GET['del'])){
				$id=$_GET['del'];
				mysqli_query($conn, "UPDATE customer_order SET status='deactivate' WHERE id=$id");
				echo"<script>alert('deleted')</script>";
				header('location: /WebTechRepo/App/View/AdminPages/ViewTables/viewCustomerOrderTable.php');
			}
			
			else if(isset($_GET['view'])){
				$id=$_GET['view'];
				$record=mysqli_query($conn, "SELECT * From customer_order WHERE id=$id");
				$rec=mysqli_fetch_array($record);
				
				echo "ID= ".$rec['id']."<br>";
				echo "customerId= ".$rec['customerId']."<br>";
				echo "status= ".$rec['status']."<br>";
				echo "Order time= ".$rec['orderTime']."<br>";
				echo "Receive time = ".$rec['receiveTime']."<br>";
				echo "Payment method= ".$rec['paymentMethod']."<br>";
				
				
				
				
				//header('location: /WebTechRepo/App/View/AdminPages/ViewTables/viewPersonalTable.php');
			}
			
?>
				