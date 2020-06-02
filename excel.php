<?php 
	$conn = mysqli_connect("localhost","root","","otopginama");
	$output = '';
	if(isset($_POST["generate"]))
	{

		$query = "SELECT * FROM `d0l310_1020_registration_db` . `1020_applicants_tbl` WHERE status ='APPROVED'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0)
		{
			$output .= '
				<table class="table" style="border: solid black 1px;">
						<thead style="background-color: #7da8ed;border-top: solid black 1px;"></thead>
						<thead>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px; ">PROVINCE</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px;">BUSINESS NAME</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px;">REGISTERED NAME</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px;">TIN</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px;">ADDRESS</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px;">OWNER/MANAGER</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px;">CONTACT NUMBERS</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px;">FAX NUMBERS</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px; ">EMAIL ADDRESS</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px;">INDUSTRIES</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px; ">TOTAL MALE</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px; ">TOTAL FEMALE</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px;">TOTAL EMPLOYEES</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px; ">EIN</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px; ">NAME AND ADDRESS OF LABOR UNION</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px; ">DATE FILED</th>
	                         <th style="background-color: #7da8ed; border-bottom: solid black 1px; ">DATE REGISTERED</th>
	                    </thead>
	             ';
	         while($row = mysqli_fetch_array($result))
	         {
	         	$output .= '
	         	<tr></tr>
			    <tr border: solid black 1px;>
			       <td>'.$row["province"].'</td>
			       <td>'.$row["estname"].'</td> 
			       <td>'.$row["estname"].'</td>
			       <td>'.$row["tin"].'</td>   
			       <td>'.$row["barangay"].','.$row["municipality"].'</td>
			       <td>'.$row["ownername"].'</td>
			       
			       <td>'.$row["telephone"].'</td>
			       <td>'.$row["fax"].'</td>
			       <td>'.$row["useremail"].'</td>
			       
			       <td>'.$row["industries"].'</td>   
			       <td>'.$row["total_male"].'</td>
			       <td>'.$row["total_fmale"].'</td>  
			       <td>'.$row["total_total"].'</td>
			       <td>'.$row["ein"].'</td>
			       <td>'.$row["labor_union"].''.$row["union_address"].'</td>
			       <td>'.$row["date_filed"].'</td>
			       <td>'.$row["date_registered"].'</td>
			       
			     </tr>';
			   

	         }
	         $output .= '</table>';
	         header('Content-Type: application/xls');
	         header('Content-Disposition: attachment; filename=RULE 1020 - Approved Applicants List.xls');
	         echo $output;
	      }else {

			header("Location: 1020_main_dashboard_report.php");
    		exit;
		}

		}
