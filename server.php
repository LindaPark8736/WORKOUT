<?php
session_start();


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'Firstdb');

// REGISTER USER
if(isset($_POST['reg_user'])) {
	// receive all input values from the form
	$FName = mysqli_real_escape_string($db, $_POST['FName']);
	$LName = mysqli_real_escape_string($db, $_POST['LName']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	$select1 = "SELECT * FROM Client WHERE username = '$username'";
	$select2 = "SELECT * FROM Client WHERE email = '$email'";
	$result1 = mysqli_query($db, $select1);
	$result2 = mysqli_query($db, $select2);

// first check the database to make sure 
// a user does not already exist with the same username and/or email
// Finally, register user if there are no errors in the form
	if (empty($username)) {
		$error[] = 'Username is required';
	} elseif (empty($email)) {
		$error[] = 'Email is required';
	} elseif (empty($password)||$password=="") {
		$error[] = 'Password is required';
	} elseif (strlen($password) < 8) {
		$error[] = 'Password must be at least 8 characters long';
	} elseif ($password != $password_2){
		$error[] = 'Password does not match';
	} else {
		if(mysqli_num_rows($result1) > 0) {
		$error[] = 'Username already exist!';
		} elseif (mysqli_num_rows($result2) > 0) {
			$error[] = 'Email already exists!';
		} else {
			$ppassword = md5($password);
			$insert = "INSERT INTO Client(FName,LName,username,email,password) VALUES('$FName','$LName','$username','$email','$ppassword')";
			mysqli_query($db,$insert);
			header('location:Payment.php');
		} 
	}
}
// PAYMENT USER
// if (isset($_POST['pay_user'])) {

// 	header('location: login.php');
// }

// // LOGIN USER
// if (isset($_POST['login_user'])) {
//   $username1 = mysqli_real_escape_string($db, $_POST['username1']);
//   $password1 = mysqli_real_escape_string($db, $_POST['password1']);

//   if (empty($username1)) {
// 	$error[] = 'Username is required';
//   } elseif (empty($password1)||$password1=="") {
// 	$error[] = 'Password is required';
//   } else {
// 	$ppassword1 = md5($password1);
//   	$query1 = "SELECT * FROM Client WHERE username = '$username1'";
// 	$query2 = "SELECT * FROM Client WHERE password = '$ppassword1'";
//   	$results1 = mysqli_query($db, $query1);
// 	$results2 = mysqli_query($db, $query2);

//   	if (mysqli_num_rows($results1) == 1) {
// 		if (mysqli_num_rows($results2) == 1) {
// 			header('location: Main.php');
// 		} else {
// 			$error[] = 'Password is incorrect';
// 		}
//   	} else {
// 		$error[] = 'Username is incorrect';
//   	}
//   }
// }
if (isset($_POST['login_user'])) {
	
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        $error[] = 'Username is required';
    } elseif (empty($password) || $password == "") {
        $error[] = 'Password is required';
    } else {
		$ppassword = md5($password);
		$query1 = "SELECT * FROM Client WHERE username = '$username'";
		$results1 = mysqli_query($db, $query1);
		$query2 = "SELECT * FROM Client WHERE password = '$ppassword'";
		$results2 = mysqli_query($db, $query2);

		if (mysqli_num_rows($results1) > 0) {
			if (mysqli_num_rows($results2) > 0) {
				header('location:Main.php');
			} else {
				$error[] = 'Password is incorrect';			
			}
		} else {
			$error[] = 'Username is incorrect';
		}
    }
}
?>