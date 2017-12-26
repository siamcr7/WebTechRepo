<?php 
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	function valAll()
	{
		if(!isset($_REQUEST['name']))return false;
		if(!isset($_REQUEST['catagoryId']))return false;
		if(!isset($_REQUEST['price']))return false;
		if(!isset($_REQUEST['status']))return false;
		return true;
	}

	function addToTable()
	{
		if(!vallAll())return false;
		$name = $_REQUEST['name'];		
		$catagoryId = $_REQUEST['catagoryId'];
		$price = $_REQUEST['price'];
		$status = $_REQUEST['status'];
		
		
	}
	
		
	$display = 0;
	if(isset($_REQUEST['display']))
		$display = $_REQUEST['display'];
		
	$conn = mysqli_connect("localhost", "root", "root", "product_db", 3306);
	$result = mysqli_query($conn, "INSERT INTO products (name, buying_price, selling_price, display) VALUES ('$name', '$bprice', '$sprice', '$display')");
	var_dump($result);
	mysqli_close($conn);
?>