<?php
	/// public side
	$publicRoot = $roots["public"];
	$publicRootInclude = $_SERVER['DOCUMENT_ROOT'].$publicRoot;
	
	$includes["publicInclude"] = function($path)
	{
		global $publicRootInclude;
		include_once($publicRootInclude.$path);
	};
	
	$hrefs["publicHref"] = function($path)
	{
		global $publicRoot;
		return $publicRoot.$path;
	};
	
?>