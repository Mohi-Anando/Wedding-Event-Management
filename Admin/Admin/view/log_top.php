<?php include '../controller/log_top.php';?>

<html>
<head>
	<title>Header LogOut</title>
	<style>
	</style>
</head>
<body>
	<fieldset>
		<div class="header" align='right'>
			
				<div class="profile">Logged in as <u><?= $_SESSION['user']['name']?><span> |</span></u></div>
				<div class="logout">
					<form method="POST" action="../controller/logout.php">
							<button type="submit" name="logout_btn">Log out</button>
					</form>
				</div>
			</div>
		</div>
	</fieldset>
</body>
</html>