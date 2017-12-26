<?php

	$dir = $_REQUEST["dir"];
	$len = strlen($dir);
	$tmp = "";
	for($i=$len-1;$i>=0;$i--)
	{
		if($dir[$i] == '/')break;
		$tmp = $tmp.$dir[$i];
	}
	echo (strrev($tmp));
?>