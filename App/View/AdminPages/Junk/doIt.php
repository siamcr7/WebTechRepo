<?php
		if(session_id() == "")session_start();
		$ret = array();
		$ret["id"] = "";
		$ret["name"] = "";
		$ret["userName"] = "";
		$ret["email"] = "";
		$ret["address"] = "";
		$ret["location"] = "";
		$ret["role"] = "";
		$ret["password"] = "";
		$ret["status"] = "";
		if( !empty($_REQUEST["id"]) )
		{
			$id = $_REQUEST["id"];
			
			include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
			
			includeThis("database","allDBFunction.php");
			
			$ret = getRowByID($id,"user");
			
		}
		$_SESSION["updateThis"] = $ret;
?>