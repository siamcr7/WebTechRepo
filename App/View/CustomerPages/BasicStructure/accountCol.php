<br>
<hr>
<b>Account</b> </br>
<hr>
<ul>
	<li><a href = "<?=hrefThis("customer","dashboardPage.php")?>" align="right">Dashboard</a> </br></li>
	<li><a href = "<?=hrefThis("customer","AccountsPages/viewProfilePage.php")?>" align="right">View Profile</a></li>
	<li><a href = "<?=hrefThis("customer","AccountsPages/editProfilePage.php")?>" align="right">Edit Profile</a></li>
	<li><a href = "<?=hrefThis("customer","AccountsPages/changePasswordPage.php")?>" align="right">Change Password</a></li>
	<li><a href = "<?=hrefThis("customer","AccountsPages/logoutPage.php")?>" align="right">Logout</a></li>
</ul>

<br>
<hr>
<b>Order Menu</b> </br>
<hr>
<ul>
	<li><a href = "<?=hrefThis("customer","OrderPages/viewFullMenu.php")?>" align="right">View Menu!</a> </br></li>
	<li><a href = "<?=hrefThis("customer","OrderPages/viewCartPage.php")?>" align="right">View Cart(<?=includeThis("helper","getNumberOfItemsInCart.php");?>)</a> </br></li>
	<li><a href = "<?=hrefThis("customer","OrderPages/orderConfirmPage.php")?>" align="right">Confirm Order</a> </br></li>
</ul>


<br>
<hr>
<b>Order Related</b> </br>
<hr>
<ul>
	<li><a href = "<?=hrefThis("customer","OrderPages/viewOrderHistory.php")?>" align="right">Order History</a> </br></li>
</ul>