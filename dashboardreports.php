<?php

	include 'server/serverconnection.php';
	//Product Count
	$total_products = 0;

	$total_prod_query = "SELECT * FROM product";

	$total_prod_results = mysqli_query($connect, $total_prod_query);

	while ($list = mysqli_fetch_assoc($total_prod_results)){

		$total_products +=1;

	}


	//Store Number

	$total_establishments = 0;

	$total_est_query = "SELECT * FROM company ";

	$total_est_results = mysqli_query($connect, $total_est_query);

	while ($list = mysqli_fetch_assoc($total_est_results)){

		$total_establishments +=1;

	}

	//Inventory Item Status

	$total_sufficient = 0;

	$total_suf_query = "SELECT * FROM shelves WHERE QTY >= 9 ";

	$total_suf_results = mysqli_query($connect, $total_suf_query);

	while ($list = mysqli_fetch_assoc($total_suf_results)){

		$total_sufficient +=1;

	}

	$total_warning = 0;

	$total_warning_query = "SELECT * FROM shelves WHERE QTY <=8 AND QTY >=4 ";

	$total_warning_results = mysqli_query($connect, $total_warning_query);

	while ($list = mysqli_fetch_assoc($total_warning_results)){

		$total_warning +=1;

	}

	$total_critical = 0;

	$total_critical_query = "SELECT * FROM shelves WHERE QTY <= 3";

	$total_critical_results = mysqli_query($connect, $total_critical_query);

	while ($list = mysqli_fetch_assoc($total_critical_results)){

		$total_critical +=1;

	}

		//Orders Delivered

		$total_cancel = 0;

		$total_cancel_query = "SELECT * FROM orders WHERE status = 'cancelled'";
	
		$total_cancel_results = mysqli_query($connect, $total_cancel_query);
	
		while ($list = mysqli_fetch_assoc($total_cancel_results)){
	
			$total_cancel +=1;
	
		}
	
	//Orders Delivered

	$total_delivered = 0;

	$total_deli_query = "SELECT * FROM orders WHERE status = 'Completed'";

	$total_deli_results = mysqli_query($connect, $total_deli_query);

	while ($list = mysqli_fetch_assoc($total_deli_results)){

		$total_delivered +=1;

	}

	//Order Pending

	$total_pending = 0;

	$total_pen_query = "SELECT * FROM orders WHERE status = 'pending' ";

	$total_pen_results = mysqli_query($connect, $total_pen_query);

	while ($list = mysqli_fetch_assoc($total_pen_results)){

		$total_pending +=1;

	}
	//

?>