<?php 

include "server/serverconnection.php";

session_start();
if($_SESSION["username"] == "" && $_SESSION["password"] == ""){
  session_destroy();
  session_unset();
  header("Location: index.php");
  exit;
}

include "register_cont1.php";

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
                    <div id="clockbox"></div>
                        <script type="text/javascript">
                            var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                            var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

                            function GetClock(){
                            var d=new Date();
                            var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
                            var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

                            if(nhour==0){ap=" AM";nhour=12;}
                            else if(nhour<12){ap=" AM";}
                            else if(nhour==12){ap=" PM";}
                            else if(nhour>12){ap=" PM";nhour-=12;}

                            if(nmin<=9) nmin="0"+nmin;
                            if(nsec<=9) nsec="0"+nsec;

                            var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
                            document.getElementById('clockbox').innerHTML=clocktext;
                            }

                            GetClock();
                            setInterval(GetClock,1000);
                        </script>
                    </div>
                </div>
                <div class="ht-right">
                    <a href="#" class="login-panel"><i class="fa fa-user"></i>Login</a>
                </div>
            </div>
        </div>
        <div class="container">
           <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/glogo.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mt-5 col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">Search</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button" class=""><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3 mt-5">
                        <ul class="nav-right">
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span></span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5></h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">₱ 00.00</li>
                        </ul>
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
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Input Credentials</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register Account</h2>
                        <form action="register_cont.php" method="POST">
                            <input type="hidden" name="username" value = "<?php echo $_SESSION['username']; ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="group-input">
                                        <label for="username">First Name:</label>
                                        <input type="text" id="fname" name="fname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="group-input">
                                        <label for="username">Last Name:</label>
                                        <input type="text" name="lname" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="group-input">
                                        <label for="username">Address (<i>Default Shipping Address</i>):</label>
                                        <input type="text" name="address" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="group-input">
                                        <label for="username">Contact Number:</label>
                                        <input type="text" name="contact_no" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="group-input">
                                        <label for="username">Email Address</label>
                                        <input type="text" name="email" >
                                    </div>
                                </div>
                            </div>
                            
                            <input type="submit" name="finalreg" class="site-btn register-btn" value="REGISTER">
                        </form>
                        <div class="switch-login">
                            <a href="./login.html" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Next Innovations JP

                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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