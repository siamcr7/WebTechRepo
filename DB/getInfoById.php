<?php 
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>

<?php
	includeThis("database","conn.php");
?>

<?php
	function view($tableName)
	{
		createCon();
		global $conn;

		$sql = "SELECT * FROM ".$tableName;
		$result = mysqli_query($conn, $sql);
		$ret = array();
		$rowCount = 0;
		while(($row = mysqli_fetch_assoc($result))!=null){
			$ret[$rowCount++] = $row;
		}
		closeCon();
		return $ret;
	}
?>