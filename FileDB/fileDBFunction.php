<?php
	
	function writeSessionUserListInFileDB($path)
	{
		$file = fopen("{$path}store.xml","w");
		//echo "{$path}store.xml";
		foreach($_SESSION["userList"] as $user)
		{
			$strMade = "";
			
			$strMade = $strMade."<user>".PHP_EOL;
			foreach($user as $key => $value)
			{
				//echo "{$key} : {$value} <br>";
				$curTag = "<{$key}>{$value}</{$key}>".PHP_EOL;
				$strMade = $strMade.$curTag;
			}
			$strMade = $strMade."</user>".PHP_EOL;
			
			/// new write in file
			fwrite($file,$strMade);
			//echo $strMade;
			//echo "<br>";
		}
		fclose($file);	
	}
	
	function loadInfoInSessionUserList($path)
	{
		/// method 1
		/// include the root tag
		$file = fopen("{$path}store.xml","r"); /// this /FileDB happened cuz ami root page theke ashtesi and eikhane pay na eita na dile. check further! 
		$tmpStr = "";
		
		if(filesize("{$path}store.xml") > 0)
		{
			$tmpStr = fread($file,filesize("{$path}store.xml"));
		}
		fclose($file);
		$xmlStr = "<userList>".$tmpStr."</userList>";
		
		/// then et voila!
		$xml = simplexml_load_string($xmlStr);
		
		
		/// now load everything in session_userList
		//echo "All the user in XML file: <br>";
		$_SESSION["userList"] = array(); // clear kore nilam
		foreach($xml->user as $item)
		{
			$user = array();
			//echo "<br> User No: {$userID} <br>";
			foreach($item as $key => $value)
			{
				$user[(string)$key] = (string)$value;
				//echo "{$key} : {$value} <br>";
			}
			//echo "<br>";
			
			$idx = 0;
			if(!empty($_SESSION["userList"]))$idx = count($_SESSION["userList"]);
			$_SESSION["userList"][$idx] = $user; 
		}
	}

?>