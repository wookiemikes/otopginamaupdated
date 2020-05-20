<?php

	  session_start();



	if (isset($_POST['login'])) {
		$conn = new mysqli('localhost','root','','otopginama');

		$username = $_POST['username'];
		$password = $_POST['password'];

		$data = $conn->query("SELECT user_id from user WHERE username='$username' and password ='$password'");
		if ($data->num_rows >0){
			$_SESSION['loggedIN'] = '1';
			$_SESSION['username'] = $username;
		}else{
			exit("Login Failed");	
		}
		
	}


 ?>