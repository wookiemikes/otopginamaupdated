<?php 

	 
		
		if (isset($_POST['submit'])) {
				$connect = NEW mysqli('localhost','root','','otopginama');

				$name = $_POST['name'];
				$desc = $_POST['desc'];
				$company_name = $_POST['company_name'];
				$price = $_POST['price'];
				$a = $_REQUEST['tags'];
				$tags = implode(", " ,$a);
				$date_added = date('Y-m-d');
				$addproduct = $connect->query("INSERT INTO `product` (`product_id`, `name`, `desc`, `company_name`, `price`, `tags`, `date_added`) 
				VALUES ('', '$name', '$desc', ' $company_name', '$price', '$tags', '$date_added');");






			    //upload

			        $img_code1 = $_FILES['img_code1']['name'];
			        $target =  "uploads/".basename($_FILES['img_code1']['name']);
			        move_uploaded_file($_FILES["img_code1"]["tmp_name"], $target );
			        if ($_FILES["img_code1"]["size"] > 5000000) // Max File Size: 5MB
			        {
			        echo "File size exceeds maximum.";
			        }




			        $sqlfile = "INSERT INTO `product_img` (`img_id`, `img_code`, `name`) VALUES
					 (NULL, '$img_code1', '$name');";

					 if (mysqli_query($connect,$sqlfile)){
						//echo "Upload Successful";
					} else {
						//echo "Upload Failed";
					}

    		}
?>