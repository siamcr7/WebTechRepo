<?php
	
	/// method 1
	/// include the root tag
	$file = fopen("store.xml","r");
	$tmpStr = "";
	
	if(filesize("store.xml") > 0)
	{
		$tmpStr = fread($file,filesize("store.xml"));
	}
	fclose($file);
	//echo $xmlStr;
	$xmlStr = "<userList>".$tmpStr."</userList>";
	
	/// then et voila!
	$xml = simplexml_load_string($xmlStr);
	//var_dump($xml);
	echo "All the user in XML file: <br>";
	for($i=0;;$i++)
	{
		if(empty($xml->user[$i]))break;
		
		echo "<br>";
		echo "$i:<br>";
		echo "Name: {$xml->user[$i]->name}<br>";
		echo "Email: {$xml->user[$i]->email}<br>";
		echo "Pass: {$xml->user[$i]->pass}<br>";
	}
	//echo $xml->user[0]->name;
	
	
	/*
	/// method 2
	$xml = simplexml_load_file("store.xml");
	echo $xml->user[0]->name;
	*/
?>