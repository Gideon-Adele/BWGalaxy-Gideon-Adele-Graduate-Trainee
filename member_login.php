<?php include "includes/db.php" ?>
<!DOCTYPE html>
<html lang="en">
<!-- AUTHOR: Gideon Adele

<head>
    <meta charset="utf-8">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <title>Member Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Hospital Data Simulation systems" />
    <!-- STYLE BEGINS -->
    <link rel="stylesheet" href="stylee/anibeui-plus.css" media="screen">

    <link rel="stylesheet" href="stylee/anibe-ui.css" media="screen">
    <!-- Social Share Kit CSS -->
    <link rel="stylesheet" href="stylee/social-share-kit.css" type="text/css">
    <link rel="stylesheet" href="stylee/animate.css" type="text/css" media="all">


    <link rel="stylesheet" href="stylee/font-awesome.css" media="all">

    <!-- STYLE ENDS -->
    <!-- URL BAR SCRIPT -->
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

        $('.navbar-nav .nav-link').click(function(){
    $('.navbar-nav .nav-link').removeClass('active');
    $(this).addClass('active');
})

    </script>
   

    <style type="text/css">
.bg { 
    /* The image used */
    background-image: url("images/page4-img3.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
        body {
  
  height: 100%;

}
#login .container #login-row #login-column #login-box {
  margin-top: 190px;
  max-width: 600px;
  height: 350px;
  border: 2px solid #128779;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}

.text-info{
    color: #128779 !important;
    position: center !important;
  
}
.btn-info {
    color: #fff;
    background-color: #128779 !important;
    border-color: #128779 !important;
    position: center !important;
}

.text-center{
    position: center !important;
}
    </style>

</head>
<!-- BODY SECTION BEGINS -->

<body>
   

    <!-- NAVIGATION BAR BEGINS -->
    <div class="header">
        <!-- HEADER DIV BEGINS-->
        <div class=" navbar navbar-toggleable-md fixed-top navbar-inverse">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <center>
                <a href="index.php class="navbar-brand"><img src="images/logopic.png" height="50px" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
            </center>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarResponsive">

                    <ul class="nav navbar-nav anibe-auto">

                      <li class="nav-item">
                    <a class="nav-link active" style="padding-left: 0px;" href="index.php">HOME</a>
                </li> 
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="people">LOGIN MENU<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="people">
                <li><a href="admin_login.php">Admin</a></li>
                <li class="divider"></li>
                <li><a href="member_login.php">Team member</a></li>
                <li class="divider"></li>
              </ul>
            </li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            
           
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  
                    </ul>
                </div>
            </div>
        </div>
    </div>
               
<!--LOGIN SECTION BEGINS -->
<div class="bg">
<div id="login">
                <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="includes/mem_login.php" method="post">
                            <h3 class="text-center text-info">Member Login </font></h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="email" placeholder="Enter Email" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" placeholder="Enter Password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                               
                             <div align="center" class="form-group">
                                 <input type="submit" name="mem_login" class="btn btn-info btn-md" value="Log In">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/><br/>
</div>
<!-- LOGIN SECTION ENDS -->
   
    <!--footer start from here-->
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 footer-col">
                    <h4 class="heading7">Need help? <br/><br/>REACH US NOW</h4>
                    <ul class="footer-ul">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Get online POS</a></li>
                        <li><a href="#">Advanced search</a></li>
                        
                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-col">
                    <h4 class="heading7">SUGGEST A NEW MARKET</h4><br/>
                    <ul class="footer-ul">
                        <li><a href="#">Market surveys</a></li>
                        <li><a href="#">Request to be enlisted</a></li>
                        <li><a href="#">Featured Business</a></li>                       
                    </ul>
                </div>
            <div class="col-md-3 col-sm-6 footer-col">
                    <h4 class="heading7">VIEW ALL MARKET</h4><br/>
                    <ul class="footer-ul">
                        <li><a href="#">Registered markets</a></li>
                        <li><a href="#">Market Region</a></li>
                        <li><a href="#">Ngalaba World</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-col">
                   <ul class="footer-social">
                        <div class="ssk-group ssk-count">
                            <a href="#" class="ssk ssk-instagram"></a>
                            <a href="#" class="ssk ssk-twitter"></a>
                            <a href="#" class="ssk ssk-facebook"></a>
                        </div>

                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright  footer by Anibe Sam-->
        
        <!-- //copyright -->
    </footer>
    <div class="anibe-footer">
            <div class="container">
            <ul>
                <li align="right" style="font-size:40%;" class="float-lg-right"><a href="#top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-up" aria-hidden="true">TOP</i></a></li>
            </ul>
           
            

                <p>&copy; 2018 Hospital Data Simulations Systems by <a href=""><b>Gideon Adele</b></a> All rights reserved.</p>

            </div>
        </div>
    <!-- NAVIGATION BAR ENDS -->
    <!-- SCRIPTS BEGINS -->

    


    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/social-share-kit.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/anibescript.js"></script>
    <script src="js/anibecustom.js"></script>
</body>

</html>