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
                    <a href="register.php" class="login-panel" style="float: center;"><i class="fa fa-user"></i>Register</a>
                    <a href="" class="login-panel" style="margin-right: 30px; float: center;" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user"></i>Login</a>
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
                    <div class="col-lg-3 text-right col-md-3 mt-4">

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="#" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">

                        </div>
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">First Name<span></span></label>
                                <input type="text" id="fir" value="Bojak" readonly>
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Last Name<span></span></label>
                                <input type="text" id="last" value="Horseman" readonly>
                            </div>

                            <div class="col-lg-12">
                                <label for="zip">Delivery Address</label>
                                <input type="text" id="zip" value="Mexico, Pampanga" readonly>
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address<span></span></label>
                                <input type="text" id="email" value="bojakhorsemen@gmail.com" readonly>
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span></span></label>
                                <input type="text" id="phone" value="0915682939" readonly>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">

                        </div>
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>
                                    <li class="fw-normal">3N HANDRICRAFT'S COIN PURSE x 4 <span>₱ 220.00</span></li>

                                    <li class="fw-normal">Subtotal <span>₱ 220.00</span></li>
                                    <li class="total-price">Total <span>₱ 220.00</span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            CASH ON DELIVERY
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            GLOBE GCASH
                                            <input type="checkbox" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

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
                            <a href="#"><img src="img/ginafoot.png" alt=""></a>
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
                        <button type="submit" class="btn text-white pl-5 pr-5" style="border-radius: 0px; background-color: #db9a37;">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>