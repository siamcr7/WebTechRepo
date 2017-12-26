<?php
	
	/// helper file side
	$helperRoot = $roots["helper"];
	$helperRootInclude = $_SERVER['DOCUMENT_ROOT'].$helperRoot;
	
	$includes["helperInclude"] = function($path)
	{
		global $helperRootInclude;
		include_once($helperRootInclude.$path);
	};
	
	$hrefs["helperHref"] = function($path)
	{
		global $helperRoot;
		return $helperRoot.$path;
	};
	
?>