<?php
	session_start();
?>
<table style="width:100%" , border = "1">
			
	<tr>
		<td colspan = "3">
			<?php
				include("header.php");
			?>	
		</td>
	</tr>
		  
	<tr>
		<td colspan="1">
			<?php
				include("accountCol.php");
			?>
		</td>
			
		<td colspan="2" width = "500">
			
			<fieldset>
				<legend>View Page</legend>			
				<table style="width:100%">
					<tr>
						<td>ID :</td>
						<td>1</td>
					</tr>
					
					<tr>
						<td>Name :</td>
						<td>XYZ</td>
					</tr>
				</table>
			</fieldset>
			
		</td>
	</tr>
	
	<tr>
		<td colspan = "3">
			<?php
				include("footer.php");
			?>	
		</td>
	</tr>
		 
</table>


