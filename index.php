<?php
include "login1.php";
include 'logout.php';
include 'productview1.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Fashi Template">
  <meta name="keywords" content="Fashi, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="assets/img/websiteicon.png">
  <title>OTOP Ginamâ | Empowering the hands of the Filipino People</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <!-- Css Styles -->

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
  <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#adminlogin").on('click', function() {
        var username = $('#username').val();
        var password = $('#password').val();

        if (username == "" || password == "")
          alert('Wrong Input, Please check your username or password');
        else {
          $.ajax({
            url: 'login1.php',
            method: 'POST',
            data: {
              adminlogin: 1,
              uname: username,
              pwd: password
            },
            success: function(response) {
              $("#response").html(response);

              if (response.indexOf('success') >= 0)
                window.location = 'index.php';
            },
            datatype: 'text'
          });
        }
      });
    });
  </script>
</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header Section Begin -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="ht-left">
          <div class="mail-service">
            <div id="clockbox" style="font-size: 14px;"></div>
            <script type="text/javascript">
              var tday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
              var tmonth = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

              function GetClock() {
                var d = new Date();
                var nday = d.getDay(),
                  nmonth = d.getMonth(),
                  ndate = d.getDate(),
                  nyear = d.getFullYear();
                var nhour = d.getHours(),
                  nmin = d.getMinutes(),
                  nsec = d.getSeconds(),
                  ap;

                if (nhour == 0) {
                  ap = " AM";
                  nhour = 12;
                } else if (nhour < 12) {
                  ap = " AM";
                } else if (nhour == 12) {
                  ap = " PM";
                } else if (nhour > 12) {
                  ap = " PM";
                  nhour -= 12;
                }

                if (nmin <= 9) nmin = "0" + nmin;
                if (nsec <= 9) nsec = "0" + nsec;

                var clocktext = "" + tday[nday] + ", " + tmonth[nmonth] + " " + ndate + ", " + nyear + " " + nhour + ":" + nmin + ":" + nsec + ap + "";
                document.getElementById('clockbox').innerHTML = clocktext;
              }

              GetClock();
              setInterval(GetClock, 1000);
            </script>
          </div>
          <div class="phone-service">
            <i class=" 	fa fa-phone"></i>
            0977 281 3159
          </div>
        </div>
        <div class="ht-right">
          <?php
          if (isset($_SESSION['loggedIN'])) {
            $loggedIN = $_SESSION['username'];
            print("<a href='#' class='login-panel' style='margin-right: 30px; float: center;' data-toggle='modal' data-target='#logoutModal'><i class='fa fa-user'></i>Welcome Back, $loggedIN</a>");
            # code...
          } else {
            print('<a href="register.php" class="login-panel" style="float: center;"><i class="fa fa-user"></i>Register</a>
                  <a href="" class="login-panel" style="margin-right: 30px; float: center;" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user"></i>Login</a>');
          }
          ?>


          <div class="top-social">
            <a href="https://www.facebook.com/otopginama"><i class="ti-facebook"></i></a>
            <a href="https://www.dti.gov.ph/otop"><i class="fa fa-globe"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="inner-header">
        <div class="row">
          <div class="col-lg-2 col-md-2">
            <div class="logo">
              <a href="./index.php">
                <img src="assets/img/glogo.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 mt-4">
            <div class="advanced-search">
              <button type="button" class="category-btn">Search Store</button>
              <div class="input-group">
                <input type="text" placeholder="What do you need?">
                <button type="button" class=""><i class="ti-search"></i></button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 text-right col-md-3 mt-4 ">
            <div class="container">
              <ul class="nav-right">
                <li class="cart-icon">
                  <a id="cart-popover" data-placement="bottom" title="Shopping Cart" href="#">
                    <i class="icon_bag_alt"></i>
                    <span class="badge"></span>
                    <span class="total_price">$ 0.00</span>
                  </a>
                  
                </li>
              </ul>
              
            </div>
          </div>
          <div id="popover_content_wrapper" style="display: none; width: 1500px;">

                    <table class="table table-responsive">
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </table>
                    <span id="cart_details">

                    </span>
                    <div class="text-center">
                      <a href="#" class="primary-btn view-card btn-block" id="clear_cart">CLEAR CART</a>
                      <a href="#" class="primary-btn checkout-btn btn-block" id="check_out_cart">CHECK OUT</a>
                    </div>

                  </div>

        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Hero Section Begin -->
  <section class="hero-section">
    <div class="hero-items owl-carousel">
      <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
        <div class="container">
          <div class="row">
            <!--div class="col-lg-5">
              <span>Bag,kids</span>
              <h1>Black friday</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore</p>
              <a href="#" class="primary-btn">Shop Now</a>
            </!--div-->
          </div>
          <div class="off-card">
            <!--h2></!--h2-->
          </div>
        </div>
      </div>
      <div class="single-hero-items set-bg" data-setbg="img/hero-2.jpg">
        <div class="container">
          <div class="row">
            <!--div class="col-lg-5">
              <span>Bag,kids</span>
              <h1>Black friday</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore</p>
              <a href="#" class="primary-btn">Shop Now</a>
            </!--div-->
          </div>
          <div class="off-card">
            <!--h2></!--h2-->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="latest-blog spad">
    <div class="container">
      <div class="benefit-items">
        <div class="row">
          <div class="col-lg-4">
            <div class="single-benefit">
              <div class="sb-icon">
                <i class="ti-heart"></i>
              </div>
              <div class="sb-text">
                <h6>Find things you love</h6>
                <p>made with love</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-benefit">
              <div class="sb-icon">
                <i class="ti-truck"></i>
              </div>
              <div class="sb-text">
                <h6>Free Shipping</h6>
                <p>For items below ₱100</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-benefit">
              <div class="sb-icon">
                <i class="ti-hand-open"></i>
              </div>
              <div class="sb-text">
                <h6>Experience Local</h6>
                <p>Our products are 100% local</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="banner-section spad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="single-banner">
            <img src="img/snacksbanner1.jpg" alt="">
            <div class="inner-text">
              <h4>FOOD</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-banner">
            <img src="img/productsbanner.jpg" alt="">
            <div class="inner-text">
              <h4>HANDICRAFTS</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-banner">
            <img src="img/othersbanner.jpg" alt="">
            <div class="inner-text">
              <h4>ESSENTIALS</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Banner Section Begin -->
  <section id="team" class="team section-bg">
    <div class="container">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>From The Store</h2>
        </div>
      </div>
      <div class="product-show-option">
        <div class="row">
          <div class="col-lg-7 col-md-7">
            <div class="select-option">
              <select class="sorting">
                <option value="">Default Sorting</option>
              </select>
              <select class="p-show">
                <option value="">Show:</option>
              </select>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 text-right">
            <p>Show 01- 09 Of 36 Product</p>
          </div>
        </div>
      </div>
      <div class="product-list">
        <div class="col-lg-12">
          <div class="row" id="display_item">

          </div>
        </div>





        <div class="loading-more">
          <i class="icon_loading"></i>
          <a href="#">
            Loading More
          </a>

        </div>


        </>
  </section>
  <!-- Banner Section End -->

  <!-- Women Banner Section Begin -->

  <!-- Women Banner Section End -->

  <!-- Man Banner Section Begin -->

  <!-- Man Banner Section End -->

  <!-- Instagram Section Begin -->

  <!-- Instagram Section End -->

  <!-- Latest Blog Section Begin -->

  <!-- Latest Blog Section End -->

  <!-- Partner Logo Section Begin -->
  <div class="partner-logo">
    <div class="container">
      <div class="logo-carousel owl-carousel">
        <div class="logo-item">
          <div class="tablecell-inner">
            <img src="img/logo-carousel/logo-1.png" alt="">
          </div>
        </div>
        <div class="logo-item">
          <div class="tablecell-inner">
            <img src="img/logo-carousel/logo-2.png" alt="">
          </div>
        </div>
        <div class="logo-item">
          <div class="tablecell-inner">
            <img src="img/logo-carousel/logo-3.png" alt="">
          </div>
        </div>
        <div class="logo-item">
          <div class="tablecell-inner">
            <img src="img/logo-carousel/logo-4.png" alt="">
          </div>
        </div>
        <div class="logo-item">
          <div class="tablecell-inner">
            <img src="img/logo-carousel/logo-5.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Partner Logo Section End -->

  <!-- Footer Section Begin -->
  <footer class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="newslatter-item">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d266.1967234322016!2d124.64244732540004!3d8.475059522305841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32fff336a094db33%3A0x439b4af793320cc0!2zR2luYW3Dog!5e1!3m2!1sen!2sph!4v1584063936682!5m2!1sen!2sph" width="500" height="310" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-left">
            <div class="footer-logo">
              <a href="index.php"><img src="img/ginafoot.png" alt=""></a>
            </div>
            <ul>
              <li>Address: Rizal St, Cagayan de Oro, Misamis Oriental</li>
              <li>Phone: 0977 281 3159</li>
            </ul>
            <div class="footer-social">
              <a href="https://www.facebook.com/otopginama/"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/explore/locations/2325661814183027/ginama/"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="footer-widget">
            <h5>OTOP Ginama</h5>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Shop</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
    <div class="copyright-reserved">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright-text">
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Next Innovations JP

            </div>
            <div class="payment-pic">
              <img src="img/payment-method.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--Modals-->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="border-bottom: 0 none;">
          <h5 class="modal-title" id="exampleModalCenterTitle"><img src="assets/img/websiteimg.png" style="margin: 2px 10px 2px 0px;" alt="" height="30px" width="33px"><b>LOGIN</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="index.php" method="POST">
          <div class="modal-body mt-3 mb-5">
            <div class="container-fluid">
              <div class="form-group">
                <input class="form-control" type="text" id="username" name="username" placeholder="Email/Username">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" id="password" name="password" placeholder="Password">
              </div>
              <p style="float:right;">No account yet? <a href="register.php" style="color:#db9a37;">Register Here</a></p>
            </div>

          </div>
          <div class="modal-footer mt-2" style="border-top: 0 none;">
            <button type="button" class="btn btn-light pl-5 pr-5 text-secondary" style="border-radius: 0px;" data-dismiss="modal">CANCEL</button>
            <button type="submit" name="login" id="login" class="btn text-white pl-5 pr-5" style="border-radius: 0px; background-color: #db9a37;">LOGIN</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--Logout Modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <form method="post" action="index.php">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Nevermind</button>
            <button type="submit" name="logout" class="btn btn-primary">Yes, Let me go</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Footer Section End -->

  <!-- Js Plugins -->
  <script>
    $(document).ready(function() {

      load_product();

      load_cart_data();

      function load_product() {
        $.ajax({
          url: "fetch_item.php",
          method: "POST",
          error: function(data) {
            console.log(data);
          },
          success: function(data) {
            console.log(data);
            //$(div).find('#display_item').html(data);
            $("#display_item").empty().append(data);
            //$('#display_item').html(data);
          }
        });
      }

      function load_cart_data() {
        $.ajax({
          url: "fetch_cart.php",
          method: "POST",
          dataType:"json",
          success:function(data)
          {
            $("#cart_details").empty().append(data.cart_details);
            //$('#').html(data.);
            $('.total_price').text(data.total_price);
            $('.badge').text(data.total_item);
          }
        });
      }

      $('#cart-popover').popover({
        html: true,
        container: 'body',
        content: function() {
          return $('#popover_content_wrapper').html();
        }
      });

      $(document).on('click', '.add_to_cart', function() {
        var product_id = $(this).attr("id");
        var product_name = $('#name' + product_id + '').val();
        var product_price = $('#price' + product_id + '').val();
        var product_quantity = $('#quantity' + product_id).val();
        var action = "add";
        if (product_quantity > 0) {
          $.ajax({
            url: "action.php",
            method: "POST",
            data: {
              product_id: product_id,
              product_name: product_name,
              product_price: product_price,
              product_quantity: product_quantity,
              action: action
            },
            success: function(data) {
              load_cart_data();
              alert("Item has been Added into Cart");
            }
          });
        } else {
          alert("lease Enter Number of Quantity");
        }
      });

      $(document).on('click', '.delete', function() {
        var product_id = $(this).attr("id");
        var action = 'remove';
        if (confirm("Are you sure you want to remove this product?")) {
          $.ajax({
            url: "action.php",
            method: "POST",
            data: {
              product_id: product_id,
              action: action
            },
            success: function() {
              load_cart_data();
              $('#cart-popover').popover('hide');
              alert("Item has been removed from Cart");
            }
          })
        } else {
          return false;
        }
      });

      $(document).on('click', '#clear_cart', function() {
        var action = 'empty';
        $.ajax({
          url: "action.php",
          method: "POST",
          data: {
            action: action
          },
          success: function() {
            load_cart_data();
            $('#cart-popover').popover('hide');
            alert("Your Cart has been clear");
          }
        });
      });

    });
  </script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery.zoom.min.js"></script>
  <script src="js/jquery.dd.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/counterup/counterup.min.js"></script>
  <script src="vendor/venobox/venobox.min.js"></script>
  <script src="vendor/mobile-nav/mobile-nav.js"></script>
  <script src="vendor/wow/wow.min.js"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/rapid.js"></script>
</body>

</html>