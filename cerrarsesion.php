<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<body>

		<?php
		session_start();
		session_destroy();
		header("location:login.html");
		?>
	</body>
	</head>
	</html>