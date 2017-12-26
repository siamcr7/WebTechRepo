<?php
	/// dynamicTable side
	$dynamicTableRoot = $roots["dynamicTable"];
	$dynamicTableRootInclude = $_SERVER['DOCUMENT_ROOT'].$dynamicTableRoot;
	
	$includes["dynamicTableInclude"] = function($path)
	{
		global $dynamicTableRootInclude;
		include_once($dynamicTableRootInclude.$path);
	};
	
	$hrefs["dynamicTableHref"] = function($path)
	{
		global $dynamicTableRoot;
		return $dynamicTableRoot.$path;
	};
	
?>