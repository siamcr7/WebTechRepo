<?php
	if( !empty($_REQUEST["inThisDir"]) )
	{
		$dir = $_SERVER['DOCUMENT_ROOT'].$_REQUEST["inThisDir"];
		$fi = new FilesystemIterator( $dir , FilesystemIterator::SKIP_DOTS);
		printf(iterator_count($fi));
		//echo $_REQUEST["inThisDir"];
	}
	else echo "0";
?>