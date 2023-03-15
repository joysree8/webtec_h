<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php include 'logTop.php';?>
    <?php include 'Top.php';?>
	<fieldset>
		<table>
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
					<fieldset>
						<legend>CHANGE PROFILE PICTURE</legend>
						<form method="post" action="uploadPicture.php" enctype="multipart/form-data">
							<table>
								<tr><td><img src="<?= $_SESSION['user']['profilePicPath'] ?>" height="150" width="200"></td></tr>
								<tr><td><input type="file" name="file_to_upload" value="Choose a file"></td></tr>	
							</table>
							<hr><center>
							<input type="submit" name="submit" value="Submit">
                            </center>
						</form>
						
					</fieldset>
				</td>
			</tr>
		</table>
	</fieldset>

	<?php include 'addFooter.php';?>

</body>
</html>