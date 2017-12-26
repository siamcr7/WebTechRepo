<?php
	session_start();
?>
<form> <!-- action = "editProfileHandler.php" -->
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
				<legend>Edit Profile</legend>
				<table style="width:100%">
					
					<tr>
						<td>User ID : </td>
						<td>
						<input name = "uN" value = "<?php echo "12";?>" readonly/>
						</td>
					</tr>
					
					<tr>
						<td>Name :</td>
						<td>
						<input name = "name" value = "<?php echo $_SESSION["curUser"]["name"];?>"/>
						</td>
					</tr>
					
					<tr>
						<td>Email : </td>
						<td>
						<input name = "email" value = "<?php echo $_SESSION["curUser"]["email"];?>"/>
						</td>
					</tr>
					
					<tr>
						<td>Gender : </td>
						<td>
						
						<input name = "gender" type = "radio" value = "Male" 
							<?php 
								if($_SESSION["curUser"]["gender"] == "Male")echo "checked";
							?>
						/>Male
						<input name = "gender" type = "radio" value = "Female"
							<?php 
								if($_SESSION["curUser"]["gender"] == "Female")echo "checked";
							?>
						/>Female
						<input name = "gender" type = "radio" value = "Other"
							<?php 
								if($_SESSION["curUser"]["gender"] == "Other")echo "checked";
							?>
						/>Other
						
						</td>
					</tr>
					
					<tr>
						<td>Date of Birth : </td>
						<td>
							<table style="width:100%">
								<tr>
									<td align="center">dd</td>
									<td align="center">mm</td>
									<td align="center">yy</td>
								</tr>
								<tr>
									<td align="center"><input name = "d" value =
									<?php 
										$allPart = explode("/",$_SESSION["curUser"]["DOB"]);
										echo $allPart[0];
									?>
									/> </td>
									<td align="center"><input name = "m" value =
									<?php 
										$allPart = explode("/",$_SESSION["curUser"]["DOB"]);
										echo $allPart[1];
									?>
									/></td>
									<td align="center"><input name = "y" value =
									<?php 
										$allPart = explode("/",$_SESSION["curUser"]["DOB"]);
										echo $allPart[2];
									?>
									/></td>
								 </tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td>Address : </td>
						<td>
						<input name = "uN" value = "<?php echo "H 127, B 1, Banani, Dhaka";?>"/>
						</td>
					</tr>
					
					<tr>
						<td>Phone : </td>
						<td>
						<input name = "uN" value = "<?php echo "017675679598";?>"/>
						</td>
					</tr>
					
					<tr>
						<td>UserName : </td>
						<td>
						<input name = "uN" value = "<?php echo $_SESSION["curUser"]["uN"];?>" readonly/>
						</td>
					</tr>
					
					
					
					
				</table>
				<input type = "submit"/><br>
				
	
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
</form>	

