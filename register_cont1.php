<?php 

	$mysqli = NEW mysqli('localhost','root','','otopginama');
	if(isset($_POST['finalreg'])){
		$userid_unique = $_POST['userid_unique'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$contact_no = $_POST['contact_no'];
		$date_created = date("Y-m-d g:i:s");
		$updated_at = date("Y-m-d g:i:s");
		$insert = $mysqli->query("INSERT INTO `user_details` (`userdet_id`, `userid_unique`, `fname`, `lname`, `address`, `contact_no`, `email`, `date_created`, `updated_at`) VALUES (NULL, '$userid_unique', '$fname', '$lname', '$address', '$contact_no', '$email', '$date_created', '$updated_at');");	  
		if ($insert){
				?>
			<script type="text/javascript">
				if (window.confirm('Login to Continue.'))
				{
				   window.location.href = 'login.php';
				}else{
					window.confirm('Error, Please Try Again!');
					window.location.href = 'register_cont.php';
				}

			</script>
			<?php
			}
		}

	
 ?>