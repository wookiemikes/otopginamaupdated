<?php

session_start();

if (!isset($_SESSION['loggedIN'])) {
  # code...
  header('Location: dashboardlogin.php');
  exit();
}

include 'dashboardreports.php';
include 'dashboardlogout.php';

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
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
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
          <li>
            <a href="./dashboard.php">
              <i class="nc-icon nc-tv-2"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./dashboardproducts.php">
              <i class="nc-icon nc-basket"></i>
              <p>Products</p>
            </a>
          </li>
          <li class="active ">
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
            <a href="./salesreports.php">
              <i class="nc-icon nc-chart-bar-32"></i>
              <p>Sales Reports</p>
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
            <a class="navbar-brand" href="#pablo">Admin Dashboard / Stores</a>
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
          <div class="col-lg-12 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-shop text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Total Stores</p>
                      <p class="card-title"><?php echo $total_establishments; ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i> Update Now
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
                      <div class="col-md-10"><b>Store Management</b></div>
                      <div class="col-md-2">
                        <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#addmodal" href="#" style="float:right;">
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
                  <table class="table table-bordered datatables" id="store_table" width="100%" cellspacing="0">
                    <thead class="text-primary">
                      <tr>
                        <th>Company Code</th>
                        <th>Company Name</th>
                        <th>Owner</th>
                        <th>Contact</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Company Code</th>
                        <th>Company Name</th>
                        <th>Owner</th>
                        <th>Contact</th>
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
      <div class="modal-content" onclick="addNewStore();">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add New MSME</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="dashboardstores1.php">
          <div class="modal-body">
            <div class="container-fluid row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="message-text" class="col-form-label"><b>Company Name</b></label>
                  <input class="form-control" type="text" id="company_name" name="company_name">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="message-text" class="col-form-label"><b>Contact Number:</b></label>
                  <input class="form-control" type="text" name="contact_no" id="contact_no">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="message-text" class="col-form-label"><b>Owner Name</b></label>
                  <input class="form-control" type="text" name="ownername" id="ownername">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Nevermind</button>
            <button type="button" name="submit" id="submit" data-dismiss="modal" class="btn btn-primary">Yes, Continue</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      fetch_data();

      function fetch_data() {
        var dataTable = $('#store_table').DataTable({
          "processing": true,
          "serverSide": true,
          "columnDefs": [{
            "orderable": false,
            "targets": [0, 1]
          }],
          "order": [],
          "ajax": {
            url: "dashboardstores_fetch.php",
            type: "POST"
          }
        });
      }
      $("#submit").on('click', function() {
        var contact_no = $("#contact_no").val();
        var ownername = $("#ownername").val();
        var company_name = $("#company_name").val();


        if (contact_no == "" || ownername == "" || company_name == "")
          alert('Wrong Input, Please check your username or password');
        else {
          $.ajax({
            url: 'dashboardstores1.php',
            method: 'POST',
            data: {
              submit: 1,
              contact_no: contact_no,
              ownername: ownername,
              company_name: company_name
            },
            success: function(response) {
              $("#response").html(response);
              $('#store_table').DataTable().destroy();
              fetch_data();
              if (response.indexOf('success') >= 0)
                alert("Data Inserted");
            },
            datatype: 'text'
          });
        }
      });
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

  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>

</body>

</html>