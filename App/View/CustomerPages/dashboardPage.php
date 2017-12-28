<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	includeThis("customer","BasicStructure/loadUpper.php");
?>

			<h1>
			<?php
				date_default_timezone_set("Asia/Dhaka");
				$curTime =  date('h:i:s a', time());
				$d1 = new DateTime('01:00:00 pm');
				$d2 = new DateTime($curTime);
				
				if($d2 >= $d1)echo "Good After-noon, ";
				else echo "Good Morning, ";
				
				
				
				echo $_SESSION["curUser"]["name"];
			?>!
			<br>
			</h1>
			
			
			<h1>	
				YOU HAVE 
				<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>

<?php
	if(session_id() == "")session_start();

	includeThis("database","allDBFunction.php");
	
	$customerOrderId = getIdByInfo2("status","addedToCart","customerId",$_SESSION["curUser"]["id"],"customer_order");
	
	if($customerOrderId != 0)
	{
		$customerOrderFood = getFullTable("customer_order_food");
		$quantity = 0;
		for($i=0;$i<count($customerOrderFood);$i++)
		{
			if($customerOrderFood[$i]["customerOrderId"] == $customerOrderId)
				$quantity += (int)$customerOrderFood[$i]["quantity"];
		}
		echo $quantity;
	}
	else echo "0";
	
	
	
?>
				ITEMS PENDING! <br>
				<a href = "<?=hrefThis("customer","OrderPages/viewCartPage.php")?>" align="right">View Cart</a>
			</h1>
			
			
		</td>
	</tr>
	
<?php
	includeThis("customer","BasicStructure/loadLower.php");
?>


