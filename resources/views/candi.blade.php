<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
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
            <div class="d-flex flex-row justify-content-around">
    <div class="card p-2 bd-highlight" style="width: 18rem;">
  <img src="https://m.media-amazon.com/images/I/71qrNEa8RKL._SL1500_.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">M&MS</h5>
    <p class="card-text">Some quick example text to build on the M&MS and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
  </div>
    </div>

  <div class="card p-2 bd-highlight" style="width: 18rem;">
  <img src="https://www.ubuy.com.jo/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvNzFlUnYxSm5wU0wuX1NMMTUwMF8uanBn.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">FERRERO</h5>
    <p class="card-text">Some quick example text to build on the M&MS and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
  </div></div>

  <div class="card p-2 bd-highlight" style="width: 18rem;">
  <img src="https://bjs.scene7.com/is/image/bjs/150435?$bjs-Zoom$" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">M&MS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
  </div></div>
  </div> <br><br>

  <div class="d-flex flex-row justify-content-around">
  <div class="card p-2 bd-highlight" style="width: 18rem;">
  <img src="https://i5.walmartimages.com/asr/db1f1684-e2a2-4742-81a8-c6eac9593b30.a18fca0c44d84d0fd354739fe319ee71.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">KISSES</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
  </div></div>

  <div class="card p-2 bd-highlight" style="width: 18rem;">
  <img src="https://s7d2.scene7.com/is/image/hersheysassets/0_34000_29005_5_701_89033_012_Item_Front?fmt=png-alpha&hei=908" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">hersheysassets</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
  </div></div>

  <div class="card p-2 bd-highlight" style="width: 18rem;">
  <img src="https://cdnprod.mafretailproxy.com/sys-master-root/h90/hf4/11555181625374/511781_main.jpg_1700Wx1700H" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">TOPS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
  </div></div>
  </div>
        </div>
        <br> <br>

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
