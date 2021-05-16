<?php  include_once('functions.php');

function top(){
?>

        <!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>Ajibay schools Academy</title>
    
    <!-- SEO Meta-->
    <meta name="description" content="Ajibay schools Academy">
    <meta name="keywords" content="Ajibay schools Academy">
    <meta name="author" content="Ajibay schools Academy">
    
    <!-- viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
            
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">
    <link rel="shortcut icon" href="assets/img/favicon/114x114.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/favicon/96x96.png">
    
    
    <!--Google fonts-->
    <link rel="stylesheet" href="../../fonts.googleapis.com/css4951.css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500">
    
    
    <!-- Icon fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons/css/themify-icons.css">
    
    
    <!-- stylesheet-->    
    <link rel="stylesheet" href="assets/css/vendors.bundle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
  </head>
  
  <body>
   

  <header class="site-header bg-dark text-white-0_5">        
    <div class="container">
      <div class="row align-items-center justify-content-between mx-0">
        <ul class="list-inline d-none d-lg-block mb-0">
          
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
            <i class="ti-headphone mr-2"></i>
            <a href="#">08033030117, 08023785283</a>
           </div>
          </li>
        </ul>
       
        <ul class="list-inline mb-0">
        <li class="list-inline-item mr-0 p-3 border-right border-left border-white-0_1">
            <a href="https://www.facebook.com/pages/Ajibay-Schools/276123149084040?ref=br_tf" target="_blank"><i class="ti-facebook"></i></a>
          </li>
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
        <?php
       
     /*   if(check_admin_user()){
         

        }else{*/
          echo'
          
          <a  class="nav-link" href="admin_account.php" title="" target="_blank"> Login </a>';
       // }

        ?>
       </li>
                
          
          
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
          <a  class="nav-link" href="result" title="" target="_blank"> Result portal </a>
                
          </li>
        
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
            <a  class="nav-link" href="contact_us.php" title=""> Contact </a>
            </li>
        </ul>
      </div> <!-- END END row-->
    </div> <!-- END container-->
  </header><!-- END site header-->
  
  

  <nav class="ec-nav sticky-top bg-white">
  <div class="container">
    <div class="navbar p-0 navbar-expand-lg">
      <div class="navbar-brand">
        <a class="logo-default" href="index.php"><img alt="" src="assets/img/logo/logo.png">
        <img alt="" src="assets/img/logo/logo2.png">
        </a>
      </div>
      <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible" data-toggle="collapse">
        <div class="hamburger hamburger--spin js-hamburger">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </span>
      <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible">
        <ul class="nav navbar-nav ec-nav__navbar">

       
        <li class="nav-item nav-item__has-dropdown">
            <a  class="nav-link" href="index.php" title="">Home</a>
                
            </li>
            
        <li class="nav-item nav-item__has-dropdown">
            <a  class="nav-link" href="about_us.php" title="">About Us</a>
                
            </li>
 
            <li class="nav-item nav-item__has-dropdown">
            <a  class="nav-link" href="facility.php" title="">Facility</a>
                
            </li>
    
          <li class="nav-item nav-item__has-dropdown">
            <a  class="nav-link" href="management.php" title=""> Management </a>
                
            </li>
          <li class="nav-item nav-item__has-dropdown">
            <a  class="nav-link" href="gallery.php" title=""> Gallery </a>
                
            </li>

           
            
            <li class="nav-item nav-item__has-dropdown">
            <a class="nav-link" href="registration.php" title="">  Registration</a>
            </li>
            <li class="nav-item nav-item__has-dropdown">
            <a  class="nav-link" href="old_student.php" title="">  Old students </a>
            </li>
           
        </ul>
      </div>
 
    </div>
  </div> <!-- END container-->		
  </nav> <!-- END ec-nav -->    

<?php
}

function foot(){

	?>
<footer class="site-footer">
  <div class="footer-bottom bg-black-0_9 py-5 text-center">
    <div class="container">
      <p class="text-white-0_5 mb-0">&copy; 2018 Ajibay Schools. All rights reserved. </p>
    </div>
  </div>  <!-- END footer-bottom-->
</footer> <!-- END site-footer -->


<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
     
    <script src="assets/js/vendors.bundle.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="js/jquery-ui-1.11.2.custom/external/jquery/jquery.js"></script>
  </body>


</html>

<?php


}
?>