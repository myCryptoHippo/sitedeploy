<?php

require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Us!</title>

    <!-- Favicon -->
<link rel="shortcut icon" href="imagesNEW/favicon.ico" type="image/x-icon"> 
    <!-- Bootstrap CSS -->
    <link href="cssNEW/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendorsNEW/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="vendorsNEW/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendorsNEW/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="vendorsNEW/owl_carousel/owl.carousel.css" media="all">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="cssNEW/style.css" media="all" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="jsNEW/jquery.tiltedpage-scroll.js"></script>

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['contact'])) { //user logging in

        require 'contactSender.php';
        
    }
}
?>
<body>
        <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="imgNEW/logo.png" style = "width: 200%" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3 style = "color: #cd8be0">Menu</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="index.html" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="about.html" title="about">About us</a></li>
                    <li><a class="smoothscroll"  href="https://www.medium.com/myCryptoHippo" title="services">Articles/Blog</a></li>
                    <li data-toggle="modal" data-target="#exampleModal"><a class="smoothscroll"  href="#" title="resources">Resources</a></li>
                    <li><a class="smoothscroll"  href="events.html" title="works">Events</a></li>
                    <li><a class="smoothscroll"  href="login.php" title="clients">Login</a></li>
                    <li><a class="smoothscroll"  href="signup.php" title="clients">Signup</a></li>
                    <li><a class="smoothscroll"  href="contact.php" title="contact">Contact Us</a></li>
                </ul>
    
    
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/mycryptohippo/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/mycryptohippo?lang=en"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/mycryptohippo/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text" style= "padding-right: 10px;">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5" style="background: url('imagesNEW/chatty.png') no-repeat fixed">
        <h2 class="wow fadeInUp">Contact Us</h2>
        <ol class="breadcrumb wow fadeInUp" style="width: 100%;">
            <li><a href="index.html">Home /</a></li>
            <li><a href="contact.php" class="active"> Contact Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
    <div class="contact_map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23095.170418598!2d-79.38729330187802!3d43.650325774811236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2d6e35e66aef%3A0x638cc78c5200968d!2sDeloitte!5e0!3m2!1sen!2sca!4v1522689918147" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    </div>
    <!-- End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info wow fadeInLeft">
                    <h2 style="color:#ba71dc">Contact Info</h2>
                    <p>There are many reasons why you'd like to get in touch, and we encourage you to do so to help improve myCryptoHippo! </p>
                    <p>If you have any concerns with the way myCryptoHippo operates, the functionality of our platform, insider-information on what's to come, info on our events and initatives or anything else, please leave us a message!</p>
                    <div class="location">
                        <div class="location_laft">
                            <a class="f_location" href="#">location</a>
                            <a href="#">phone</a>
                            <a href="#">fax</a>
                            <a href="#">email</a>
                        </div>
                        <div class="address">
                            <a href="#">8 Adelaide St W #200, Toronto, ON M5H 0A9 (located at Deloitte University)</a>
                            <a href="#">+1 416 550 1132</a>
                            <a href="#">(626) 935-3026</a>
                            <a href="#">info@myCryptoHippo.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message wow fadeInRight">
                    <h2 style="color:#ba71dc">Send Us a Message</h2>
                    <form class="form-inline contact_box validate-form" action="contact.php" method="post">
                        <div class ="validate-input" data-validate="This field is required" style="width: 100%">
                            <input type="text" name="first" class="form-control input_box input100" placeholder="First Name*">
                        </div>
                        <div class ="validate-input" data-validate="This field is required" style="width: 100%">
                            <input type="text" name="last" class="form-control input_box input100"  placeholder="Last Name*">
                        </div>
                        <div class ="validate-input" data-validate="Valid email is required: ex@abc.xyz" style="width: 100%">
                            <input type="text" name="email" class="form-control input_box input100"  placeholder="Your Email*">
                        </div>
                        <div class ="validate-input" data-validate="This field is required" style="width: 100%">
                            <input type="text" name="subject" class="form-control input_box input100" placeholder="Subject*">
                        </div>
                        <div class ="validate-input" data-validate="This field is required" style="width: 100%">
                            <textarea class="form-control input_box input100" name="message" placeholder="Message*"></textarea>
                        <button type="submit" name="contact" class="btn btn-default">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 10vh">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign up to view resources!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="imagesNEW/Mascot.png" style="padding-left: 8vw; width: 70%">
        <br>In order to view resources, you're going to need a myCryptoHippo account! Don't worry, the process is quick and easy. Just press the button below!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="signup.php">
        <button type="submit" class="btn btn-primary">Sign me up!</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- End All contact Info -->

        <!--footer-->
        <section class="bg-footer" id="connect" style="margin-top: 0px; padding: 80px 0px;">
            <div class="container" >
                <div class="row">
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12 text-center wow fadeIn">
                        <h1 style="color:#9975a7">myCryptoHippo</h1>
                        <p class="mt-4">
                            <a href="https://twitter.com/mycryptohippo?lang=en" target="_blank"><em class="ion-social-twitter text-twitter-alt icon-sm mr-3"></em></a>
                            <a href="https://github.com/myCryptoHippo" target="_blank"><em class="ion-social-github text-facebook-alt icon-sm mr-3"></em></a>
                            <a href="https://www.linkedin.com/company/mycryptohippo?originalSubdomain=ca" target="_blank"><em class="ion-social-linkedin text-linkedin-alt icon-sm mr-3"></em></a>
                            <a href="https://www.facebook.com/mycryptohippo/" target="_blank"><em class="ion-social-facebook text-facebook-alt icon-sm mr-3"></em></a>
                        </p>
                        <p class="pt-2 text-muted">
                            &copy; 2018 myCryptoHippo. All rights reserved. 
                        </p>
                    </div>
                </div>
            </div>
        </section>

    <!-- End Footer Area -->
    <!-- jQuery JS -->
    <!-- Bootstrap JS -->
    <script src="jsNEW/bootstrap.min.js"></script>
        <script src="jsNEW/main.js"></script>
    <script src="vendorsNEW/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendorsNEW/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendorsNEW/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendorsNEW/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendorsNEW/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendorsNEW/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendorsNEW/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendorsNEW/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendorsNEW/stellar/jquery.stellar.js"></script>
    <script src="jsNEW/validate.js"></script>
    <script src="jsNEW/theme.js"></script>
</body>
</html>
