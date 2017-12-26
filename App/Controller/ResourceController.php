<?php
	/// resource side
	$resourceRoot = $roots["resource"];
	$resourceRootInclude = $_SERVER['DOCUMENT_ROOT'].$resourceRoot;
	
	$includes["resourceInclude"] = function($path)
	{
		global $resourceRootInclude;
		include_once($resourceRootInclude.$path);
	};
	
	$hrefs["resourceHref"] = function($path)
	{
		global $resourceRoot;
		return $resourceRoot.$path;
	};

?>