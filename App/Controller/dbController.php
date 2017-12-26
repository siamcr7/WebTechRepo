<?php
	/// database side
	$databaseRoot = $roots["database"];
	$databaseRootInclude = $_SERVER['DOCUMENT_ROOT'].$databaseRoot;
	
	$includes["databaseInclude"] = function($path)
	{
		global $databaseRootInclude;
		include_once($databaseRootInclude.$path);
	};
	
	$hrefs["databaseHref"] = function($path)
	{
		global $databaseRoot;
		return $databaseRoot.$path;
	};
	
?>