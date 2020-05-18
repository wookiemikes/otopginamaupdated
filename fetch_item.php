<?php

//fetch_item.php

include('server/serverconnection.php');

$query = "SELECT * FROM product ORDER BY product_id DESC";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetch();
	$output = '';
	foreach($result as $row)
	{
		$output .= '
		<div class="col-lg-4 col-sm-6">
            <div class="product-item">
              <div class="pi-pic">
                <img src="img/products/product-9.jpg" alt="">
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
                  <h5>Converse Shoes</h5>
                </a>
                <div class="product-price">
                  $34.00
                  <span>$35.00</span>
                </div>
              </div>
            </div>
          </div>
		';
	}
	echo $output;
}
