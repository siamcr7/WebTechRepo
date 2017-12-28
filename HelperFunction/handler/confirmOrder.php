<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>

<?php
	if(session_id() == "")session_start();
	includeThis("database","allDBFunction.php");
	
	$customerOrderId = getIdByInfo2("status","addedToCart","customerId",$_SESSION["curUser"]["id"],"customer_order");
	
	if($customerOrderId != 0)
	{
		$arr = array();
		$arr["status"] = "ordered";
		date_default_timezone_set("Asia/Dhaka");
		$date = date('Y-m-d h:i:s', time());
		$arr["orderTime"] = $date;
		$arr["paymentMethod"] = $_REQUEST["paymentMethod"];
		
		$res = update($arr,"customer_order",$customerOrderId);
		if($res == true)
		{
			$go = hrefThis("customer","OrderPages/viewFullMenu.php");
			echo"<script>
                alert('Ordered Placed. You will soon get a call from us!');   
				document.location='{$go}';
            </script>";
		}
		else
		{
			$go = hrefThis("customer","OrderPages/orderConfirmPage.php");
			echo"<script>
                alert('Something went wrong!');   
				document.location='{$go}';
            </script>";
		}
	}
	else
	{
		$go = hrefThis("customer","OrderPages/viewFullMenu.php");
			echo"<script>
                alert('Nothing To Order!');   
				document.location='{$go}';
            </script>";
	}
	
?>