<?php 
	
	if (isset($_POST['view'])) {


    $product_id = $_POST['product_id'];

     $connect = mysqli_connect("localhost", "root", "", "otopginama");
     $viewquery = "SELECT product.product_id,product.desc,product.company_name, product.name, product.price,product_img.name, product_img.img_id, product_img.img_code FROM product INNER JOIN product_img ON product.name = product_img.name WHERE product.product_id = '". $product_id."'";
     $viewresults = mysqli_query($connect,$viewquery);

     while ($list = mysqli_fetch_assoc($viewresults)) {

        $_SESSION["product_id"] = $list["product_id"];
        $_SESSION["name"] = $list["name"];
        $_SESSION["price"] = $list["price"];
        $_SESSION["img_id"] = $list["img_id"];
        $_SESSION["img_code"] = $list["img_code"];
        $_SESSION["company_name"] = $list["company_name"];
        $_SESSION["desc"] = $list["desc"];

         
               # code...
     }

     header("Location:product.php");
    exit;
}
