<html>
	<head>
		<title>Greeting Form</title>
	</head>
	<body>
		// Check if input form named 'name' is emptry
		// if not, display greeting message with the name
		<?php if(!empty($_POST['name'])) {
			echo "Greeting, {$_POST['name']}, and welcome.";
		}
		?>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			Enter Your name: <input type="text" name="name" /> <br>
			<input type = "submit" />
		</form>
	</body>
</html>
