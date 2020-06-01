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
                      
                      <input type="hidden" name="product_id" value="' . $row["product_id"] . '">
                      <li class="quick-view"><input type="submit" name="view" value="+ Quick View"></li>
                    </form>
                  </ul>
                </div>
                <div class="pi-text">
                 <a href="#">
                    <h5><b>' . $row["name"] . '</b></h5>
                  </a>
                  <div class="product-price">
                  ₱ ' . $row["price"] . '.00
                  </div>
                  <div class="catagory-name">
                    <input type="hidden" name="hidden_name" id="name' . $row["product_id"] . '" value="' . $row["name"] . '" />
                    <input type="hidden" name="hidden_price" id="price' . $row["product_id"] . '" value="' . $row["price"] . '" />
                    <input type="text" name="quantity" id="quantity' . $row["product_id"] . '" class="form-control" value="1" />
                    <input type="button" name="add_to_cart" id="' . $row["product_id"] . '" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />
                  </div>
                  
                </div>
              </div>
            </div>


            


		';
	}
	echo $output;
}
