<?php
include 'server/serverconnection.php';
if (isset($_POST['submit'])) {


    $order_id = $_POST['order_id'];

    $connect = mysqli_connect("localhost", "root", "", "otopginama");
    $viewquery = "SELECT * FROM `orders` WHERE order_id = '".$order_id."'";
    $viewresults = mysqli_query($connect, $viewquery);
    

    while ($row = mysqli_fetch_assoc($viewresults)) {

        $_SESSION["order_id"] = $row["order_id"];
        $_SESSION["date_delivered"] = $row["date_delivered"];
        $_SESSION["status"] = $row["status"];
        


        # code...
    }


    header("Location:dashboardorder_update.php");
    exit;
}
if (isset($_POST['updateorder'])) {


        
        $order_update = $_POST['order_update'];
		$date_update = $_POST['date_update'];
		$statusupdate = $_POST['statusupdate'];
        $updates = "UPDATE `orders` SET 
        date_delivered = '".$date_update."', 
        status = '".$statusupdate."'
        WHERE `orders`.`order_id` = '".$order_update."';";

        if (mysqli_query($connect,$updates)){
						//echo "Upload Successful";
					} else {
						//echo "Upload Failed";
					}

    



    header("Location:dashboardorders.php");
    exit;

}
