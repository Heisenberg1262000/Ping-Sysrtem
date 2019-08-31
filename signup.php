<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <script>
            function checkPassword(form) { 
                password1 = form.pwd.value; 
                password2 = form.cpassword.value; 
  
                
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                
                else{ 
                    alert("Password Match: Welcome!") 
                    return true; 
                } 
            } 
        </script>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<center><h1>Signup</h1></center>
		</div>
		<form action = "include/signup.inc.php" method="POST" onSubmit = "return checkPassword(this)">
			<div class="form-group">
					<label for="fn">First Name :</label>
					<input type="text" class="form-control" name="first" id="fn" placeholder="Enter First Name" required>
			</div>
			<div class="form-group">
					<label for="ln">Last Name :</label>
					<input type="text" class="form-control" name="last" id="ln" placeholder="Enter Last Name">
			</div>
			<div class="form-group">
					<label for="Em">Email :</label>
					<input type="Email" class="form-control" name="email" id="Em" placeholder="Enter Email Id" required>
			</div>
			<div class="form-group">
					<label for="un">Username :</label>
					<input type="text" class="form-control" name="uid" id="un" placeholder="Enter User Name" required>
			</div>
			
			<div class="form-group">
					<label for="ps">Password :</label>
					<input type="password" class="form-control" name="pwd" id="ps" placeholder="Enter Password">
			</div>
			<div class="form-group">
					<label for="cps">Confirm Password :</label>
					<input type="password" class="form-control" name="cpassword" id="cps" placeholder="Enter Password Again">
			</div>
			<button type="submit" class="btn btn-primary btn-lg" name="submit">Signup</button>

		</form>
	</div>

</body>
</html>