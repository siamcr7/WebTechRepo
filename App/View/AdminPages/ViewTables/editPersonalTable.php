<?php
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			$id=$_GET['id'];
			echo $id;
			$result=mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
			$ch=mysqli_fetch_array($result);
			
?>
				<table style="width:100%">
					<tr>
						<td>User ID :</td>
						<td>
						<input name = "ID"  type = "number" value="<?php $ch['id']; ?>"/>
						</td>
					</tr>
					
					<tr>
						<td>Full Name :</td>
						<td>
						<input name = "name" value="<?php $ch['name']; ?>"/>
						</td>
					</tr>
					
					<tr>
						<td>Email :</td>
						<td>
						<input type="email" name ="email" value="<?php $ch['email']; ?> "/>
						</td>
					</tr>
					
					<tr>
						<td>UserName :</td>
						<td>
						<input name = "userName"  value="<?php $ch['userName']; ?>"/>
						</td>
					</tr>
					
					<tr>
						<td>Password :</td>
						<td>
						<input name = "pass"  type = "password" value="<?php $ch['password']; ?>"/>
						</td>
					</tr>
					
					<tr>
						<td>Status :</td>
						<td>
							<select name = "status" value='<?php $ch["status"]; ?>'>
								<option value = "nothing">select</option>
								<option value = "active">Active</option>
								<option value = "pending">Pending</option>
								<option value = "disable">Disable</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Role :</td>
						<td>
							<select name = "role"  value='<?php $ch["role"]; ?>'>
								<option value = "nothing">select</option>
								<option value = "admin">Admin</option>
								<option value = "employee">Employee</option>
								<option value = "customer">Customer</option>
								<option value = "delevery">Delevery Man</option>
							</select>
						</td>
					</tr>
					
				</table>