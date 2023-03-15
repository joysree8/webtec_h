<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'logTop.php';?>
    <?php include 'Top.php';?>
	<fieldset>
		<table >
			<tr>
				<td width="25%"><b>
					Account<hr><br>
					    <li><a href="Dashboard.php">Dashboard</a></li>
						<li><a href="viewProfile.php">View Profile</a></li>
						<li><a href="editProfile.php">Edit Profile</a></li>
						<li><a href="changePicture.php">Change Profile Picture</a></li>
						<li><a href="changePassword.php">Change Password</a></li>
						<form method="POST" action="Logout.php">
							<li><button type="submit" name="logout_btn">Log out</button></li>
						</form>
						
					</ul>
				</td>
				<td width="75%">
				
						<legend><b><h2>Welcome to the Dashboard of<span>:  </span><?= $_SESSION['user']['name']?></legend>
						<hr></h2>

				</td>
			</tr>
		</table>
	</fieldset>

	<?php include 'addFooter.php';?>
</body>
</html>