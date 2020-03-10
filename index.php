<!DOCTYPE html>
<html lang="en">
<!-- AUTHOR: Gideon
     LEAD DEVELOPER: Adele Gideon O
     
     -->


<!-- HEAD SECTION BEGINS -->

<head>
    <meta charset="utf-8">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <title>BW Galaxy</title>
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
    <!-- SCRIPTS ENDS -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--  HEAD SECTION ENDS -->
</head>
<!-- BODY SECTION BEGINS -->

<body>
    <!-- #region Jssor Slider Begin -->
    <script src="js/jssor.slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {
            var jssor_1_options = {
                $AutoPlay: 1,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>

    <style>
        /* jssor slider loading skin oval css */
        
        .jssorl-oval img {
            animation-name: jssorl-oval;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        
        @keyframes jssorl-oval {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        
        .jssorb05 {
            position: absolute;
        }
        
        .jssorb05 div,
        .jssorb05 div:hover,
        .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('images/b10.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        
        .jssorb05 div {
            background-position: -7px -7px;
        }
        
        .jssorb05 div:hover,
        .jssorb05 .av:hover {
            background-position: -37px -7px;
        }
        
        .jssorb05 .av {
            background-position: -67px -7px;
        }
        
        .jssorb05 .dn,
        .jssorb05 .dn:hover {
            background-position: -97px -7px;
        }
        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        
        .jssora22l,
        .jssora22r {
           
        }
        
        .jssora22l {
            background-position: -10px -31px;
        }
        
        .jssora22r {
            background-position: -70px -31px;
        }
        
        .jssora22l:hover {
            background-position: -130px -31px;
        }
        
        .jssora22r:hover {
            background-position: -190px -31px;
        }
        
        .jssora22l.jssora22ldn {
            background-position: -250px -31px;
        }
        
        .jssora22r.jssora22rdn {
            background-position: -310px -31px;
        }
        
        .jssora22l.jssora22lds {
            background-position: -10px -31px;
            opacity: .3;
            pointer-events: none;
        }
        
        .jssora22r.jssora22rds {
            background-position: -70px -31px;
            opacity: .3;
            pointer-events: none;
        }
    </style>

    <!-- NAVIGATION BAR BEGINS -->
    <div class="header">
        <!-- HEADER DIV BEGINS-->
        <div class=" navbar navbar-toggleable-md fixed-top navbar-inverse">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <center>
                <a href="index.php" class="navbar-brand"><img src="images/logopic.png" height="50px" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
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
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;         </ul>
                </div>
            </div>
        </div>
        <!-- Header Class Div Ends -->
        <br/><br/><br/><br/>
    </div>

    <header>
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;
    width:1500px;height:600px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-oval" style="position:absolute;
        top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19.0px;position:relative;top:70%;
            width:38px;height:78px;" src="images/oval.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;
        left:0px;width:1500px;height:600px;overflow:hidden;">
                <div>
                    <img data-u="image" src="images/onlinemark.jfif" />
                    <div style="position: absolute; top: 40%; left: 5px;
                 width: 50%; height: 30%;text-align:left;
                 line-height:40%;">
                        <h1 align="center" class="animated bounce" style="color:black">
                            <blockquote>
                                <p style="font-size:30px; font-color: black; font-family:'italic';">
                                  <img src="images/labatext.png" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reaching Nigerian markets
                                </p>
                            </blockquote>
                        </h1>
                    </div>
                </div>

                <div>
                    <img data-u="image" src="images/cart.png" />
                    <div style="position: absolute; top: 40%; left: 35px;
                 width: 60%; height: 30%; text-align:right;
                 line-height:40%;">
                        <h1 align="center" class="animated bounce" style="color:brown">
                            <blockquote> <b style="font-size:43px;" text-color:"blacksss">
                                <img src="images/labatext.png" /> <br/>
                             </b></blockquote>
                        </h1>
                    </div>
                </div>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <script type="text/javascript">
            jssor_1_slider_init();
        </script>
        <!-- #endregion Jssor Slider End -->
    </header>
 <div align="center">
        <div class="jumbotron specialjum">
            <div class="over container body-content">
                <h1 style="width:80%; font-style:bold; color:#128779;"><b style="font-size:55px;">Welcome To <font color="#128779">BW Galaxy</font></b></h1>
                <p class="animated bounce" align="center" style="width:80%; font-family: SamsungSansSharp; font-size:24px;">
                </p>
            </div>


<!-- BUTTON FOR LOGINS -->



             



<!-- BUTTON FOR LOGINS ENDS HERE -->



        </div>
    </div>

<!-- SERVICES BEGINS -->


<div class="container">
 <h1 align="center" style="font-size:30px; font-family:SamsungSansSharp ; color:#128779;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:30px;"></b></h1>
        <div class="row">
           
             <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div style="background-color:#128779; color:white;" class="card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center><img align="center" src="images/labatext.png" width="170px" height="100px"></center>
                    <div class="card-block">
                        <h4 style="font-family: SamsungSansSharp;" text align="center">Get listed on Ngalaba</h4>
                    </div>
                </div>
            </div>

            
             <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center><img align="center" src="images/map.png" width="180px" height="150px"></center>
                    <div class="card-block">
                        <h4 style="font-family: SamsungSansSharp;" text align="center">National Map of all markets</h4>
                    </div>
                </div>
            </div>

            <div  class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div style="background-color:#128779; color:white;" class="card">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center> <a href="#"><img align="center" src="images/app.png" width="170px" height="100px"></a></center>
                    <div class="card-block">
                        <h4 style="font-family: SamsungSansSharp;" text align="center">Download app on play store</h4>
                    </div>
                </div>
            </div>
             <!-- END HERE -->
        </div>
       </div>
<br/> <br/>

    <!-- SERVICES ENDS -->

<!-- SECTION BEGINS -->
   
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
           
            

                <p>&copy; 2018 BW Galaxy Website <a href=""><b>Gideon Adele</b></a> All rights reserved.</p>

            </div>
        </div>
    <!-- NAVIGATION BAR ENDS -->
    <!-- SCRIPTS BEGINS -->

    <script type="text/javascript">
        $(document).ready(function() {
            $(".nav li").removeClass("active"); //this will remove the active class from  
            //previously active menu item 
            $('#home').addClass('active');
            //for demo
            //$('#demo').addClass('active');
            //for sale 
            //$('#sale').addClass('active');
        });
    </script>

    


    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/social-share-kit.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/anibescript.js"></script>
    <script src="js/anibecustom.js"></script>
</body>

</html>