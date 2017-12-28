<?php

	/// method 1
	$strMade = "
	<user>
		<name>$_REQUEST[name]</name>
		<email>$_REQUEST[email]</email>
		<pass>$_REQUEST[pass]</pass>
	</user>
	";
	
	
	/// append in file
	$file = fopen("store.xml","a");
	fwrite($file,$strMade);
	
	fclose($file);
	
	echo $strMade;
	
	
	/* /// method 2; not sure it will work though! 
	$userList = simplexml_load_file("store.xml");
	$user = $userList->addChild("name" , "email");
	$userList->saveXML("store.xml");
	*/
?>