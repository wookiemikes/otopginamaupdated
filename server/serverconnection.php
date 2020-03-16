<?php 
$servername = "localhost";
$username = "root";
$password="";
$db = "otopginama";
//Establish Connnecion
$connect = new mysqli($servername,$username,$password,$db);

if (!$connect) {
	//echo "Disconnected";
}else{
	//echo "Connected";
}
?>