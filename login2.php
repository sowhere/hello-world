<!DOCTYPE html>
<html lang="en">
<head>
        <title>SHARING DATA JARAK JAUH XDATA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
        <link rel="icon" href="/images/logo2.png" type="image/icon type">
</head>
<body>
<?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
<?php endif;?>
            <form action="check-login.php" class="inner-login" method="post">
<div class="limiter">
                <div class="container-login100">
                        <div class="wrap-login100">
                                <div class="login100-pic js-tilt" data-tilt>
                                        <img src="images/img-01.png" alt="IMG">
                                </div>

                                <form class="login100-form validate-form">
                                        <span class="login100-form-title">
                                                Root user sign in
                                        </span>

                                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                                <input class="input100" type="text" name="email" placeholder="Email">
                                                <span class="focus-input100"></span>
                                                <span class="symbol-input100">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                </span>
                                        </div>

                                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                                <input class="input100" type="password" name="pass" placeholder="Password">
                                                <span class="focus-input100"></span>
                                                <span class="symbol-input100">
                                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                                </span>
                                        </div>

                                        <div class="container-login100-form-btn">
                                                <button class="login100-form-btn">
                                                        Login
                                                </button>
                                        </div>

                                        <div class="text-center p-t-12">
                                                <span class="txt1">
                                                        Forgot

						</span>
                                                <a class="txt2" href="#">
                                                        Your Password?
                                                </a>
                                        </div>

                                        <div class="text-center p-t-136">
                                                <a class="txt2" href="#">
Xdata uses information from your account to identify you and allow access to Xdata Cloud. Your use of this site is governed by our Terms of Use and Privacy Policy linked below. Your use of Xdata products and services is governed by the Xdata Customer Agreement linked Here.
                                                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                                </a>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>




<!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script >
	        $('.js-tilt').tilt({
                        scale: 1.1
                })
        </script>
<!--===============================================================================================-->
        <script src="js/main.js"></script>

</body>
</html>

