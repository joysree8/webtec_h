<?php session_start(); 
	if(!isset($_SESSION['user']) && !isset($_COOKIE['user'])){
		header('Location: Login.php');
	}
	if(!isset($_SESSION['user'])){
		$_SESSION['user'] = json_decode(base64_decode($_COOKIE['user']), true);
	}

?>


<html>
<head>
	<title>Header</title>
</head>
<body>
	<fieldset>
		<div class="header">
			
				<div class="profile">Logged in as <u><?= $_SESSION['user']['name']?><span> |</span></u></div>
				<div class="Logout">
					<form method="POST" action="Logout.php">
							<button type="submit" name="logout_btn">Logout</button>
					</form>
				</div>
			</div>
		</div>
	</fieldset>
</body>
</html>