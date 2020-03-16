<?php 

if (isset($_POST['submit'])) {
	$conn = new mysqli('localhost','root','','otopginama');

	$company_name = $_POST['company_name'];
	$ownername = $_POST['ownername'];
	$contact_no = $_POST['contact_no'];

	$sql = $conn->query("SELECT company_id FROM company WHERE company_name = '$company_name'");
	if($sql->num_rows > 0){
		exit("Product exists");
	}else{
		$conn->query("INSERT INTO `company` (`company_id`, `company_name`, `contact_no`, `ownername`) VALUES ('', '".$company_name."', '".$ownername."', '".$contact_no."');");
		exit("Product Added");
	}

	
}

