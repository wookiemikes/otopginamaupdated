<?php
$username = $_POST['username'];
$password = $_POST['password'];
$un_query = "SELECT * FROM `otopginama` . `user` WHERE username = '".$username."'";
$username_check = mysqli_query($connect,$un_query);
if ($username_check->num_rows != 0){
	echo "<script>alert('Username Already Exists!');</script>";
	header('Location: index.php');
}
else{
	// INSERT
	$sql_insert = "INSERT INTO `otopginama` . `user` set 
				username = '".$username."',
				password = '".$password."'";	
	//After clicking submit and done inputting data, fields will be cleared
		if (mysqli_query($connect,$sql_insert)){
			$_SESSION['usernname'] = $username;
			$_SESSION['password'] = $password;
			header('Location: register_cont.php');
		}
		else {
			echo "<script>alert('Failed to Save, Try Again!');</script>";
			//$_SESSION['message'] = 'Registration failed!';
		}
}

?>