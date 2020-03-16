<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "otopginama");

$columns = array('company_id', 'company_name', 'contact_no', 'ownername');

$query = "SELECT * FROM company WHERE company_id = '1' ";

if(isset($_POST["search"]["value"])){
	$query .='
	OR company_name LIKE "%'.$_POST["search"]["value"].'%" 
	OR contact_no LIKE "%'.$_POST["search"]["value"].'%" 
	OR ownername LIKE "%'.$_POST["search"]["value"].'%"
	';
}

if(isset($_POST["order"])){
	$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'';
}
else{
	$query .= 'ORDER BY company_name ASC ';
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
  $sub_array[] = $row["company_id"];	
  $sub_array[] = $row["company_name"];
  $sub_array[] = $row["contact_no"];
  $sub_array[] = $row["ownername"];
  $data[] = $sub_array;
}
function get_all_data($connect){
	$query = "SELECT * FROM company";
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