<?php
	$columns = implode(", ",array_keys($insData));
	$escaped_values = array_map('mysql_real_escape_string', array_values($insData));
	$values  = implode(", ", $escaped_values);
	$sql = "INSERT INTO `fbdata`($columns) VALUES ($values)";
?>