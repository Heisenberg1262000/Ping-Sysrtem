<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
			<div class = "jumbotron">
				<center><h1>Login</h1></center>
				<a href="signup.php">
					Don't have an account? Click Here
				</a>
			</div>
			<form  action="include/login.inc.php" method="post">
				<div class="form-group">
					<label for="Em">Email :</label>
					<input type="Email" class="form-control" name="email" id="Em" placeholder="Enter mail Id" required>
					<small id = "emailHelp" class="form-text text muted">We wont share your Mail.</small>
				</div>
				<div class="form-group">
					<label for="ps">Password :</label>
					<input type="Password" class="form-control" name="pwd" id="ps" placeholder="Enter Password" required>
				</div>
				<button type="submit" class="btn btn-primary btn-lg" name="submit">Login</button>

				
			</form>
	</div>
</body>
</html>