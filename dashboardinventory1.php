<?php 

if (isset($_POST['add'])) {
	$conn = new mysqli('localhost','root','','otopginama');

	$product_name = $_POST['product_name'];
	$QTY = $_POST['QTY'];

	$sql = $conn->query("SELECT shelve_id FROM shelves WHERE product_name = '$product_name'");
	if($sql->num_rows > 0){
		exit("Product exists");
	}else{
		$conn->query("INSERT INTO `shelves` (`shelve_id`, `product_name`, `QTY`) VALUES ('', '".$product_name."', '".$QTY."');");
		exit("Product Added to Inventory");
	}

	
}

?>