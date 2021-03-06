<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "otopginama");

$columns = array('order_id', 'name', 'email','contact_no','shipping_address', 'products', 'payment_type', 'to_pay','date_ordered','date_delivered','status');

$query = "SELECT * FROM orders WHERE order_id = '1'";

if(isset($_POST["search"]["value"])){
	$query .='
	OR name LIKE "%'.$_POST["search"]["value"].'%" 
	OR products LIKE "%'.$_POST["search"]["value"].'%" 
	OR payment_type LIKE "%'.$_POST["search"]["value"].'%"
	OR to_pay LIKE "%'.$_POST["search"]["value"].'%"
	OR date_ordered LIKE "%'.$_POST["search"]["value"].'%"
	';
}

if(isset($_POST["order"])){
	$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'';
}
else{
	$query .= 'ORDER BY status ASC ';
}

$query1 ='';

if($_POST["length"] != -1){
	$query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();
 
while($row = mysqli_fetch_array($result)){
  $sub_array = array();
  $sub_array[] = $row["order_id"];	
  $sub_array[] = $row["name"];
  $sub_array[] = $row["products"];
  $sub_array[] = $row["payment_type"];
  $sub_array[] = $row["to_pay"];
  $sub_array[] = $row["date_ordered"];
  $sub_array[] = $row["status"];
  $sub_array[] = "	<form action='dashboardorders.php' method='POST'>
					  <input type='hidden' name='order_id' value='".$row["order_id"]."'>
					  <input type='submit' class ='btn btn-sm btn-info' name ='submit' id = 'submit' value ='Update'>
					</form>  
					  ";
  $data[] = $sub_array;
}
function get_all_data($connect){
	$query = "SELECT * FROM orders WHERE status = 'PENDING'";
	$result = mysqli_query($connect, $query);
	return mysqli_num_rows($result);
   }
   
   $output = array(
	"draw"    => intval($_POST["draw"]),
	"recordsTotal"  =>  get_all_data($connect),
	"recordsFiltered" => $number_filter_row,
	"data"    => $data
   );
   
   echo json_encode($output);
?>