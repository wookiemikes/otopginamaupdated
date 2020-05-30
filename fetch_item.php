<?php

//fetch_item.php

include('server/serverpdo.php');

$query = "SELECT product.product_id, product.name, product.price,product_img.name, product_img.img_id, product_img.img_code FROM product INNER JOIN product_img ON product.name = product_img.name ORDER BY product.product_id DESC;";

$statement = $connect->prepare($query);

if($statement->execute())
{
  $result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
    $output .= '
            <div class="col-md-3 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="uploads/' . $row["img_code"] . '" alt="">
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Shoes</div>
                  <a href="#">
                    <h5><b>' . $row["name"] . '</b></h5>
                  </a>
                  <div class="product-price">
                  ₱ ' . $row["price"] . '.00
                  </div>
                </div>
              </div>
            </div>


            


		';
	}
	echo $output;
}
