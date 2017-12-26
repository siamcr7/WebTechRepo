<?php 
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>

<?php
	includeThis("database","conn.php");
?>

<?php
	function getFullTable($tableName) /// returns full table
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
	
	/// returns the colName against that id in that table
	function getInfoByID($id,$tableName,$colName)
	{
		$ret = getFullTable($tableName);
		foreach($ret as $item)
		{
			$idMatch = false;
			foreach($item as $key => $value)
			{
				if($key == "id" && $value == $id)$idMatch = true;
				if($idMatch && $key == $colName)return $value;
			}
		}
		return "";
	}
	
	function getArrayOfInfoFromAgg($id,$tableName1,$tableName2)
	{
		$ret = getFullTable($tableName1."_".$tableName2);
		$retStr = "";
		foreach($ret as $item)
		{
			$idMatch = false;
			foreach($item as $key => $value)
			{
				if($key == ($tableName1."Id") && $value == $id)$idMatch = true;
				else if($idMatch)
				{
					if($retStr != "")$retStr .= ", ";
					$retStr .= getInfoByID($value,$tableName2,"name");
				}
			}
		}
		return $retStr;
	}
	
	
	function getIdByInfo($colName,$colVal,$tableName)
	{
		$ret = getFullTable($tableName);
		foreach($ret as $item)
		{
			$idMatch = 0;
			foreach($item as $key => $value)
			{
				if($key == "id")$idMatch = $value;
				if($key == $colName && $value == $colVal)return $idMatch;
			}
		}
		return 0;
	}
	
	function getIdByInfo($colName1,$colVal1,$colName2,$colVal2,$tableName)
	{
		$ret = getFullTable($tableName);
		foreach($ret as $item)
		{
			$idMatch = 0;
			$matchCnt = 0;
			foreach($item as $key => $value)
			{
				if($key == "id")$idMatch = $value;
				if($key == $colName1 && $value == $colVal1)$matchCnt++;
				if($matchCnt >= 2)return $idMatch;
			}
		}
		return 0;
	}
	
	function insert($insData,$tableName)
	{
		$columns = implode(", ",array_keys($insData));
		$values  = implode(", ", array_values($insData));
		
		$sql = "INSERT INTO $tableName ($columns) VALUES ($values)";
		
		var_dump($sql);
		
		createCon();
		global $conn;
		$result = mysqli_query($conn, $sql);
		closeCon();
		return $result;
	}
	
?>