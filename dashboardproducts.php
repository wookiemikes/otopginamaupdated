<?php 

  session_start();

  if (!isset($_SESSION['loggedIN'])) {
    # code...
    header('Location: dashboardlogin.php');
    exit();
  }

  include 'dashboardreports.php';
  include 'dashboardlogout.php';
  include 'dashboardproducts1.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/websiteicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    OTOP.Ginama || Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />




    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"> 
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/websiteimg.png">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          OTOP GINAMA
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="./dashboard.php">
              <i class="nc-icon nc-tv-2"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active ">
            <a href="#">
              <i class="nc-icon nc-basket"></i>
              <p>Products</p>
            </a>
          </li>
          <li>
            <a href="./dashboardstores.php">
              <i class="nc-icon nc-shop"></i>
              <p>Stores</p>
            </a>
          </li>
          <li>
            <a href="./dashboardorders.php">
               <i class="nc-icon nc-box-2"></i>
               <p>Orders</p>
            </a>
          </li>
          <li>
            <a href="./dashboardinventory.php">
              <i class="nc-icon nc-paper"></i>
              <p>Inventory</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="nc-icon nc-single-02"></i>
              <p>User Settings</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Admin Dashboard / Products</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-rotate" data-toggle="modal" data-target="#logoutmodal" href="#">
                  <i class="nc-icon nc-simple-remove"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-tag-content text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Total Products</p>
                      <p class="card-title"><?php echo $total_products; ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="dashboardproducts.php"><i class="fa fa-refresh"></i> Update Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-layout-11 text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Total Varieties</p>
                      <p class="card-title">P 1,345
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i> Last day
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-10"><b>Product Management</b></div>
                      <div class="col-md-2">
                        <button class="btn btn-sm btn-success" data-toggle="modal" onclick="addNew();" data-target="#addmodal" href="#" style="float:right;">
                          <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-layout-11 text-light nc-simple-add"></i>
                            add
                          </div>
                        </button>
                      </div>
                    </div>
                  </div>

                </h5>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="table-responsive">
                  <table class="table table-bordered" id="product_table" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Supplier</th>
                        <th>Price</th>
                        <th>View Details (?)</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Supplier</th>
                        <th>Price</th>
                        <th>View Details (?)</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.facebook.com/otopginama/" target="_blank">OTOP Ginama</a>
                </li>
                <li>
                  <a href="https://www.dti.gov.ph/programs-projects/otop" target="_blank">One Town, One Product</a>
                </li>
                <li>
                  <a href="https://www.facebook.com/otopginama/" target="_blank">Facebook</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Next Innovations JP
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--Logout Modal -->
    <div class="modal fade" id="logoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Are you sure?
          </div>
          <form method="post" action="dashboard.php">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Nevermind</button>
              <button type="submit" name="logout" class="btn btn-primary">Yes, Let me go</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <!--Add Products Modal -->
  <div class="modal fade bd-example-modal-lg" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add New Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form enctype="multipart/form-data" action="dashboardproducts.php" method="post" >
          <div class="modal-body">
            <div class="container-fluid row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="message-text" class="col-form-label"><b>Product Name:</b></label>
                  <input class="form-control" placeholder="Enter Product Name.." type="text" name="name" id="name">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="message-text" class="col-form-label"><b>Product Description:</b></label>
                  <textarea class="form-control" placeholder="Enter Description..." id="desc" name="desc"></textarea>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="message-text" class="col-form-label"><b>Company:</b></label>
                  <select class="form-control" id="company_name" name="company_name">
                    <option value=""  selected="selected">Select Company Name</option>
                    <?php
                      $sqlcompany = "SELECT company_name FROM company LIMIT 5";
                      $resultset = mysqli_query($connect, $sqlcompany) or die("database error:". mysqli_error($connect));
                      while( $rows = mysqli_fetch_assoc($resultset) ) {
                      ?>
                      <option value="<?php echo $rows["company_name"]; ?>"><?php echo $rows["company_name"]; ?></option>
                      <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="message-text" class="col-form-label"><b>Price:</b></label>
                  <input class="form-control" type="text" placeholder="Enter Amount.." name="price" id="price">
                </div>
              </div>
              <div class="col-lg-12">
                <label for="message-text" class="col-form-label"><b>Product Tags (Choose 1 or more..)</b></label>
                <br>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="shirt">
                  <label class="form-check-label" for="shirt">#shirt</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="souvenirs">
                  <label class="form-check-label" for="souvenirs">#souvenirs</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="processed">
                  <label class="form-check-label" for="processed">#processed</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="sauce">
                  <label class="form-check-label" for="sauce">#sauce</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="jam">
                  <label class="form-check-label" for="jam">#jam</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="snacks">
                  <label class="form-check-label" for="snacks">#snacks</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="personalcare">
                  <label class="form-check-label" for="personalcare">#personalcare</label>
                </div>
                <br>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="cakes">
                  <label class="form-check-label" for="cakes">#cakes</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="notebooks">
                  <label class="form-check-label" for="notebooks">#notebooks</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="coffee">
                  <label class="form-check-label" for="coffee">#coffee</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="food">
                  <label class="form-check-label" for="food">#food</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="beverages">
                  <label class="form-check-label" for="beverages">#beverages</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="spices">
                  <label class="form-check-label" for="spices">#spices</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="handicrafts">
                  <label class="form-check-label" for="handicrafts">#handicrafts</label>
                </div>
                <br>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="meat">
                  <label class="form-check-label" for="meat">#meat</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="canned">
                  <label class="form-check-label" for="canned">#canned</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="condiments">
                  <label class="form-check-label" for="condiments">#condiments</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="ground">
                  <label class="form-check-label" for="ground">#ground</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="powder">
                  <label class="form-check-label" for="powder">#powder</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="officesupplies">
                  <label class="form-check-label" for="officesupplies">#officesupplies</label>
                </div>
                <div class="form-group form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="others">
                  <label class="form-check-label" for="others">#others</label>
                </div>       
              </div>
              <div class="col-lg-12 col-md-6">
                    <label for="message-text" class="col-form-label"><b>Product Snippets (Upload 4 Images)</b> <p class="text-danger"><i>*required</i></p></label>
                    <br>
                    <input type="file" name="img_code1" id="img_code1">
                    <input type="file" name="img_code2" id="img_code2">
                    <input type="file" name="img_code3" id="img_code3">
                    <input type="file" name="img_code4" id="img_code4">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Nevermind</button>
            <button type="submit" name="submit" class="btn btn-primary">Yes, Continue</button>
          </div>
        </form> 
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      fetch_data();
      function fetch_data(){
        var dataTable = $('#product_table').DataTable({
          "processing" : true,
          "serverSide" : true,
          "columnDefs": [{ "orderable": false, "targets":[0,1]}],
          "order" : [],
          "ajax" : {
            url: "dashboardproducts_fetch.php",
            type:"POST"
          }
        });
      }
    });
      
    
  </script>


  <!--   Core JS Files   -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
