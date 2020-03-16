<?php

	  session_start();

	  if (isset($_SESSION['loggedIN'])) {
	    header('Location:dashboard.php');
	    exit();
	    # code...
	  }


	if (isset($_POST['adminlogin'])) {
		$conn = new mysqli('localhost','root','','otopginama');

		$username = $_POST['uname'];
		$password = $_POST['pwd'];

		$data = $conn->query("SELECT admin_id from admin WHERE username='$username' and password ='$password'");
		if ($data->num_rows >0){
			$_SESSION['loggedIN'] = '1';
			$_SESSION['uname'] = $username;
			exit("Login Success");
		}else{
			exit("Login Failed");	
		}
		
	}


 ?>