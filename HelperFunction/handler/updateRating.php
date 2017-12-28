<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
	includeThis("database","allDBFunction.php");
?>

<?php
	if( !empty($_REQUEST["rating"]) && $_REQUEST["rating"] != "0" && !empty($_REQUEST["foodId"]))
	{
		if(session_id() == "")session_start();
		$rating = $_REQUEST["rating"];
		$foodId = $_REQUEST["foodId"];
		$customerId = $_SESSION["curUser"]["id"];
		
		$insData["foodId"] = $foodId;
		$insData["customerId"] = $customerId;
		$insData["rating"] = $rating;
		
		$res = insert($insData,"rating");
		
		if($res == false)
		{
			updateAgg($insData,"rating","foodId",$foodId,"customerId",$customerId);
		}
		
		$go = hrefThis("customer","Details/viewFoodDetails.php")."?foodId=".$foodId;
		echo"<script>
                alert('Rating Updated!');
				document.location='{$go}';	
            </script>";
		
	}
?>