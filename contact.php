<?php
session_start();

include_once("database/db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="shortcut icon" href="img/logo.jpg">
   <!-- GOOGLE FONTS CDN LINK -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&family=Teko:wght@400;500;600;700&display=swap" rel="stylesheet">
   <!-- CSS LINK -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <!-- AOS ANIAMATION PLUGIN -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- OWL CAROUSEL PLUGIN -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <!-- MAGNIFIC POPUP PLUGIN -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="css/custom.css">
   <title>StartUpPodero</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
      $(document).ready(function() {
         $('#contactForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
               type: 'POST',
               url: 'ajax/contactjs.php',
               data: $(this).serialize(),
               success: function(data) {
                  $('#statusMessage').addClass('success').html(data);
                  setTimeout(function() {
                     $('#statusMessage').fadeOut('slow', function() {
                        $(this).html('').removeClass('success').show();
                     });
                  }, 5000);
               }
            });
            this.reset();
         });
      });
   </script>
   <style>
      /* #pageHeader {
         background: url("img");
         background-repeat: no-repeat;
         background-size: cover;
         background-position: top;
         /* margin-bottom: 100px; */
      /* } */ 

      .success {
         padding: 10px;
         margin-top: 20px;
         margin-bottom: 18px;
         border-color: #4CAF50;
         font-family: Arial, Helvetica, sans-serif;
         background-color: #dff0d8;
         color: #3c763d;
         text-align: center;
         border-radius: 6px;
         font-size: 1rem;
      }
   </style>
</head>

