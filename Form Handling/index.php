<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Form Handling</title>
</head>
<body>

	<h1>Login</h1> 
	<form action="welcome.php" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username">
		<br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password">
		<br>
		<button type="submit">Login</button>
	</form>
	
</body>
</html>