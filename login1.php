<?php
if (isset($_POST['userlogin'])) {
	$user_name = $_POST["user_name"];
	$userpassword = $_POST["userpassword"];
	$dbusername = " ";
	$dbpassword = " ";
	$_SESSION['estname'] = "";
$query = "SELECT * FROM `d0l310_1020_registration_db` . `1020_users_tbl` WHERE username = '".$user_name."' AND userpassword = '".$userpassword."' ";
$result = mysqli_query($connect,$query);
if (!empty($query)){
	while ($row = mysqli_fetch_assoc($result)) {
			$username = $row['username'];
			$user_password = $row['userpassword'];
		}
		if ($user_name==$username&&$userpassword==$user_password){
			$theform = "SELECT ein FROM `d0l310_1020_registration_db` . `1020_applicants_tbl` WHERE username1 = '".$username."'";
			$result1 = mysqli_query($connect,$theform);
			while ($row = mysqli_fetch_assoc($result1)) {
				$_SESSION['ein'] = $row['ein'];
				
			}
			$_SESSION['profile_status'] = "Logged In!";
			header('Location: 1020_userprofile.php');							
		}
		else {
			echo "<script>alert('Incorrect Username or Password!');</script>";
		}
}
else{
	$_SESSION["username"] =" ";
	$_SESSION["userpassword"] =" ";
	echo "<script>alert('Username or Password Doesn't exist!')</script>";
}
}
 ?>