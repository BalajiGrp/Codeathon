
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <!--Nav Section-->
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
                    href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page"
                    href="#">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page"
                    href="#">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page" href="#">Live
                    Tracking</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page"
                    href="#contact">Contact Us</a>
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
    <!--Nav Section ends-->


    <section class="Login-Page py-5">
    <div class="container vh-100 Login-contain d-flex justify-content-center align-items-center rounded">
        <div class="row">
          <div class="col-md-12">

       <!-- Register Page -->
          <?php
              require_once "database.php";

            if(isset($_POST["submit"])){
                $fullName = $_POST["Uname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $passwordRepeat = $_POST["repeat_password"];

                $errors = array();

              if(empty($fullName) || empty($email)  || empty($password) || empty($passwordRepeat)){
                 $errors[] = "All Fields are Required";
              }

              if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                 $errors[] = "Email is not valid";
              }
  
              if(strlen($password) < 8){
                $errors[] = "Password must be at least 8 Characters long";
              }

              if($password !== $passwordRepeat){
               $errors[] = "Password does not match";
              }

             
              $sql = "SELECT * FROM users WHERE email = ? ";
              $stmt = mysqli_prepare($conn,$sql);

              if($stmt){
                mysqli_stmt_bind_param($stmt,'s',$email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) > 0){
                  $errors[] = "Email already Exists";
                }

                mysqli_stmt_close($stmt);
              }else{
                $errors[] = "Database Connection failed";
              }

              if(empty($errors)){
                $passwordHash = password_hash($password,PASSWORD_DEFAULT);

                $sql = "INSERT INTO users(full_name, email, password) VALUES (?,?,?)";
                $stmt = mysqli_prepare($conn,$sql);

                if($stmt){
                  mysqli_stmt_bind_param($stmt,'sss', $fullName,  $email, $passwordHash);
                   if(mysqli_stmt_execute($stmt)){
                     echo "<div id='success-alert' class='alert alert-success'>Registered Successfully</div>";
                   }else{
                     echo "<div id='error-alert' class='alert alert-danger'>Failed to Registered</div>";
                   }

                   mysqli_stmt_close($stmt);
                }else{
                    echo "<div id='error-alert' class='alert alert-danger'>Database Connection Failed</div>";
                }

              } else{
                   foreach($errors as $error){
                      echo "<div id='error-alert' class='alert alert-danger'>$error</div>";
                   }

                   echo "<script>
                           setTimeout(function() {
                           let errorAlert = document.getElementById('error-alert');
                             if(errorAlert) {
                               errorAlert.style.display = 'none';
                              }
                    
                           let successAlert = document.getElementById('success-alert');
                             if(successAlert) {
                               successAlert.style.display = 'none';
                              }
                          }, 4000);
                        </script>";
              }
           }

          ?>
     
          <!-- login page -->

            <?php
            session_start();

            if(isset($_POST["login"])) {
              $email = $_POST["email"];
              $password = $_POST["password"];

              require_once "database.php";

              $sql = "SELECT * FROM users WHERE email = ?";
              $stmt = mysqli_prepare($conn, $sql);

              if($stmt){
                mysqli_stmt_bind_param($stmt,'s',$email);
                mysqli_stmt_execute($stmt);

                $result = mysqli_stmt_get_result($stmt);

                $user = mysqli_fetch_assoc($result);

                if($user){
                  if(password_verify($password, $user["password"])){
                    $_SESSION["user"] = $user;
                    // header("Location: display.php");
                    exit();
                  }else{
                    echo "<div id='error-alert' class='alert alert-danger'>Password does not match</div>";
                  }

                }else{
                  echo "<div id='error-alert' class='alert alert-danger'>Email does not exists</div>";
                }

              mysqli_stmt_close($stmt);

              }else{
                echo "<div id='error-alert' class='alert alert-danger'>Database not connected</div>";
              }

              //  $mysqli_close($conn);
              echo "<script>
                      setTimeout(function() {
                      let errorAlert = document.getElementById('error-alert');
                      if(errorAlert) {
                      errorAlert.style.display = 'none';
                      }
                      }, 3000);
                  </script>";
            }
            
           
          ?>

                   

            <div class="main">  	
              <input type="checkbox" id="chk" aria-hidden="true">
          
                <div class="signup">
                  <form action="./Login.php" method="post">
                    <label for="chk" class="logLabel" aria-hidden="true">Sign up</label>
                    <input class="Log" type="text" name="Uname" placeholder="User name" required="" >
                    <input class="Log" type="email" name="email" placeholder="Email" required="" >
                    <input class="Log" type="password" name="password" placeholder="Password" required="" >
                    <input class="Log" type="password" name="repeat_password" placeholder="Confirm Password" required="" >
                    <button class="log-btn" type="submit" name="submit">Sign up <i class="fa-solid fa-ship"></i></button>
                  </form>
                </div>
          
                <div class="login">
                  <form action="./Login.php " method="post">
                    <label for="chk" class="logLabel" aria-hidden="true">Login</label>
                    <input class="Log" type="email" name="email" placeholder="Email" required="">
                    <input class="Log" type="password" name="password" placeholder="Password" required="">
                    <button class="log-btn" type="submit" name="login">Go To DashBoard <i class="bi bi-truck"></i></button>
                  </form>
                </div>
            </div>
          </div>   
        </div>
    </div>
    </section>


    <!--Footer section-->
    <section class="conatiner-fluid bg-dark py-5">
    <div class="container">
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
    <!--Footer Section Ends-->

</body>
</html>