<?php


require_once 'model/ManagerAdmin.php';

$logCtrler = new ManagerAdmin;

?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>IT JOBS</title>
  <link rel="icon" href="images/FindJobdex.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/rangeslider.css">

  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar container py-0 " role="banner">

      <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">IT JOBS</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html">Home</a></li>
                <li class="ml-xl-3 login"><a href ="controller/Logout.php"><span class="border-left pl-xl-4"></span>Log Out</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
          </div>

        </div>
        <!-- </div> -->
        
      </header>

      

      <div class="site-blocks-cover overlay" style="background-image: url(images/brandNavbar.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-12">
              
              
              <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                  <h1 class="" data-aos="fade-up">Welcome To IT JOBS</h1>
                </div>
              </div>

              <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200">

                <form action ="search.php" method="POST">
                  <div class="row align-items-center">
                    <div class="col-lg-12 mb-4 mb-xl-0 col-xl-10">
                      <input type="text" name="search" class="form-control rounded" placeholder="What is the job you want to find?">
                    </div>
                    
                    
                    <div class="col-lg-12 col-xl-2 ml-auto text-right">
                      <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                    </div>
                    
                  </div>
                </form>

              </div>

              <div class="row text-left trending-search" data-aos="fade-up"  data-aos-delay="300">
                <div class="col-12">
                  <h2 class="d-inline-block">Trending Job:</h2>
                  <a href="#">Web developer</a>
                  <a href="#">Business Intelligence</a>
                  <a href="#">Data engineer</a>
                  <a href="#">Software Developer</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>  

      <div class="site-section bg-light">
        <div class="container">
          
          
          <div class="row">
            <div class="col-12">
              <h2 class="h5 mb-4 text-black">Featured Ads</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12  block-13">
              <div class="owl-carousel nonloop-block-13">
                
                <div class="d-block d-md-flex listing vertical">
                  <a href="#" class="img d-block" style="background-image: url('images/Square.png')"></a>
                  <div class="lh-content">
                    <span class="category">Software Engineer</span>
                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="listings-single.html">Hot Job</a></h3>
                    <address>Ho Chi Minh</address>
                    
                  </div>
                </div>

                <div class="d-block d-md-flex listing vertical">
                  <a href="#" class="img d-block" style="background-image: url('images/kydon.png')"></a>
                  <div class="lh-content">
                    <span class="category">PHP Developer</span>
                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="listings-single.html">Hot Job</a></h3>
                    <address>Ha Noi</address>
                    
                  </div>
                </div>

                <div class="d-block d-md-flex listing vertical">
                  <a href="#" class="img d-block" style="background-image: url('images/novaon.png')"></a>
                  <div class="lh-content">
                    <span class="category">PHP/NodeJS DEVELOPER</span>
                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="listings-single.html">New Job</a></h3>
                    <address>Ha Noi</address>
                    
                  </div>
                </div>

                <div class="d-block d-md-flex listing vertical">
                  <a href="#"class="img d-block" style="background-image: url('images/VPNT.png')"></a>
                  <div class="lh-content">
                    <span class="category">Web Developer</span>
                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="listings-single.html">New Job</a></h3>
                    <address>Da Nang</address>
                    
                  </div>
                </div>

                <div class="d-block d-md-flex listing vertical">
                  <a href="#" class="img d-block" style="background-image: url('images/Square.png')"></a>
                  <div class="lh-content">
                    <span class="category">Software Engineer</span>
                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="listings-single.html">Hot Job</a></h3>
                    <address>Ho Chi Minh</address>
                    
                  </div>
                </div>

                <div class="d-block d-md-flex listing vertical">
                  <a href="#" class="img d-block" style="background-image: url('images/kydon.png')"></a>
                  <div class="lh-content">
                    <span class="category">PHP Developer</span>
                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="listings-single.html">Hot Job</a></h3>
                    <address>Ha Noi</address>
                    
                  </div>
                </div>

                <div class="d-block d-md-flex listing vertical">
                  <a href="#" class="img d-block" style="background-image: url('images/novaon.png')"></a>
                  <div class="lh-content">
                    <span class="category">PHP/NodeJS DEVELOPER</span>
                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="listings-single.html">New Job</a></h3>
                    <address>Ha Noi</address>
                    
                  </div>
                </div>

                <div class="d-block d-md-flex listing vertical">
                  <a href="#" class="img d-block" style="background-image: url('images/VPNT.png')"></a>
                  <div class="lh-content">
                    <span class="category">Web Developer</span>
                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="listings-single.html">New Job</a></h3>
                    <address>Da Nang</address>
                    
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        



        <div class="site-section bg-light">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-7 text-left border-primary">
                <h2 class="font-weight-light text-primary">Hot job in year</h2>
              </div>
            </div>
            <div class="row mt-5">
              <?php
              $i = 4;
              $k = 0;
              $kq = $logCtrler -> searchDatabase($_POST['search']);
              if($kq == false){
                echo"Cant find";
                $GLOBALS['k']++;
              }
              if($GLOBALS['k'] == 0){
                foreach($kq as $result){
                 $id = $result['id'] ; 
                 $technology = $result['technology']; 
                 $salary = $result['salary']; 
                 $decription = $result['decription']; 
                 $address = $result['address']; 
                 $phonenumber = $result['phonenumber'];
                 if($GLOBALS['i']%2 == 0){
                   echo "<div class='col-lg-6'>";
                 } 

                 echo"
                 <div class='d-block d-md-flex listing vertical'>
                 
                 <a = href ='blog-single.php?blog-single=$result[id]'><img src='images/FindJobdex.jpg' class='img d-block'></a>
                 <div class='lh-content'>
                 <span class='category'>{$technology} </span>
                 <a href='blog-single.php?blog-single=$result[id]'' class='bookmark'><span class='icon-heart'></span></a>
                 <button style ='font-size: 12px;'><a href='blog-single.php?blog-single=$result[id]'>Detail</a></button>
                 <address>{$address}</address>
                 
                 </div>
                 </div>
                 ";
                 $GLOBALS['i']++;
                 if($GLOBALS['i']%2 == 0){
                   echo "</div>";
                 } 
               }
             }	
             ?>
           </div>
         </div>
       </div>
       <div class="newsletter bg-primary py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h2>Newsletter</h2>
              <p>It Jobs là cộng đồng công nghệ lớn nhất tại Việt Nam.</p>
            </div>
            
          </div>
        </div>
      </div>
      
      
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="footer-heading mb-4">About</h2>
                  
                </div>
                
                <div class="col-md-3">
                  <h2 class="footer-heading mb-4">Navigations</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h2 class="footer-heading mb-4">Follow Us</h2>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/rangeslider.min.js"></script>

    <script src="js/main.js"></script>
    
  </body>
  </html>  