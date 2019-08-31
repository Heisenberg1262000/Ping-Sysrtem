<?php

session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	if (empty($uid)|| empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE user_email = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		}
		else{
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashin' pswd here
				if ($row['user_cpwd'] != $pwd) {
					header("Location: ../index.php?login=PasswordError");
					exit();
				} elseif ($row['user_cpwd'] == $pwd) {
					//Loggin' the user
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					if($row['rinc']==NULL){
					$sql4 = "UPDATE users SET rinc=1 WHERE user_email = '$uid'";
					$result2 = mysqli_query($conn,$sql4);
					}
					$sql5 = "SELECT rinc from users WHERE user_email='$uid'";
					$result3 = mysqli_query($conn,$sql5);
					$row1 = mysqli_fetch_assoc($result3);
					if( $row1['rinc'] == 1){
					header("Location: ../Survey.php?login=LoginSuccess");
					$sql4 = "UPDATE users SET rinc=2 WHERE user_email = '$uid'";
					$result2 = mysqli_query($conn,$sql4);
					exit();
					}else{
						header("Location: ../homepage.php?login=LoginSuccess");
						exit();
					}

				}
			}
		}
	}
}else{
	header("Location: ../index.php?login=error");
	exit();
}