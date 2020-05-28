<?php

    include 'server/serverconnection.php';


	$total_daily_query = "select total_sales from sales_daily order by date desc LIMIT 1";
	$daily_results = mysqli_query($connect, $total_daily_query);
	while ($list = mysqli_fetch_assoc($daily_results)){

		$total_daily_sales = $list['total_sales'];

    }

	$total_weekly_query = "SELECT SUM(total_sales) FROM sales_daily where date between '17-05-2020' and '23-05-2020'";
	$weekly_results = mysqli_query($connect, $total_weekly_query);
	while ($list = mysqli_fetch_assoc($weekly_results)){

		$total_weekly_sales = $list['SUM(total_sales)'];

	}
	$total_weekly_query = "SELECT SUM(total_sales) FROM sales_daily where date between '17-05-2020' and '23-05-2020'";
	$weekly_results = mysqli_query($connect, $total_weekly_query);
	while ($list = mysqli_fetch_assoc($weekly_results)) {

		$total_weekly_sales = $list['SUM(total_sales)'];
	}

	$toprated_query = "select avg(rating), product_name from product_rate group by product_name order by avg(rating) desc limit 1";
	$toprated_results = mysqli_query($connect, $toprated_query);
	while ($list = mysqli_fetch_assoc($toprated_results)) {
		$rating = $list['avg(rating)'];
		$productname = $list['product_name'];

	}

	$rated_query = "select avg(rating), product_name from product_rate group by product_name order by avg(rating) asc limit 1";
	$rated_results = mysqli_query($connect, $rated_query);
	while ($list = mysqli_fetch_assoc($rated_results)) {
		$ratinglow = $list['avg(rating)'];
		$productnamelow = $list['product_name'];
	}




?>