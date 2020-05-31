<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "otopginama");

$columns = array('order_id', 'order_to', 'products','shipping_address','total_price', 'date_ordered');

$query = "SELECT * FROM orders WHERE order_id = '1' ";

if(isset($_POST["search"]["value"])){
	$query .='
	OR order_to LIKE "%'.$_POST["search"]["value"].'%" 
	OR total_price LIKE "%'.$_POST["search"]["value"].'%" 
	OR date_ordered LIKE "%'.$_POST["search"]["value"].'%"
	';
}

if(isset($_POST["order"])){
	$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'';
}
else{
	$query .= 'ORDER BY date_ordered ASC ';
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
  $sub_array[] = $row["order_to"];
  $sub_array[] = $row["total_price"];
  $sub_array[] = $row["date_ordered"];
  $sub_array[] = "	<form action='dashboardorder_update1.php' method='POST'>
					  <input type='hidden' name='order_ida' value='".$row["order_id"]."'>
					  <input type='submit' class ='btn btn-sm btn-info' name ='submit' id = 'submit' value ='Update'>
					</form>  
					  ";
  $data[] = $sub_array;
}
function get_all_data($connect){
	$query = "SELECT * FROM orders";
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