<body>



   <!-- ======================================== NAVIGRATION ======================================== -->
   <nav id="navigration" class="navbar fixed-top p-0">
      <div class="container">
         <!-- <a class="logo" href="#"><img src="img/logo.png" alt=""></a> -->
         <a class="logo" href="#"><img style="height: 50px" src="img/logo.png" />
         </a>
         <div class="sidenav">
            <div class="header">
               <a class="logo d-lg-none" href="#">StartUpPodero Ventures </a>
               <a href="#" class="d-lg-none" id="showsidenav"><img src="img/icon/letter-x.png" alt="" />
               </a>
            </div>
            <ul class="mb-0">
               <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="aboutus.html">About US</a>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="service.html">Services</a>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="packages.html">Our Packages</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="Community.html">My Community</a>
               </li>

               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="collapse" href="">Blogs <i class="fal fa-angle-down"></i></a>
                  <div id="menu3" class="dropdown-menus collapse">
                     <a class="dropdown-item" href="blogs.html"><span>Blog</span></a>
                     <a class="dropdown-item" href="success.html"><span>success stories</span></a>
                     <a class="dropdown-item" href="teams.html"><span>Our Teams</span></a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="event.html">Events</a>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
               </li>
            </ul>
         </div>
         <div id="hamburger" class="d-lg-none">
            <img src="img/icon/menu.png" class="img01" alt="" />
         </div>
      </div>
   </nav>





   <!-- ======================================== PAGE HEADER ======================================== -->
   <section id="pageHeader">
      <div class="overlay">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="txt text-center">
                     <div class="sec-header">
                        <h2>CONTACT US<span>.</span></h2>
                        <p><a href="index.html">HOME</a> <span>/</span> CONTACT US</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>





   <!-- ======================================== CONTACT SECTION ======================================== -->
   <section id="contactSection">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
               <div class="part1">
                  <div class="sec-header">
                     <h2>WE ARE ALWAYS HERE TO HELP YOU<span>.</span></h2>
                     <p>There are many variatns of passages the majority have suffered alteration in some foor randomised words believable.</p>
                  </div>
                  <div class="icon-box wow fadeInLeftBig" data-wow-duration="1.5s">
                     <div class="icon">
                        <i class="fal fa-map-marker-alt"></i>
                     </div>
                     <div class="txt">
                        <p>VISIT US</p>
                        <span> Hanuman Nagar, Chaitanyapuri, Hyderabad, Telangana, India, 500060</span>
                     </div>
                  </div>
                  <div class="icon-box wow fadeInLeftBig" data-wow-duration="1.5s">
                     <div class="icon">
                        <i class="fal fa-envelope"></i>
                     </div>
                     <div class="txt">
                        <p>EMAIL ADDRESS</p>
                        <span>startupodero@gmail.com</span>
                     </div>
                  </div>
                  <div class="icon-box mb-0 wow fadeInLeftBig" data-wow-duration="1.5s">
                     <div class="icon">
                        <i class="fal fa-phone-alt"></i>
                     </div>
                     <div class="txt">
                        <p>CALL NOW</p>
                        <span>+91 9966946187</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <form action="contact.php" id="contactForm" method="POST" class="wow fadeInUpBig" data-wow-duration="1.5s">
                  <div id="statusMessage"></div>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="name" placeholder="Your Name *" required>
                     </div>
                     <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="address" placeholder="Email Address *" required>
                     </div>
                     <div class="form-group col-md-6">
                        <input type="tel" class="form-control" name="phoneno" placeholder="Phone Number">
                     </div>
                     <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="subject" placeholder="Subject *" required>
                     </div>
                     <div class="form-group col-12">
                        <textarea class="form-control" rows="8" cols="80" name="message" placeholder="Write Message *" required></textarea>
                     </div>
                  </div>
                  <button type="submit" name="submit" class="btn layer-btn">SEND MESSAGE</button>
               </form>
            </div>
         </div>
      </div>
   </section>



   <!-- <section id="googleMap">
      <div class="container">
         <div class="row">
            <div class="col">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.00977795363!2d90.34928585186965!3d23.78077774443207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1615455043438!5m2!1sen!2sbd" width="100%" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
         </div>
      </div>
   </section> -->



   <!-- ======================================== FOOTER SECTION ======================================== -->
   <section id="footerSection">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
               <div class="footer-box">
                  <a href="#" class="logo">StartUpPodero Ventures </a>
                  <p class="about">
                     Welcome to StartUpPodero Ventures, where we craft cutting-edge websites and apps, and host dynamic events that empower your business's growth!</p>
                  <div class="social-links">
                     <a href="https://www.linkedin.com/company/startupodero/"><i class="fab fa-linkedin"></i></a>
                     <a href="https://www.instagram.com/startupoderoventures?igsh=bm9ycHkyOWlneTBr"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="https://www.facebook.com/profile.php?id=61558936349282"><i class="fab fa-facebook"></i></a>
                     <a href="https://chat.whatsapp.com/Ca7ZhGCB3uS2fN1wwpgH4T"><i class="fab fa-whatsapp"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
               <div class="footer-box box2">
                  <p class="title">EXPLORE</p>
                  <ul>
                     <li><a href="contact.php">Support</a></li>
                     <li><a href="policies.html">Privacy Policies</a></li>
                     <li><a href="terms.html">Terms & Conditions</a></li>
                     <li class="mb-0"><a href="contact.php">Help</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
               <div class="footer-box box3">
                  <p class="title">CONTACT</p>
                  <div class="icon-box">
                     <div class="icon">
                        <i class="fal fa-map-marker-alt"></i>
                     </div>
                     <div class="txt">
                        <span>Address: Hanuman Nagar, Chaitanyapuri, Hyderabad, Telangana, India, 500060</span>
                     </div>
                  </div>
                  <div class="icon-box">
                     <div class="icon">
                        <i class="fal fa-envelope"></i>
                     </div>
                     <div class="txt">
                        <span>startupodero@gmail.com</span>
                     </div>
                  </div>
                  <div class="icon-box mb-0">
                     <div class="icon">
                        <i class="fal fa-phone-alt"></i>
                     </div>
                     <div class="txt">
                        <span>+91 9966946187</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="footer-box box4">
                  <p class="title">NEWSLETTER</p>
                  <form>
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                     </div>
                     <button type="submit" class="btn" name="button"><i class="fal fa-envelope"></i></button>
                  </form>
                  <span>Sign up for our latest news & articles. We won’t give you spam mails.</span>
               </div>
            </div>
         </div>
         <div class="copy-right">
            <div class="row">
               <div class="col">
                  <span> Copyright &copy;2024 <a href="https://tsbridgeedu.in/" target="_blank" style="color: rgb(63, 63, 189); font-size: 22px;"> TS Bridge Edu.</a> All rights reserved.</span>

               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- ======================================== SCROLL TO TOP ICON ======================================== -->
   <a href="#" class="scroll-up">
      <i class="fal fa-chevron-up"></i>
   </a>


   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/font-awesome-pro.js"></script>
   <!-- SCROLL ANIAMATION Plugin -->
   <script src="js/wow.min.js"></script>
   <!-- MIXIT UP Plugin -->
   <script src="js/mixitup.min.js"></script>
   <!-- MAGNIFIC POPUP Plugin -->
   <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- CounterUp Plugin -->
   <script src="js/jquery.counterup.min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <!-- OWL CAROUSEL Plugin -->
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>