<?php 
if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	if(empty($first)||empty($last)||empty($email)||empty($pwd)||empty($uid)){
		header("Location: ../signup.php?signup=empty");
		exit();
	}else{
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		}else{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=emailInvalid");
				exit();
			}else{
					$cpwd = mysqli_real_escape_string($conn, $_POST['cpassword']);
					if(!($pwd == $cpwd)){
					header("Location: ../signup.php?signup=confirmpasswordError");
					exit();
					}
					else{
					//hashing pswd
					$hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
					//insert user into DB
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, user_cpwd) VALUES ('$first','$last','$email','$uid', '$hashpwd', '$cpwd');";
					mysqli_query($conn, $sql);
					$sql = "SELECT * FROM users WHERE user_first = '$first'";
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result)>0){
						while($row = mysqli_fetch_assoc($result)){
							$userid = $row['user_id'];
							$sql = "INSERT INTO profileimg(userid, status) VALUES ('$userid',1)";
							mysqli_query($conn, $sql);
						}
					}
					header("Location: ../index.php?signup=success");
					exit();
					}
				}
				}
				}
				}
 else{
	header("Location: ../signup.php");
	exit();
}