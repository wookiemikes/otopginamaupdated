<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "otopginama");

$columns = array('product_id', 'name', 'desc', 'company_name');

$query = "SELECT * FROM product WHERE product_id = '1' ";

if(isset($_POST["search"]["value"])){
	$query .='
	OR name LIKE "%'.$_POST["search"]["value"].'%" 
	OR desc LIKE "%'.$_POST["search"]["value"].'%" 
	OR company_name LIKE "%'.$_POST["search"]["value"].'%"
	';
}

if(isset($_POST["order"])){
	$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'';
}
else{
	$query .= 'ORDER BY name ASC ';
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
  $sub_array[] = $row["product_id"];	
  $sub_array[] = $row["name"];
  $sub_array[] = $row["desc"];
  $sub_array[] = $row["company_name"];
  $sub_array[] = "<button class ='btn btn-sm btn-info' name ='update' id = 'update' value ='".$row["product_id"]."'>VIEW</button>";
  $data[] = $sub_array;
}
function get_all_data($connect){
	$query = "SELECT * FROM product";
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