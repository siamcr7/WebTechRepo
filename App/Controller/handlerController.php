<?php
	
	/// handler file side
	$handlerRoot = $roots["handler"];
	$handlerRootInclude = $_SERVER['DOCUMENT_ROOT'].$handlerRoot;
	
	$includes["handlerInclude"] = function($path)
	{
		global $handlerRootInclude;
		include_once($handlerRootInclude.$path);
	};
	
	$hrefs["handlerHref"] = function($path)
	{
		global $handlerRoot;
		return $handlerRoot.$path;
	};
	
?>