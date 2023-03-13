<?php

if (isset($_POST['DepartureDate'])) {
    ?>
                <div id="respp" style="display:none" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>

    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Nationality = $_POST['Nationality'];
    $NumberOfChild = $_POST['NumberOfChild'];
    $ArivalDate = $_POST['ArivalDate'];
    $DepartureDate = $_POST['DepartureDate'];
    $Message = $_POST['Message'];

    // echo "<h1>HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH</h1>";

$to = 'info@firstclasstours.rw'; 
$from = 'firstclasstours@mwewe.afriregister.com'; 
$fromName = 'SenderName'; 
 
$subject = "New Booking Request"; 
 
$htmlContent = ' 
    <html> 
    <head> 
        <title>New From $name</title> 
    </head> 
    <body> 
        <h1>New Booking from '.$name.'</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Name:</th><td>'.$name.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>'.$email.'</td> 
            </tr> 
            <tr> 
                <th>Phone:</th>
                <td>'.$phone.'</td> 
            </tr> 
            <tr> 
                <th>Nationality:</th><td>'.$Nationality.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>NumberOfChild:</th><td>'.$NumberOfChild.'</td> 
            </tr> 
            <tr> 
                <th>ArivalDate:</th>
                <td>'.$ArivalDate.'</td> 
            </tr> 
            <tr> 
                <th>DepartureDate:</th>
                <td>'.$DepartureDate.'</td> 
            </tr> 
            <tr> 
                <th>Message:</th>
                <td>'.$Message.'</td> 
            </tr> 
        </table> 
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}
    

}

?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.7.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-removebg-preview-139x101.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>BOOK NOW</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"></noscript>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu2 cid-twWKFTK00z" once="menu" id="menu2-8m">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/logo-removebg-preview-139x101.png" alt="first class tours" style="height: 3rem;">
                    </a>
                </span>
                
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-primary display-4" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-primary display-4" href="About us.html">About us</a></li>
                    <li class="nav-item"><a class="nav-link link text-primary display-4" href="page2.html">Itinerary</a>
                    </li><li class="nav-item"><a class="nav-link link text-primary display-4" href="page9.html">travel safety</a></li><li class="nav-item"><a class="nav-link link text-primary display-4" href="reservation.php">Book now</a></li></ul>
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary-outline display-4" href="#">Pay Online</a></div>
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="form5 cid-twWQFjptgR" id="form5-8o">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-7"><strong>For more information about Vocation in </strong><span style="font-size: 17.6px;"><strong>Africa</strong></span><strong>&nbsp;contact us&nbsp;</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="" method="POST" >
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" required class="form-control" value="" id="name-form5-8o">
                        </div>
                       
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" required placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-8o">
                        </div>
                        
                        <div class="col-12 form-group mb-3" data-for="Phone">
                            <input type="text" name="phone" placeholder="Phone" required data-form-field="text" class="form-control" value="" id="url-form5-8o">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="Nationality">
                            <input type="text" name="Nationality" placeholder="Nationality" required data-form-field="text" class="form-control" value="" id="url-form5-8o">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="NumberOfChild">
                            <input type="number" min="1" name="NumberOfChild" placeholder="Number of Child" required data-form-field="text" class="form-control" value="" id="url-form5-8o">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="ArivalDate">
                            <input type="date" name="ArivalDate" placeholder="Arival Date" data-form-field="name" required class="form-control" value="" id="name-form5-8o">
                        </div>

                        <div class="col-md col-sm-12 form-group mb-3" data-for="DepartureDate">
                            <input type="date" name="DepartureDate" placeholder="Departure Date" data-form-field="name" required class="form-control" value="" id="name-form5-8o">
                        </div>
                        
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="Message" placeholder="Message" data-form-field="textarea" class="form-control" required id="textarea-form5-8o"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <input type="submit" class="btn btn-warning display-4" value="Send message">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts2 cid-twWZSbWl50" id="contacts2-8p">
    <!---->
    

    
    
    <div class="container">
        
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-4">
                            <strong>Phone</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7"><a href="https://wa.me/250788913722" class="text-primary">+250788913722</a></p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-4">
                            <strong>Email</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="mailto:info@firstclasstours.rw" class="text-primary">info@firstclasstours.rw</a></p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-4">
                            <strong>Address</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-4">
                            KN3 Street, Kigali-Rwanda</p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-bulleted-list mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-4">
                            <strong>Working Hours</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-4">
                            24 Hours</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer7 cid-trqm7cWcnA" once="footers" id="footer7-62">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2023-2024 First class tours Ltd- All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>



<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>