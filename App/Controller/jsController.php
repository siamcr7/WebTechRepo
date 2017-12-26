<?php
	
	/// js file side
	$jsRoot = $roots["js"];
	$jsRootInclude = $_SERVER['DOCUMENT_ROOT'].$jsRoot;
	
	$includes["jsInclude"] = function($path)
	{
		global $jsRootInclude;
		include_once($jsRootInclude.$path);
	};
	
	$hrefs["jsHref"] = function($path)
	{
		global $jsRoot;
		return $jsRoot.$path;
	};
	
?>