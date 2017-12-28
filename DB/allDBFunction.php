<?php 
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>

<?php
	includeThis("database","conn.php");
?>

<?php

	function activeItem($item)/// if true then okay!
	{
		$baad = false;
		foreach($item as $key => $value)
		{
			if($key == "status" && $value == "deactivate")$baad = true;
		}
		if(!$baad)return true;
		else return false;
	}

	function onlySelectActive($arr) /// purifies the array of deactivate status
	{
		$ret = array();
		$iCnt = 0;
		foreach($arr as $item)
		{
			$baad = false;
			foreach($item as $key => $value)
			{
				if($key == "status" && $value == "deactivate")$baad = true;
				if(!activeItem($item))$baad = true;
			}
			if(!$baad)$ret[$iCnt++] = $item;
		}
		return $ret;
	}


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
		return onlySelectActive($ret);
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
				if(!activeItem($item))continue;
				if($key == "id" && $value == $id)$idMatch = true;
				if($idMatch && $key == $colName)return $value;
			}
		}
		return "";
	}
	
	function getInfoByID2($colName1,$colVal1,$colName2,$colVal2,$tableName,$colName)
	{
		$ret = getFullTable($tableName);
		foreach($ret as $item)
		{
			$idMatch = 0;
			foreach($item as $key => $value)
			{
				if(!activeItem($item))continue;
				if($key == $colName1 && $value == $colVal1)$idMatch++;
				if($key == $colName2 && $value == $colVal2)$idMatch++;
				if($idMatch >= 2 && $key == $colName)return $value;
			}
		}
		return "0";
	}
	
	function getRowByID($id,$tableName)
	{
		$ret = getFullTable($tableName);
		foreach($ret as $item)
		{
			$idMatch = false;
			foreach($item as $key => $value)
			{
				if(!activeItem($item))continue;
				if($key == "id" && $value == $id)$idMatch = true;
			}
			if($idMatch)return $item;
		}
		return "";
	}
	
	function getArrayOfInfo($colName,$colVal,$tableName)
	{
		$ret = getFullTable($tableName);
		$retArr = array();
		$iCnt = 0;
		foreach($ret as $item)
		{
			$idMatch = false;
			foreach($item as $key => $value)
			{
				if($key == $colName && $value == $colVal)$idMatch = true;
			}
			
			if($idMatch)
			{
				$newItem = array();
				foreach($item as $key => $value)
				{
					if($key == $colName)continue;
					$newItem[$key] = $value;
				}
				$retArr[$iCnt++] = $newItem;
			}
		}
		return onlySelectActive($retArr);
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
				if(!activeItem($item))continue;
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
				if(!activeItem($item))continue;
				if($key == "id")$idMatch = $value;
				if($key == $colName && $value == $colVal)return $idMatch;
			}
		}
		return 0;
	}
	
	function getIdByInfo2($colName1,$colVal1,$colName2,$colVal2,$tableName)
	{
		$ret = getFullTable($tableName);
		foreach($ret as $item)
		{
			$idMatch = 0;
			$matchCnt = 0;
			foreach($item as $key => $value)
			{
				if(!activeItem($item))continue;
				if($key == "id")$idMatch = $value;
				if($key == $colName1 && $value == $colVal1)$matchCnt++;
				if($key == $colName2 && $value == $colVal2)$matchCnt++;
				if($matchCnt >= 2)return $idMatch;
			}
		}
		return 0;
	}
	
	function insert($insData,$tableName)
	{
		/*
		Give this array to this function
		$insArr = array();
		$insArr["name"] = "'Beverage'";
		$res = insert($insArr,"catagory");
		var_dump($res);
		*/
		
		$columns = implode(", ",array_keys($insData));
		$values  = implode(", ", array_values($insData));
		
		$sql = "INSERT INTO $tableName ($columns) VALUES ($values)";
		
		createCon();
		global $conn;
		$result = mysqli_query($conn, $sql);
		closeCon();
		return $result;
	}
	
	function update($arr,$tableName,$id)
	{
		$sql = "UPDATE {$tableName} SET";
		
		$firstRow = true;
		foreach($arr as $key => $value)
		{
			if(!$firstRow)$sql .= ",";
			$sql .= " ";
			$sql .= $key;
			$sql .= " = ";
			$sql .= ("'".$value."'");
			$firstRow = false;
		}
		$sql .= (" WHERE {$tableName}.id = {$id}");
		
		createCon();
		global $conn;
		$result = mysqli_query($conn, $sql);
		closeCon();
		return $result;
	}
	
	/// works on aggrigate table with composite primary key
	function updateAgg($arr,$tableName,$colName1,$colVal1,$colName2,$colVal2)
	{
		$sql = "UPDATE {$tableName} SET";
		
		$firstRow = true;
		foreach($arr as $key => $value)
		{
			if(!$firstRow)$sql .= ",";
			$sql .= " ";
			$sql .= $key;
			$sql .= " = ";
			$sql .= ("'".$value."'");
			$firstRow = false;
		}
		$sql .= (" WHERE {$tableName}.{$colName1} = {$colVal1} and {$tableName}.{$colName2} = {$colVal2}");
		
		createCon();
		global $conn;
		$result = mysqli_query($conn, $sql);
		closeCon();
		return $result;
	}
	
	function search($colName,$colVal,$tableName)
	{
		$sql = "SELECT * FROM {$tableName} WHERE {$colName} LIKE '%". $colVal ."%'";
		createCon();
		global $conn;
		$result = mysqli_query($conn, $sql);
		$ret = array();
		$rowCount = 0;
		while(($row = mysqli_fetch_assoc($result))!=null){
			$ret[$rowCount++] = $row;
		}
		closeCon();
		return onlySelectActive($ret);
	}
	
	function searchInRange($colName,$low,$high,$tableName)
	{
		$sql = "select * from {$tableName} where {$colName} between '{$low}' and '{$high}'";
		createCon();
		global $conn;
		$result = mysqli_query($conn, $sql);
		$ret = array();
		$rowCount = 0;
		while(($row = mysqli_fetch_assoc($result))!=null){
			$ret[$rowCount++] = $row;
		}
		closeCon();
		return onlySelectActive($ret);
	}
	
	function calCAvgRating($foodId)
	{
		$totalRating = 0.0;
		$totalRatingCnt = 0;
		$ret = getFullTable("rating");
		foreach($ret as $item)
		{
			$idMatch = 0;
			foreach($item as $key => $value)
			{
				if(!activeItem($item))continue;
				if($key == "foodId" && $value == $foodId)$idMatch = $value;
				if($idMatch && $key == "rating")
				{
					$totalRating += (float)$value;
					$totalRatingCnt++;
				}
			}
		}
		if($totalRatingCnt == 0)return "0";
		else
		{
			$totalRatingCnt = (float)$totalRatingCnt;
			return ((float)($totalRating/$totalRatingCnt));
		}
	}
?>