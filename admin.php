<?php include("include/admin_process.php");?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title><?php echo"$site_name3";?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/metisMenu.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/default-css.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <script type="text/javascript">
<?php echo"$chat";?>
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
          <div class="navbar-brand" style="margin: 10px;">
            <span class="navbar-logo">
                <a href="index.php">
                    <img src="images/logo1.png" alt="" style="height: 6rem; " >
                </a>
            </span>
            <span class="navbar-caption-wrap"></span>
            
        </div>
            <div class="login-box ptb--100">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="login-form-head">
                     
                    <h4>Admin Sign In</h4>
                    <p>Hello there, Sign in and start managing your Admin Page </p>
             
                    </div>

                    <div class="login-form-body">
                    <?php echo"$fail";?>
                      <br>
                      <br>    

               
                                            <?php echo"$username_err";?>
                        <div class="form-gp">
                         
                            <label for="exampleInputEmail">Username</label>
                            <input type="text" id="exampleInputEmail" name="username" required>
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <?php echo"$password_err";?>
                        <div class="form-gp">
                      
                            <label for="exampleInputPassword">Password</label>
                            <input type="password" id="exampleInputPassword" name="password" required>
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                 
                                </div>
                            </div>
                            <!-- <div class="col-6 text-right">
                                <a href="#">Forgot Password?</a>
                            </div> -->
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit"  type="submit">Log In <i class="ti-arrow-right"></i></button>
                   
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="js/jquery3.6.0.js"></script>
    <!-- bootstrap 4 js -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>
    <script>		
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php echo"$yes";?>


</body>



</html></div>

  </body>
</html>
