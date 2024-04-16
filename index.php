<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aikyastar</title>
  <link rel="stylesheet" href="style.css">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!--Bootstrap icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
    rel="stylesheet">
  <!--font Awesome fonts-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
  <!--nav section-->
  <section class="mb-1 sticky-top">
    <nav class="navbar navbar-expand-lg  navCol">
      <div class="container-fluid">
        <a class="navbar-brand ms-3" href="#">
          <img src="./e5934n3j.png" class="img-fluid ms-5" width="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 ms-3 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page"
                href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page"
                href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page"
                href="#products">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page" href="#">Live
                Tracking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page"
                href="#contact">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nav-link active ms-3 fs-5 fw-normal " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Login</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item fs-5 fw-normal hover-underline-animation" href="Login.php">User-Login</a></li>
                <li><a class="dropdown-item fs-5 fw-normal hover-underline-animation" href="Admin_login.php">Admin-Login</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success rounded-pill" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

  </section>
  <!--nav section ends-->


  <!--Slider section-->
  <section class="mb-3">
    <div class="container-fluid">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./Untitled-1 char_page-0001.jpg" class="d-block w-100 rounded" alt="...">
            <div class="carousel-caption d-md-block">
              <h3 class="sliderTag">Exceedingly Good Quality</h3>
              <p class="brand">#AIKYASTAR</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./Untitled-1 coconut_page-0001.jpg" class="d-block w-100 rounded" alt="...">
            <div class="carousel-caption  d-md-block">
              <h3 class="sliderTag">Global Solutions at Your Doorstep</h3>
              <p class="brand">#AIKYASTAR</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./Untitled-1 tree_page-0001.jpg" class="d-block w-100 rounded" alt="...">
            <div class="carousel-caption  d-md-block">
              <h3 class="sliderTag">Your Gateway to International Markets</h3>
              <p class="brand">#AIKYASTAR</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <!--Slider section ends-->



  <!--card section-->
  <section>
    <div class="container-fluid py-5 homeCont ">
      <div class="row">
        <div class="col-lg-4  mb-2">
          <div class="card h-100 p-2">
            <div class="card-body">
              <div>
                <h5 class="card-title fw-bold"><i class="bi bi-bag-check-fill iconCon"></i> High Quality</h5>
                <h6 class="card-subtitle mb-2 text-muted ms-4">100%</h6>
              </div>
              <div class="mb-1">
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
              </div>
              <p class="card-text fw-normal">We are committed to provide Top Grade quality products to our customers
                around the world.</p>
            </div>
          </div>

        </div>

        <div class="col-lg-4  mb-2">
          <div class="card h-100 p-2">
            <div class="card-body">
              <h5 class="card-title fw-bold"><i class="fa-solid fa-handshake iconCon"></i> Trust Worthy</h5>
              <h6 class="card-subtitle mb-2 text-muted ms-4">Familiarity Breeds Trust</h6>
              <div class="mb-1">
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
              </div>
              <p class="card-text fw-normal">We believe that trust is the keystone to business and we ascertain that we
                will surpass your expectations.</p>
            </div>
          </div>

        </div>

        <div class="col-lg-4  mb-2">
          <div class="card h-100 p-2">
            <div class="card-body">
              <h5 class="card-title fw-bold"><i class="bi bi-globe-central-south-asia iconCon"></i> World wide Services
              </h5>
              <h6 class="card-subtitle mb-2 text-muted ms-4">Easy Delivery</h6>
              <div class="mb-1">
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
                <i class="bi bi-star-fill iconstar"></i>
              </div>
              <p class="card-text fw-normal">We ensure to provide services to our customers around the world and to
                update periodically of in-process orders.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--card section ends-->


  <!--about section-->
  <section>
    <div class="container py-5" id="about">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mb-5 Abt-text Con-text">About Us</h1>
        </div>
        <div class="col-lg-6">

        </div>


        <div class="col-12 col-lg-6 mb-5">
          <h2 class="mb-4 Com-name">The Aikya</h2>
          <p class="fs-4">Welcome to Aikyastar international private limited, your number one
            source for all premium quality products. We are a young dynamic company
            that aim to be the most recognized name when it comes to Exporting quality
            products and to deliver best service to our clients.</p>
        </div>
        <div class="col-12 col-lg-6 mb-5">
          <img src="./expoert.jpg" class="img-fluid rounded mb-4" alt="" width="600px">
        </div>

        <div class="col-12 col-lg-6">
          <img src="./ship transport.jpg" class="img-fluid rounded mb-4" alt="" width="600px">
        </div>
        <div class="col-12 col-lg-6">
          <h2 class="mb-4 Com-name">We are Expert of</h2>
          <p class="fs-4">Aikyastar international private limited is headquartered in Chennai, TN, India.
            We are specialized in exporting apparels, Agro products, coconuts and coir products
            such as Coco peat, Coconut Fibre, Coconut Fibre Rope. All the products are quality
            tested by experts.</p>
        </div>
      </div>
    </div>
  </section>
  <!--about section ends-->



  <!--Product section-->
  <section class="py-3">
    <div class="container Prodarea rounded py-5" id="products">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mb-5 Abt-text Con-text">Products</h1>
        </div>
        <div class="col-lg-6 d-flex justify-content-end">
          <div class="w-50">
            <a href="Enquiry.php" class="EnqBtn w-100">Enquiry</a>
          </div>
        </div>

        <div class="col-lg-4 mb-3 py-3">
          <div class="card h-100">
            <div class="card-body">
              <div class="text-center">
                <img src="./coconut-1000x1000.jpg" class="img-fluid mb-4" width="250vw" alt="">
              </div>
              <h3 class="text-center">Coconut</h3>
              <div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-3 py-3">
          <div class="card h-100">
            <div class="card-body">
              <div class="text-center">
                <img src="./semi-husked-coconuts-500x500.webp" class="img-fluid mb-4 " width="250vw" alt="">
              </div>
              <h3 class="text-center">Semi Husked Coconut</h3>
              <div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-3 py-3">
          <div class="card h-100">
            <div class="card-body">
              <div class="text-center">
                <img src="./fully husked cocunut.jpg" class="img-fluid mb-4" width="250vw" alt="">
              </div>
              <h3 class="text-center">Fully Husked Coconut</h3>
              <div>
                
              </div>
            </div>
          </div>
        </div>


        <!--second section-->

        <div class="col-lg-4 mb-3 py-3">
          <div class="card h-100">
            <div class="card-body">
              <div class="text-center">
                <img src="./cocunut  charcoal.webp" class="img-fluid mb-4" width="250vw" alt="">
              </div>
              <h3 class="text-center">Coconut Charcoal</h3>
              <div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-3 py-3">
          <div class="card h-100">
            <div class="card-body">
              <div class="text-center">
                <img src="./coco-peat-disc-.webp" class="img-fluid mb-4" width="250vw" alt="">
              </div>
              <h3 class="text-center">Coir Disk</h3>
              <div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-3 py-3">
          <div class="card h-100">
            <div class="card-body">
              <div class="text-center">
                <img src="./5kg-coir-block-500x500.webp" class="img-fluid mb-4" width="250vw" alt="">
              </div>
              <h3 class="text-center">Coir Blocks</h3>
              <div>
                
              </div>
            </div>
          </div>
        </div>


        <!--third section-->

        <div class="col-lg-4 mb-3 py-3">
          <div class="card h-100">
            <div class="card-body">
              <div class="text-center">
                <img src="./peat-block-500x500.webp" class="img-fluid mb-4" width="250vw" alt="">
              </div>
              <h3 class="text-center">Peat Blocks</h3>
              <div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-3 py-3">
          <div class="card h-100">
            <div class="card-body">
              <div class="text-center">
                <img src="./coir-fibre-bales-500x500-500x500.webp" class="img-fluid mb-4" width="250vw" alt="">
              </div>
              <h3 class="text-center">Coir Bales</h3>
              <div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-3 py-3">
          <div class="card h-100">
            <div class="card-body">
              <div class="text-center">
                <img src="./coconut-husk-fiber-500x500.webp" class="img-fluid mb-4" width="250vw" alt="">
              </div>
              <h3 class="text-center">Coconut Fibre</h3>
              <div>
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--Product section ends-->



  <!--New-products section-->
  <section class="py-3">
    <div class="container Prodarea rounded py-5">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mb-5 Abt-text Con-text"> Season Products</h1>
        </div>
        <div class="col-lg-6 d-flex justify-content-end">
          <div class="w-50">
            <a href="Enquiry.php" class="EnqBtn w-100">Enquiry</a>
          </div>
        </div>

        <?php
              require_once "database.php";
               if(!$conn){
                 die("Connection is not successful");
               }
              $sql = "SELECT * FROM add_product";
             $result = mysqli_query($conn,$sql);
              while($row = mysqli_fetch_assoc($result)){
              $id = $row["id"];
            
            $ProductName = $row["Product_name"];
             
             $image = $row["image"];

                echo " 
               <div class='col-lg-4 mb-3 py-3'>
                <div class='card h-100'>
                 <div class='card-body'>
               <div class='text-center'>
                <img src='$image' class='img-fluid mb-4' width='200px' height='200px' alt=''>
              </div>
              <h3 class='text-center'>$ProductName</h3>
              <div>
                
              </div>
            </div>
          </div>
        </div>  
               ";
               
               }

            ?>

        

      </div>
    </div>
  </section>
   <!--New products section ends-->


   <!--Order section-->
   <section class="ord-sec mb-3">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="sample-icon mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="Currentcolor" class="bi bi-truck truck" viewBox="0 0 16 16">
                  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                </svg>
              </div>

              <div class="text-center mb-3">
                <a href="order.html" class="fs-4 text-decoration-none btn btn-success"><i class="bi bi-bag-check"></i> Place Order</a>
              </div>
            </div>
          </div>
      </div>
   </section>
   <!--Order section-->


  <!--Contact section-->
  <section class="mb-1" id="contact">
    <div class="container-fluid py-5" style="background-image: url(./aerial-view-container-cargo-ship-sea-1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    ">
      <div class="row ">
        <div class="col-lg-6 col-sm-6">
          <div class="map-responce">
            <iframe class="google-map mb-4"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33516.78812920603!2d80.16243591183465!3d13.119934394311905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52645e09cf0d7b%3A0x4a89224105bf8551!2sKorattur%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1709309469217!5m2!1sen!2sin"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="col-lg-6 col-sm-6">
          <h1 class="Con-text mb-4">Contact Us</h1>
          <p class="fs-4 fw-semibold Com-name">Aikyastar International Private Limited,</p>
          <p class="fs-5 fw-medium"><i class="bi bi-geo-alt icon-foot"></i> No.10/2 Flat No. S3, Perumal Kovil
            Street,<br> Agraharam, Korattur, Chennai-600076.</p>
          <p class="fs-5 fw-medium">Tamil Nadu, INDIA.</p>
          <p class="fs-5 fw-medium"><i class="bi bi-telephone icon-foot"></i> Mob: +91 0000000000</p>
          <p class="fs-5 fw-medium"><i class="bi bi-envelope icon-foot"></i> Email: info@aikyastar.com</p>
          <p class="fs-5 fw-medium"><i class="bi bi-browser-edge icon-foot"></i> Web: www.aikyastar.com</p>
        </div>
      </div>
    </div>
  </section>
  <!--Contact section-->

  <!--footer-->
  <section class="container-fluid bg-dark py-5">
    <div class="container ">
      <div class="row">
        <div class="col-12 col-lg-6 mb-5">
          <h3 class="text-light footText mb-4">Aikyastar</h3>
          <div class="d-flex">
            <a href="https://www.facebook.com/profile.php?id=100083519252879&mibextid=LQQJ4d" target="_blank" class="text-decoration-none ">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#3a86ff" class="bi bi-facebook"
                viewBox="0 0 16 16">
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
              </svg>
            </a>

            <a href="https://www.instagram.com/aikyastarinternational?igsh=ZW5waThjZHUyMnJh" target="_blank" class="text-decoration-none ms-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fb5607" class="bi bi-instagram"
                viewBox="0 0 16 16">
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
              </svg>
            </a>

            <a href="#" class="text-decoration-none ms-3" target="_blank" class="text-decoration-none ms-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#f8f9fa" class="bi bi-twitter-x"
                viewBox="0 0 16 16">
                <path
                  d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
              </svg>
            </a>

            <a href="https://www.linkedin.com/company/aikyastar-international-pvt-ltd/about/" target="_blank" class="text-decoration-none ms-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#1982c4" class="bi bi-linkedin"
                viewBox="0 0 16 16">
                <path
                  d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
              </svg>
          </div>
          </a>
        </div>

        <div class="col-12 col-lg-6">
          <div>
            <h3 class="text-light footText mb-4">Contact</h3>
            <p class="text-light fw-normal"><i class="bi bi-telephone icon-foot"></i> Mob: +91 0000000000</p>
            <p class="text-light fw-normal"><i class="bi bi-envelope icon-foot"></i> Email: info@aikyastar.com</p>
            <p class="text-light fw-normal"><i class="bi bi-browser-edge icon-foot"></i> Web: www.aikyastar.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--footer ends-->





  <script src="script.js"></script>
</body>

</html>







