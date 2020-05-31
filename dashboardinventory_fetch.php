<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "otopginama");

$columns = array('shelve_id', 'product_name', 'QTY');

$query = "SELECT * FROM shelves WHERE shelve_id = '1' ";

if(isset($_POST["search"]["value"])){
	$query .='
	OR product_name LIKE "%'.$_POST["search"]["value"].'%" 
	OR QTY LIKE "%'.$_POST["search"]["value"].'%" 
	';
}

if(isset($_POST["order"])){
	$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'';
}
else{
	$query .= 'ORDER BY QTY desc ';
}

$query1 ='';

if($_POST["length"] != -1){
	$query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();
 
while($row = mysqli_fetch_array($result)){
	$qty = $row["QTY"];
	if ($qty <= 8 && $qty >= 4) {
		$qty = " ";
		$tag = "Please Replenish product supply";
		$status = "";
		$color = "#ffd044";
	} elseif ($qty <= 3) {
		$qty = " ";
		$tag = "Critical Supply! Replenish";
		$status = "";
		$color = "red";
	} elseif ($qty >8) {
		# code...
		$qty = " ";
		$tag = "Sufficent Supply";
		$status = "";
		$color = "green";
	}
	
  $sub_array = array();
  $sub_array[] = $row["shelve_id"];	
  $sub_array[] = $row["product_name"];
  $sub_array[] = $row["QTY"];
  $sub_array[] = "<i style='color:".$color."'>". $status ."".$tag."</i>";
  $sub_array[] = "<button class ='btn btn-sm btn-info' name ='update' id = 'update' value ='".$row["shelve_id"]."'>update</button>";
  $data[] = $sub_array;
}
function get_all_data($connect){
	$query = "SELECT * FROM shelves";
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