<?php
session_start();

$connect = NEW mysqli('localhost','root','','otopginama');
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$queryuser = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
	$resultquery = mysqli_query($connect, $queryuser);
	while ($row = mysqli_fetch_assoc($result)) {
		$username1 = $row['username'];
		$password1 = $row['userpassword'];
	}
	if ($username==$username1&&$password==$password1){
		$theform = "SELECT userdet_id FROM `otopginama` . `user_details` WHERE userid_unique = '".$username."'";
		$result1 = mysqli_query($connect,$theform);
		while ($row = mysqli_fetch_assoc($result1)) {
			$_SESSION['userdet_id'] = $row['userdet_id'];
			
		}
		$_SESSION['profile_status'] = "Logged In!";
		header('Location: index.php');							
	}
	else {
		echo "<script>alert('Incorrect Username or Password!');</script>";
	}
	
} else {
	$_SESSION["username"] =" ";
	$_SESSION["password"] =" ";
	echo "<script>alert('Username or Password Doesn't exist!')</script>";
}



?>