<?php
include 'server/serverconnection.php';
if (isset($_POST['update'])) {


    $shelve_id = $_POST['shelve_id'];

    $connect = mysqli_connect("localhost", "root", "", "otopginama");
    $viewquery = "SELECT * FROM `shelves` WHERE shelve_id = '".$shelve_id."'";
    $viewresults = mysqli_query($connect, $viewquery);
    

    while ($row = mysqli_fetch_assoc($viewresults)) {

        $_SESSION["shelve_id"] = $row["shelve_id"];
        $_SESSION["product_name"] = $row["product_name"];
        $_SESSION["QTY"] = $row["QTY"];
        


        # code...
    }


    header("Location:dashboardinventory_update.php");
    exit;
}
if (isset($_POST['updateinventory'])) {


        
        $shelve_update = $_POST['shelve_update'];
		$product_name = $_POST['product_name'];
		$QTY_update = $_POST['QTY_update'];
        $updates = "UPDATE `shelves` SET 
        QTY = '".$QTY_update."'
        WHERE `shelves`.`shelve_id` = '".$shelve_update."';";

        if (mysqli_query($connect,$updates)){
						//echo "Upload Successful";
					} else {
						//echo "Upload Failed";
					}

    



    header("Location:dashboardinventory.php");
    exit;

}
