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
			<h1>Welcome
			<?php
				echo $_SESSION["curUser"]["name"];
			?>!
			<br>
			</h1>
			 <b>User Since : </b>
			<?php
				
				date_default_timezone_set("Asia/Dhaka");
				$curTime =  (string) date('d/m/Y h:i:s a', time());
				$datetime1 = date_create_from_format('d/m/Y h:i:s a',$_SESSION["curUser"]["timeOfReg"]);
				$datetime2 = date_create_from_format('d/m/Y h:i:s a',$curTime);
				//var_dump($datetime1);
				//var_dump($datetime2);
				$interval = $datetime1->diff($datetime2);
				echo $interval->format('%Y Years %M Months %D Days %H Hours %I Minutes %S Seconds');
				echo "<br>";
				//var_dump($_COOKIE["YOLO"]);
				//var_dump($_COOKIE["SOLO"]);
				//var_dump($_COOKIE["bolo"]);
			?>
			
			<b>Last Login :</b> 0 Years 2 Months 10 Days 5 Hours 11 Minutes 24 Seconds Ago! <br>
			
			
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


