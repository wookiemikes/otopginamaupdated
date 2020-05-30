<?php 
include 'server/serverconnection.php';
$true = ",disabled: true;";
$readonly = "readonly"; /*All input type set to readonly*/
$disabled = "disabled"; /*Dropdaown and Date are Disabled*/
$sql_prof = "SELECT * FROM `user_details` WHERE username = '".$_SESSION['username']."'";
$result = mysqli_query($connect,$sql_prof);
while ($list = mysqli_fetch_assoc($result)){
	$userdet_id = $list["userdet_id"];	
    $username = $list["username"];
    $fname = $list["fname"];
    $lname = $list["lname"];
    $address = $list["address"];
    $contact_no = $list["contact_no"];
    $email = $list["email"];
    $date_created = $list["date_created"];
    $update_at = $list["updated_at"];

		

}
