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
                    <form action="index.php" method="post">
                      <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                    
                      <input type="hidden" name="product_id" value="' . $row["product_id"] . '">
                      <li class="quick-view"><input type="submit" name="view" value="+ Quick View"></li>
                    </form>
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
