<?php

session_start();

if (!isset($_SESSION['loggedIN'])) {
  # code...
  header('Location: dashboardlogin.php');
  exit();
}

include 'salesreports1.php';
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
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
  google.charts.load('current', {
    packages: ['corechart', 'bar']
  });
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {

    var data = google.visualization.arrayToDataTable([
      ['City', '2010 Population', ],
      ['New York City, NY', 8175000],
      ['Los Angeles, CA', 3792000],
      ['Chicago, IL', 2695000],
      ['Houston, TX', 2099000],
      ['Philadelphia, PA', 1526000]
    ]);

    var options = {
      title: 'Population of Largest U.S. Cities',
      chartArea: {
        width: '50%'
      },
      hAxis: {
        title: 'Total Population',
        minValue: 0
      },
      vAxis: {
        title: 'City'
      }
    };

    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

    chart.draw(data, options);
  }
</script>

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
          <li class="active ">
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
            <a class="navbar-brand" href="#pablo">Admin Dashboard / Sales Reports</a>
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
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header col-md-12 col-sm-12 row ">
                <div class="col-md-6 col-sm-6">
                  <h5 class="card-title">Revenue Chart (Daily) <i class="nc-icon nc-sound-wave text-success" aria-hidden="true"></i></h5>
                </div>
                <div class="col-md-6 col-sm-6"><button class="btn btn-sm btn-success" style="float: right;">Generate Excel File</button></div>
                <div class="col-md-6">
                </div>
              </div>
              <div class="card-body ">

                <div id="chart_div" style="width:1000px; height:400px"></div>



              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> <a href="salesreports.php">Refresh</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Daily</p>
                      <p class="card-title">₱ <?php echo $total_daily_sales, ".00"; ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i><a href="#" data-toggle="modal" data-target="#dailyModal">Update Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Weekly</p>
                      <p class="card-title">₱ <?php echo $total_weekly_sales, ".00"; ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i><a href="#" data-toggle="modal" data-target="#weeklyModal">Update Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Monthly </p>
                      <p class="card-title"> ₱
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i><a href="#" data-toggle="modal" data-target="#monthlyModal">Update Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Highest Rated Product <i class="fa fa-star text-warning"></i></h5>
              </div>
              <div class="card-body">
                <table class="table">
                  <tr>
                    <td>PRODUCT NAME</td>
                    <td>RATING</td>
                  </tr>
                  <tr>
                    <td> <?php echo $productname; ?></td>
                    <td><?php echo $rating; ?></td>
                  </tr>
                </table>
              </div>
              <div class="card-footer">
                <hr />
                <div class="card-stats">
                  <i class="fa fa-history"></i> Refresh
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Lowest Rated Product <i class="fa fa-star text-danger"></i></h5>
              </div>
              <div class="card-body">
                <table class="table">
                  <tr>
                    <td>PRODUCT NAME</td>
                    <td>RATING</td>
                  </tr>
                  <tr>
                    <td> <?php echo $productnamelow; ?></td>
                    <td><?php echo $ratinglow; ?></td>
                  </tr>
                </table>
              </div>
              <div class="card-footer">
                <hr />
                <div class="card-stats">
                  <i class="fa fa-history"></i> Refresh
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
  <!--Refresh Sales-->
  <div class="modal fade" id="generateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="border-bottom: 0 none;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="dashboard.php" method="POST">
          <div class="modal-body">
            Are you sure?
          </div>
          <div class="modal-footer mt-2" style="border-top: 0 none;">
            <button type="button" class="btn btn-light pl-5 pr-5 text-secondary" style="border-radius: 0px;" data-dismiss="modal">CANCEL</button>
            <button type="submit" class="btn text-white pl-5 pr-5" style="border-radius: 0px; background-color: #db9a37;">Generate</button>
          </div>
        </form>
      </div>
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
  <!--Daily Generate-->
  <div class="modal fade" id="dailyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Generate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="salesreports.php" method="POST">
          <div class="modal-body">
            Generate Daily Total Sales?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="dailygen" class="btn btn-primary">Generate</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="weeklyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Generate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="salesreports.php" method="POST">
          <div class="modal-body">
            Generate Weekly Sales?
            <br>
            <div class="col-md-12 row">
              <div class="col-md-12"></div>
              <div class="col-md-6 mb-3">
                <label for="lastName">From<i>(date)</i>:</label>
                <input type="date" class="form-control" name="dateweek1" id="lastName" placeholder="" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">To<i>(date)</i>:</label>
                <input type="date" class="form-control" name="dateweek2" id="lastName" placeholder="" value="" required>

              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="weeklygen" class="btn btn-primary">Generate</button>
        </form>
      </div>
    </div>
  </div>
  </div>
  <div class="modal fade" id="monthlyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Generate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="salesreports.php" method="POST">
          <div class="modal-body">
            Generate Monthly Total Sales
            <div class="col-md-12 row">
              <div class="col-md-12"></div>
              <div class="col-md-6 mb-3">
                <label for="lastName">From<i>(date)</i>:</label>
                <input type="date" class="form-control" name="datemonth1" id="lastName" placeholder="" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">To<i>(date)</i>:</label>
                <input type="date" class="form-control" name="datemonth2" id="lastName" placeholder="" value="" required>

              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="monthlygen" class="btn btn-primary">Generate</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      fetch_data();

      function fetch_data() {
        var dataTable = $('#salesprod_table').DataTable({
          "processing": true,
          "serverSide": true,
          "columnDefs": [{
            "orderable": false,
            "targets": [0, 1]
          }],
          "order": [],
          "ajax": {
            url: "sales.php",
            type: "POST"
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