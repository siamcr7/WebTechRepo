<?php
	/*
		in all page include this file
		<?php include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
		?>
	*/


	/// controller side
	$includes = array(); /// array of functions of php includes
	$hrefs = array(); /// array of functions of return link address
	
	//********EDIT STARTS
	
	/// define the roots of all the folders
	$roots["public"] = "/WebTechRepo/App/View/PublicPages/";
	$roots["customer"] = "/WebTechRepo/App/View/CustomerPages/";

	$roots["resource"] = "/WebTechRepo/Resources/";

	$roots["helper"] = "/WebTechRepo/HelperFunction/";
	$roots["handler"] = "/WebTechRepo/HelperFunction/handler/";
	
	$roots["dynamicTable"] = "/WebTechRepo/App/View/DynamicTable/";
	
	$roots["database"] = "/WebTechRepo/DB/";
	
	$roots["model"] = "/WebTechRepo/App/Model/";
		
	
	/// include all the controller files
	include_once("CustomerController.php");
	include_once("PublicController.php");
	include_once("DynamicTableController.php");
	
	include_once("ResourceController.php");
	
	include_once("helperController.php");
	include_once("handlerController.php");
	
	include_once("dbController.php");
	
	//*******EDIT ENDS
	
	
	/// now just receive and give; no edit after here
	/// type = customer,resource,js,public,helper
	/// path = where it is? in short
	function hrefThis($type,$path)/// returns the link
	{
		$functionName = $type."Href";
		global $hrefs;
		return call_user_func($hrefs[$functionName], $path);
		
		//return $type."Href"($path);
		/*
		if($type == "customer")return $type."Href"($path);
		else if($type == "resource")return resourceHref($path);
		else if($type == "js")return resourceHref($path);
		else return "Error in HrefThis";
		*/
	}
	
	function includeThis($type,$path)
	{
		$functionName = $type."Include";
		global $includes;
		call_user_func($includes[$functionName], $path);
		
		/*
		if($type == "customer")customerInclude($path);
		else if($type == "resource")customerInclude($path);
		else if($type == "js")jsInclude($path);
		else echo "Error in IncludeThis";
		*/
	}
	
?>