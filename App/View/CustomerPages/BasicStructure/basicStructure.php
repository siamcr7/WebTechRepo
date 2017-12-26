<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/app/Controller/index.php");
?>
<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				includeThis("customer","BasicStructure/header.php");
			?>
		</td>
	</tr>
		  
	<tr>
		<td colspan="1" width = "200" valign="top">
			<?php
				includeThis("customer","BasicStructure/accountCol.php");
			?>
		</td>
			
		<td colspan="2" valign="top">
		
		^^ loadUpper.php
		/// CODE HERE
		\/ loadLower.php
		
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				includeThis("customer","BasicStructure/footer.php");
			?>	
		</td>
	</tr>
		 
</table>