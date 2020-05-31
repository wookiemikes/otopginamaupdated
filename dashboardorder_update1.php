<?php

if (isset($_POST['submit'])) {


    $order_ida = $_POST['order_ida'];

    $connect = mysqli_connect("localhost", "root", "", "otopginama");
    $viewquery = "SELECT * orders WHERE order_id = '" . $order_ida . "'";
    $viewresults = mysqli_query($connect, $viewquery);

    while ($list = mysqli_fetch_assoc($viewresults)) {

        $_SESSION["order_id"] = $list["order_id"];
        $_SESSION["courier"] = $list["courier"];
        $_SESSION["date_delivered"] = $list["date_delivered"];
        $_SESSION["status"] = $list["status"];
        


        # code...
    }

    header("Location:dashboardorder_update.php");
    exit;
}
