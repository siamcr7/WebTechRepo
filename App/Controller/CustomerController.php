<?php
	/// customer side
	$customerRoot = $roots["customer"];
	$customerRootInclude = $_SERVER['DOCUMENT_ROOT'].$customerRoot;
	
	$includes["customerInclude"] = function($path)
	{
		global $customerRootInclude;
		include_once($customerRootInclude.$path);
	};
	
	$hrefs["customerHref"] = function($path)
	{
		global $customerRoot;
		return $customerRoot.$path;
	};
	
?>