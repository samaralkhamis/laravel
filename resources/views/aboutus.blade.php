<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .topnav a:hover {
                border-bottom: 3px solid red;
            }

            body {
    background-color: #f1f1f1;
}
.ourTeam-hedding p{
    color: #979797;
}
.ourTeam-hedding strong{
    color: black;
}
.ourTeam-hedding{
    margin-bottom: 50px;
}
.ourTeam-hedding h1{
    font-size: 25px;
    font-weight: bold;
    color: #145889;
}
.ourTeam-box{
    border-radius: 2px;
    border-top: 6px solid #5DDDD3;
    margin: 0px;
    background-color: #FFFFFF;
    margin-bottom: 30px;
}
.section1{
    padding: 30px 0px 30px 0px;
}
.section1 img{
    border-radius: 50%;
    height: 130px;
    width: 130px;
}
.section2 p{
    font-weight: bold;
    color: #5DDDD3;
    letter-spacing: 1px;
}
.section2 span{
    color: #979597;
}
.section3{
    background-color: #5DDDD3;
}
.section3 i{
    color: #ffffff !important;
    padding: 15px;
    font-size: 15px;
}
.section-info{
    border-top: 6px solid #90DFAA;
}
.section-info p{
    color: #90DFAA;
}
.section-info .section3{
    background-color: #90DFAA;
}
.section-danger{
    border-top: 6px solid #FD8469;
}
.section-danger p{
    color: #FD8469;
}
.section-danger .section3{
    background-color: #FD8469;
}

        </style>
    </head>
    <body>

    <header>
    <div class="container-fluied">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">CHOCKOLATE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-black" type="button" href="#" data-toggle="modal" data-target="#myModal">Sign In</a>                  
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-black" type="button" href="#" data-toggle="modal" data-target="#myModal">Register</a>
                </li>
            </ul>
        </div>

    </nav>
</div>
    </header>
<br> <br> 
    <div class="container">
  <div class="row">
    <div class="col-md-12 pt-5 pb-2 ourTeam-hedding text-center">
      <h1>Our Team</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<strong> sed do eiusmod
      tempor incididunt </strong>ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="row section-success ourTeam-box text-center">
        <div class="col-md-12 section1">
          <img src="https://media.discordapp.net/attachments/976113421546307604/978361809197219920/ss.PNG">
        </div>
        <div class="col-md-12 section2 pb-3">
          <p>Samar Alkhamis</p>
          <span>Lorem ipsum dolor sit amet, <br>consectetur.</span>
        </div>
        <div class="col-md-12 section3">
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>
          <i class="fa fa-dribbble" aria-hidden="true"></i>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="row section-info ourTeam-box text-center">
        <div class="col-md-12 section1">
          <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg">
        </div>
        <div class="col-md-12 section2 pb-3">
          <p>Ebrahim Tamimi</p>
          <span>Lorem ipsum dolor sit amet, <br>consectetur.</span>
        </div>
        <div class="col-md-12 section3">
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>
          <i class="fa fa-dribbble" aria-hidden="true"></i>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="row section-danger ourTeam-box text-center">
        <div class="col-md-12 section1">
          <img src="https://cdn.discordapp.com/attachments/973479502984388638/981194239289487380/0.jpg">
        </div>
        <div class="col-md-12 section2 pb-3">
          <p>Ghofran Momani</p>
          <span>Lorem ipsum dolor sit amet, <br>consectetur.</span>
        </div>
        <div class="col-md-12 section3">
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>
          <i class="fa fa-dribbble" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div>
</div> 
        </div>
        <br> <br>

        <?php
   #foreach ($Team as $T) {

   #print_r($T["Name"]);
     
   #print_r($T["Age"]);
      
  #echo "<br>";
 
  //  }
?> 

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </body>
</html>
